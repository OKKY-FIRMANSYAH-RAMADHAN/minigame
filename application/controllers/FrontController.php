<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Question_M');
        $this->load->model('Ranking_M');
    }

	public function index(){
        if (!$this->session->userdata('username')) {
		    $this->load->view('home');
        }else{
            redirect('/question');
        }
	}

    function start(){
        if (!$this->session->userdata('username')) {
            if ($this->input->post()) {
                $username = $this->input->post('username');
                $this->session->set_userdata('username', $username);
                redirect('/question');
            }else{
                $this->load->view('start');
            }
        }else{
            redirect('/question');
        }
    }

    function question(){
        $json_data = file_get_contents('php://input');
        if (!$this->session->userdata('username')) {
            redirect('/');
        }elseif ($json_data) {
            $data = json_decode($json_data, true);
            $question = $this->Question_M->get_one($data['dataId']);
            $correct_answer = $question[0]->answer;

            if ($correct_answer === $data['dataOpsi']) {
                $this->session->set_userdata('number', $this->session->userdata('number') + 1);
                $this->session->set_userdata('final_score', $this->session->userdata('final_score') + 10);
                $this->session->unset_userdata('temporary_id');
                $value = [
                    'correct' => $correct_answer,
                    'wrong' => NULL
                ];
            }else{
                if (empty($this->session->userdata('final_score'))) {
                    $this->session->set_userdata('final_score', 0);
                }
                $value = [
                    'correct' => $correct_answer,
                    'wrong' => $data['dataOpsi']
                ];
            }

            echo json_encode($value);
        }else{
            if ($this->session->userdata('temporary_id') != null) {
                $question = $this->Question_M->get_one($this->session->userdata('temporary_id'));
                $data = [
                    'question' => $question[0],
                    'number' => $this->session->userdata('number') + 1
                ];
                $this->load->view('question', $data);
            }else{
                $lastQuestionId = $this->session->userdata('last_question_id');
                if (!$lastQuestionId) {
                    $lastQuestionId = array();
                }
                $question = $this->Question_M->get_unique_question($lastQuestionId);
                
                if ($question != null) {
                    $data = [
                        'question' => $question[0],
                        'last_question_id' => array_merge($lastQuestionId, array($question[0]->idquestion)),
                        'number' => $this->session->userdata('number') + 1
                    ];
                    $this->session->set_userdata('last_question_id', $data['last_question_id']);
                    $this->session->set_userdata('temporary_id', $question[0]->idquestion);
                    $this->load->view('question', $data);
                } else {
                    redirect('score');
                }
            }
        }
    }

    function score(){
        if ($this->session->userdata('final_score') != 0 || !$this->session->userdata('username')) {
            redirect('/logout');
        }else{
            $this->Ranking_M->insert_ranking($this->session->userdata('username'), $this->session->userdata('final_score'));
            $data = [
                'score' => $this->session->userdata('final_score') 
            ];
            $this->session->sess_destroy();
            $this->load->view('score', $data);
        }
    }

    function leaderboard(){
        $data = [
            'ranking' => $this->Ranking_M->get_ranking_desc_limit()
        ];
        $this->load->view('leaderboard',$data);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }
}
