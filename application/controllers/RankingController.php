<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RankingController extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ranking_M');
        if (!$this->session->userdata('logged_in')) {
            redirect('administrator/login');
        }
    }

    public function all() {
        $data['ranking'] = $this->Ranking_M->get_ranking();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/ranking/all',$data);
        $this->load->view('admin/template/footer');
    }

    public function top() {
        $data['ranking'] = $this->Ranking_M->get_ranking_desc();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/ranking/top',$data);
        $this->load->view('admin/template/footer');
    }

    public function delete_rank_all($idrank)
    {
        $this->Ranking_M->delete($idrank);
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('/administrator/ranking/all');
    }

    public function delete_rank_top($idrank)
    {
        $this->Ranking_M->delete($idrank);
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('/administrator/ranking/top');
    }

}
