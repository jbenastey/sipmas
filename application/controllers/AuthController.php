<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 26-Feb-19
 * Time: 21:52
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $model = array('User');
        $this->load->model($model);
    }

    public function index(){
        $this->load->view('backend/auth/login');
    }

    public function login()
    {
        if ($this->session->has_userdata('session_username')){
            $this->session->set_flashdata('alert', 'sudah_login');
            redirect(site_url());
        }
        if (isset($_POST['login'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = array(
                'user_username' => $username,
                'user_password' => md5($password)
            );

            $validate = $this->User->get_users($user)->num_rows();
            $admin = $this->User->get_user_account($user);
            $idAdmin = $admin['user_id'];
            $levelAdmin = $admin['user_hak_akses'];
            $namaAdmin = $admin['user_nama'];
            $data['levelPengguna'] = $admin['level'];
            if ($validate >0) {
                $data_session = array(
                    'session_id' => $idAdmin,
                    'session_username' => $username,
                    'session_name' => $namaAdmin,
                    'session_status' => 'login',
                    'session_level' => $levelAdmin
                );
                $this->session->set_flashdata('alert', 'success_login');
                $this->session->set_userdata($data_session);
                redirect(site_url());
            }
            else{
                $this->session->set_flashdata('alert','gagalLogin');
                redirect(site_url('login'));
            }
        }else{
            $this->load->view('backend/auth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}