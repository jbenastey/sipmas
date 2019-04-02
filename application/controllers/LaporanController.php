<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 02-Apr-19
 * Time: 21:43
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $model = array('User', 'Spt', 'Surat','Laporan');
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

        $data['laporan'] = $this->Laporan->get_laporan();

        $this->load->view('templates/header');
        $this->load->view('backend/laporan/index', $data);
        $this->load->view('templates/footer');
    }
}