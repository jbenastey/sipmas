<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('User','Dashboard'));
        $this->load->helper(array('tgl_indo_helper','level_helper'));
        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }
    }

    public function index()
	{
	    $data['level'] = level($this->session->userdata['session_level']);
	    $data['surat'] = $this->Dashboard->count_permintaan();
        $data['setuju'] = $this->Dashboard->count_permintaan_setuju('setuju');
        $data['tunggu'] = $this->Dashboard->count_permintaan_setuju('tunggu');
        $data['tahanan'] = $this->Dashboard->count_tahanan();
		$this->load->view('templates/header');
        $this->load->view('backend/index',$data);
        $this->load->view('templates/footer');
	}
}
