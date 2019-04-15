<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 28-Mar-19
 * Time: 15:17
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class SptController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $model = array('User', 'Spt', 'Surat');
        $helper = array('tgl_indo_helper','level_helper');
        $this->load->model($model);
        $this->load->helper($helper);
        if (!$this->session->has_userdata('session_username')) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $data['level'] = level($this->session->userdata['session_level']);

        $data['surat'] = $this->Spt->get_spt();

        $this->load->view('templates/header');
        $this->load->view('backend/spt/index', $data);
        $this->load->view('templates/footer');
    }

    public function create($id)
    {
        $data['level'] = level($this->session->userdata['session_level']);

        $data['surat'] = $this->Surat->get_surat_by_id($id);

        $data['detail'] = $this->Surat->get_surat_detail($id);

        $data['nama'] = $this->User->get_user();

        if (isset($_POST) && count($_POST) > 0) {
            $generate = substr(time(), 5);
            $sptId = 'SPT-' . $generate;

            $dataSpt = array(
                'spt_id' => $sptId,
                'spt_no_surat' => $this->input->post('nomorSurat'),
                'spt_user_id' => $this->input->post('userId'),
                'spt_berlaku' => $this->input->post('berlakuDari'),
                'spt_tanggal' => $this->input->post('tanggalSurat'),
            );

            $detailSpt = array();
            for ($i = 0; $i < count($data['detail']); $i++) {
                $detailSpt[$i] = array(
                    'detail_id' => $data['detail'][$i]['detail_id'],
                    'detail_spt_id' => $sptId,
                );
            }
            $this->Spt->create_spt($dataSpt);
            $this->Surat->update_permintaan_detail($detailSpt);

            $this->session->set_flashdata('alert', 'createSpt');
            redirect('spt');
        } else {
            $this->load->view('templates/header');
            $this->load->view('backend/spt/create', $data);
            $this->load->view('templates/footer');
        }
    }

    public function read($id)
    {
        $data['spt'] = $this->Spt->get_spt_by_id($id);
        $data['detail'] = $this->Spt->get_spt_detail($id);
        $data['user'] = $this->User->get_user_by_id($data['spt']['spt_user_id']);

        $this->load->view('templates/header');
        $this->load->view('backend/spt/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['level'] = level($this->session->userdata['session_level']);

        $data['spt'] = $this->Spt->get_spt_by_id($id);

        $data['detail'] = $this->Spt->get_spt_detail($id);

        $data['nama'] = $this->User->get_user();

        if (isset($_POST) && count($_POST) > 0) {
            $dataSpt = array(
                'spt_no_surat' => $this->input->post('nomorSurat'),
                'spt_user_id' => $this->input->post('userId'),
                'spt_berlaku' => $this->input->post('berlakuDari'),
                'spt_tanggal' => $this->input->post('tanggalSurat'),
            );

            $this->Spt->update_spt($id,$dataSpt);
            $this->session->set_flashdata('alert', 'updateSpt');
            redirect('spt');
        } else {
            $this->load->view('templates/header');
            $this->load->view('backend/spt/update', $data);
            $this->load->view('templates/footer');
        }
    }

    public function delete($id){
        $data = array(
            'spt_status' => 'nonaktif'
        );
        $this->Spt->delete_spt($id, $data);
        $this->session->set_flashdata('alert', 'deleteSpt');
        redirect('spt');
    }

    public function disposition($id)
    {
        $data = array(
            'spt_status_surat' => 'setuju'
        );
        $this->Spt->disposition($id, $data);
        $this->session->set_flashdata('alert', 'dispositionSpt');
        redirect('spt');
    }

    public function reject($id)
    {
        $data = array(
            'spt_status_surat' => 'tolak'
        );
        $this->Spt->disposition($id, $data);
        $this->session->set_flashdata('alert', 'rejectSpt');
        redirect('spt');
    }

    public function ajaxNama($id){
        if ($id == 0){
            echo json_encode(null);
        }else{
            $data = $this->User->get_user_by_id($id);
            echo json_encode($data);
        }
    }

    public function notification($id){
        $data = $this->Spt->get_spt_by_id($id);
        $dataNotif = array(
            'notifikasi_user_id' => $data['spt_user_id'],
            'notifikasi_spt_id' => $data['spt_id']
        );
        $this->Spt->create_notification($dataNotif);

        $this->session->set_flashdata('alert', 'notification');
        redirect('spt/read/'.$id);
    }
}