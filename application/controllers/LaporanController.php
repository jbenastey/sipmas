<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 02-Apr-19
 * Time: 21:43
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $model = array('User', 'Spt', 'Surat', 'Laporan');
        $helper = array('tgl_indo_helper', 'level_helper', 'form', 'url');
        $this->load->model($model);
        $this->load->helper($helper);
        if (!$this->session->has_userdata('session_username')) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $data['level'] = level($this->session->userdata['session_level']);

        $data['laporan'] = $this->Laporan->get_laporan();

        $data['detail'] = $this->Surat->get_all_surat_detail();

        $data['error'] = '';

        $this->load->view('templates/header');
        $this->load->view('backend/laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $config['upload_path'] = './assets/upload/laporan/';
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = 0;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('laporan')) {

                $error = array('error' => $this->upload->display_errors());
                var_dump($error);

                redirect('laporan');
            } else {
                $detailId = $this->input->post('detailId');

                $foto = $this->upload->data('file_name');

                $dataUpload = array(
                    'laporan_upload' => $foto,
                    'laporan_user_id' => $this->session->userdata('session_id'),
                    'laporan_detail_id' => $detailId,
                );

                $this->Laporan->create_laporan($dataUpload);
                redirect('laporan');
            }
        } else {
            redirect('laporan');
        }
    }
}