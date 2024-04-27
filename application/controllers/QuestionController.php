<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionController extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Question_M');
        if (!$this->session->userdata('logged_in')) {
            redirect('administrator/login');
        }
    }

    public function index() {
        $data['question'] = $this->Question_M->get_question();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/question/select',$data);
        $this->load->view('admin/template/footer');
    }

    public function add() {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            $config['upload_path'] = FCPATH.'/assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000;
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data(); 
                $file_name = uniqid() . '.' . pathinfo($upload_data['file_name'], PATHINFO_EXTENSION);
                rename($upload_data['full_path'], $upload_data['file_path'] . $file_name);
                $data_input_user['images'] = $file_name;
            }
            
            $this->Question_M->insert_question($data_input_user);
            $this->session->set_flashdata('message', 'Data berhasil disimpan!');
            redirect('/administrator/question');
        } else {
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/question/add');
            $this->load->view('admin/template/footer');
        }
    }

    public function update($idquestion)
    {
        if ($this->input->post()) {
            $update_data = $this->input->post();
            $config['upload_path'] = FCPATH.'/assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data(); 
                $file_name = uniqid() . '.' . pathinfo($upload_data['file_name'], PATHINFO_EXTENSION);
                rename($upload_data['full_path'], $upload_data['file_path'] . $file_name);
                $update_data['images'] = $file_name;
            }

            $this->Question_M->update($idquestion, $update_data);
            $this->session->set_flashdata('message', 'Data berhasil diubah!');
            redirect('/administrator/question');
        } else {
            $data['question'] = $this->Question_M->get_one($idquestion);
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/navbar');
            $this->load->view('admin/question/update', $data);
            $this->load->view('admin/template/footer');
        }
    }

    public function delete($idquestion)
    {
        $this->Question_M->delete($idquestion);
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('/administrator/question');
    }

}
