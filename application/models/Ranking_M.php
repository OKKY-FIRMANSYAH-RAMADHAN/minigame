<?php

class Ranking_M extends CI_Model
{
    function get_ranking()
    {
        return $this->db->get('tblranking')->result();
    }

    function insert_ranking($username, $score)
    {
        $data = array('username' => $username,'score' => $score);
        $this->db->insert('tblranking', $data);
    }

    function get_ranking_desc()
    {
        return $results = $this->db->order_by('score', 'DESC')->get('tblranking')->result();
    }

    function get_ranking_desc_limit()
    {
        return $results = $this->db->order_by('score', 'DESC')->limit(10)->get('tblranking')->result();
    }

    function delete($idrank)
    {
        $this->db->where('idrank', $idrank);
        $this->db->delete('tblranking');
    }
}