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
        $this->load->model($model);
        $this->load->helper('tgl_indo_helper');
        if (!$this->session->has_userdata('session_username')) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $data['level'] = $this->level($this->session->userdata['session_level']);

        $data['surat'] = $this->Spt->get_spt();

        $this->load->view('templates/header');
        $this->load->view('backend/spt/index', $data);
        $this->load->view('templates/footer');
    }

    public function create($id)
    {
        $data['level'] = $this->level($this->session->userdata['session_level']);

        $data['surat'] = $this->Surat->get_surat_by_id($id);

        $data['detail'] = $this->Surat->get_surat_detail($id);

        if (isset($_POST) && count($_POST) > 0) {
            $generate = substr(time(), 5);
            $sptId = 'SPT-' . $generate;

            $dataSpt = array(
                'spt_id' => $sptId,
                'spt_no_surat' => $this->input->post('nomorSurat'),
                'spt_nama' => $this->input->post('nama'),
                'spt_nip' => $this->input->post('nip'),
                'spt_jabatan' => $this->input->post('jabatan'),
                'spt_berlaku' => $this->input->post('berlakuDari'),
                'spt_tanggal' => $this->input->post('tanggalSurat'),
            );

            $detailSpt = array();
            for ($i = 0; $i < count($data['detail']); $i++){
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

    public function read($id){
        $data['spt'] = $this->Spt->get_spt_by_id($id);
        $data['detail'] = $this->Spt->get_spt_detail($id);

        $this->load->view('templates/header');
        $this->load->view('backend/spt/read', $data);
        $this->load->view('templates/footer');
    }

    function level($lvl)
    {
        $level = array(
            'umum' => 'Bagian Umum',
            'kepala' => 'Kepala Bapas',
            'kasubsibka' => 'Kasubsi BKA',
            'kasubsibkd' => 'Kasubsi BKD',
            'pk' => 'Pembimbing Kemasyarakatan',
        );
        return $level[$lvl];
    }
}