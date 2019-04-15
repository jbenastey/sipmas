<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 26-Mar-19
 * Time: 19:06
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $model = array('User');
        $helper = array('tgl_indo_helper', 'level', 'form', 'url');
        $this->load->model($model);
        $this->load->helper($helper);
        if (!$this->session->has_userdata('session_username')) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $data['level'] = level($this->session->userdata['session_level']);

        $id = $this->session->userdata['session_id'];

        $data['profil'] = $this->User->get_user_by_id($id);

        $data['error'] = '';

        $this->load->view('templates/header');
        $this->load->view('backend/profil/index', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data['level'] = level($this->session->userdata['session_level']);

        $id = $this->session->userdata['session_id'];

        $data['profil'] = $this->User->get_user_by_id($id);

        if (isset($_POST) && count($_POST) > 0) {
            $dataUser = array(
                'user_nama' => $this->input->post('userNama'),
                'user_email' => $this->input->post('userEmail'),
                'user_nomor_hp' => $this->input->post('userNomor')
            );

            $this->User->update_user($id, $dataUser);

            $this->session->set_flashdata('alert', 'updateUser');
            redirect('profil');
        } else {
            $this->load->view('templates/header');
            $this->load->view('backend/profil/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function foto()
    {
        $data['level'] = level($this->session->userdata['session_level']);

        $id = $this->session->userdata['session_id'];
        $nama = $this->session->userdata['session_name'];

        $data['profil'] = $this->User->get_user_by_id($id);

        $data['error'] = '';

        if (isset($_POST) && count($_POST) > 0) {
            $config['upload_path'] = './assets/upload/images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 0;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
            //$this->User->update_user($id,$dataFoto);
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('userFoto')) {

                $data['error'] = array('error' => $this->upload->display_errors());

//
//                $this->load->view('templates/header');
//                $this->load->view('backend/profil/index', $data);
//                $this->load->view('templates/footer');
            } else {
                $foto = $nama . '_' . $this->upload->data('file_name');

                $dataUpload = array(
                    'user_foto' => $foto
                );

                $this->User->update_user($id, $dataUpload);
                $this->session->set_flashdata('alert', 'updateFoto');
                redirect('profil');
            }

        } else {
            $this->load->view('templates/header');
            $this->load->view('backend/profil/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function password()
    {
        $id = $this->session->userdata['session_id'];

        $data['profil'] = $this->User->get_user_by_id($id);

        $dataUser = $data['profil'];

        if (isset($_POST) && count($_POST) > 0) {
            $oldPass = md5($this->input->post('oldPass'));
            if ($dataUser['user_password'] == $oldPass) {
                $newPass = array(
                    'user_password' => md5($this->input->post('newPass'))
                );
                $this->User->update_user($id, $newPass);
                $this->session->set_flashdata('alert', 'updatePassword');
                redirect('profil');
            } else {
                $this->session->set_flashdata('alert', 'updatePasswordFailed');
                redirect('profil');
            }
        } else {
            $this->load->view('templates/header');
            $this->load->view('backend/profil/index', $data);
            $this->load->view('templates/footer');
        }
    }
}