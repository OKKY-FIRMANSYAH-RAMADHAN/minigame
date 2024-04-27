<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_M');
        if (!$this->session->userdata('logged_in')) {
            redirect('administrator/login');
        }
    }

    public function index() {
        $data['user'] = $this->User_M->get_user();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/user/select',$data);
        $this->load->view('admin/template/footer');
    }

    public function add() {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $password2 = $this->input->post('konfirm_password');

            if ($password != $password2) {
                $this->session->set_flashdata('message', 'Konfirmasi Password Tidak Sama');
                redirect('/administrator/user/add');
            }else{
                $user = $this->User_M->get_one_by_username($username);
                if (!empty($user)) {
                    $this->session->set_flashdata('message', 'Username Sudah Dipakai');
                    redirect('/administrator/user/add');
                }else{
                    $this->User_M->insert_user($username, password_hash($password, PASSWORD_DEFAULT));
                    $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                    redirect('/administrator/user');
                }
            }
        } else {
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/user/add');
            $this->load->view('admin/template/footer');
        }
    }

    public function update($iduser)
    {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $password2 = $this->input->post('konfirm_password');

            if ($password) {
                if ($password != $password2) {
                    $this->session->set_flashdata('message', 'Konfirmasi Password Tidak Sama');
                    redirect('/administrator/user/update/'.$iduser);
                }else{
                    $data = array('username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT));
                    $this->User_M->update($iduser, $data);
                    $this->session->set_flashdata('message', 'Data berhasil diubah!');
                    redirect('/administrator/user');
                }
            }else{
                $data = array('username' => $username);
                $this->User_M->update($iduser, $data);
                $this->session->set_flashdata('message', 'Data berhasil diubah!');
                redirect('/administrator/user');
            }
        }else{
            $data['user'] = $this->User_M->get_one($iduser);
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/user/update', $data);
            $this->load->view('admin/template/footer');
        }
    }

    public function delete($idquestion)
    {
        $this->User_M->delete($idquestion);
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('/administrator/user');
    }

}
