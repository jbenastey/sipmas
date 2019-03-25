<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        if (!$this->session->has_userdata('session_username')){
            redirect(site_url('login'));
        }
    }

    public function index()
	{
	    $data['level'] = $this->level($this->session->userdata['session_level']);
		$this->load->view('templates/header');
        $this->load->view('backend/index',$data);
        $this->load->view('templates/footer');
	}

	function level($lvl){
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
