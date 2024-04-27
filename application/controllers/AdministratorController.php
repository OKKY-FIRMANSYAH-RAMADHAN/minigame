<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministratorController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Question_M');
        $this->load->model('Ranking_M');
        $this->load->model('User_M');
    }

    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('administrator/login');
        }else{
            $data = [
                'question' => $this->Question_M->get_question(),
                'user' => $this->Ranking_M->get_ranking(),
            ];
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/dashboard',$data);
            $this->load->view('admin/template/footer');
        }
        
    }

    function login() {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->User_M->get_one_by_username($username);

            if ($user && password_verify($password, $user[0]->password)) {
                $this->session->set_userdata('logged_in', TRUE);
                redirect('administrator');
            } else {
                $this->session->set_flashdata('message', 'User/Password Salah');
                $this->load->view('admin/login');
            }
        }else{
            $this->load->view('admin/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect('administrator/login');
    }

}
