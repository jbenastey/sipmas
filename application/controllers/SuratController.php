<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 26-Feb-19
 * Time: 22:13
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class SuratController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $model = array('User', 'Surat');
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

        $data['surat'] = $this->Surat->get_surat();

        $data['detail'] = $this->Surat->get_surat_join();

        $this->load->view('templates/header');
        $this->load->view('backend/surat/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['level'] = level($this->session->userdata['session_level']);

        if (isset($_POST) && count($_POST) > 0) {
            $generate = substr(time(), 5);
            $permintaanId = 'SP-' . $generate;
            $detailId = 'SPD-' . $generate;

            $dataSurat = array(
                'permintaan_id' => $permintaanId,
                'permintaan_nomor' => $this->input->post('nomorSurat'),
                'permintaan_tanggal' => $this->input->post('tanggalSurat')
            );

            $detailNama = $this->input->post('nama');
            $detailPerkara = $this->input->post('perkara');
            $detailHukuman = $this->input->post('hukuman');
            $detailKet = $this->input->post('ket');

            $detailSurat = array();
            for ($i = 0; $i < count($detailNama); $i++) {
                $detailSurat[$i] = array(
                    'detail_id' => $detailId . $i,
                    'detail_permintaan_id' => $permintaanId,
                    'detail_nama' => $detailNama[$i],
                    'detail_perkara' => $detailPerkara[$i],
                    'detail_hukuman' => $detailHukuman[$i],
                    'detail_ket' => $detailKet[$i]
                );
            }
            $this->Surat->create_permintaan($dataSurat);
            $this->Surat->create_permintaan_detail($detailSurat);

            $this->session->set_flashdata('alert', 'create');
            redirect('surat');
        } else {
            $this->load->view('templates/header');
            $this->load->view('backend/surat/create', $data);
            $this->load->view('templates/footer');
        }
    }

    public function read($id)
    {
        $data['surat'] = $this->Surat->get_surat_by_id($id);
        $data['detail'] = $this->Surat->get_surat_detail($id);

        $this->load->view('templates/header');
        $this->load->view('backend/surat/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['surat'] = $this->Surat->get_surat_by_id($id);
        $data['detail'] = $this->Surat->get_surat_detail($id);

        if (isset($_POST) && count($_POST) > 0) {
            $dataSurat = array(
                'permintaan_nomor' => $this->input->post('nomorSurat'),
                'permintaan_tanggal' => $this->input->post('tanggalSurat')
            );

            $detailNama = $this->input->post('nama');
            $detailPerkara = $this->input->post('perkara');
            $detailHukuman = $this->input->post('hukuman');
            $detailKet = $this->input->post('ket');

            $detailSurat = array();
            for ($i = 0; $i < count($detailNama); $i++) {
                $detailSurat[$i] = array(
                    'detail_id' => $data['detail'][$i]['detail_id'],
                    'detail_nama' => $detailNama[$i],
                    'detail_perkara' => $detailPerkara[$i],
                    'detail_hukuman' => $detailHukuman[$i],
                    'detail_ket' => $detailKet[$i]
                );
            }

            $this->Surat->update_permintaan($id,$dataSurat);
            $this->Surat->update_permintaan_detail($detailSurat);

            $this->session->set_flashdata('alert', 'update');
            redirect('surat');
        } else {
            $this->load->view('templates/header');
            $this->load->view('backend/surat/update', $data);
            $this->load->view('templates/footer');
        }
    }

    public function delete($id){
        $data = array(
            'permintaan_status' => 'nonaktif'
        );
        $this->Surat->delete_permintaan($id, $data);
        $this->session->set_flashdata('alert', 'delete');
        redirect('surat');
    }

    public function disposition($id)
    {
        $data = array(
            'permintaan_status_surat' => 'setuju'
        );
        $this->Surat->disposition($id, $data);
        $this->session->set_flashdata('alert', 'disposition');
        redirect('surat');
    }

    public function reject($id)
    {
        $data = array(
            'permintaan_status_surat' => 'tolak'
        );
        $this->Surat->disposition($id, $data);
        $this->session->set_flashdata('alert', 'reject');
        redirect('surat');
    }
}