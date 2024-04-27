<?php

class Question_M extends CI_Model
{
    function get_question()
    {
        return $this->db->get('tblquestion')->result();
    }

    function get_unique_question($lastQuestionId = array()) {
        if (!empty($lastQuestionId)) {
            $this->db->where_not_in('idquestion', $lastQuestionId);
        }
        
        $this->db->order_by('RAND()');
        $this->db->limit(1);
        $query = $this->db->get('tblquestion');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    function insert_question($data)
    {
        $this->db->insert('tblquestion', $data);
    }

    function get_one($idquestion)
    {
        return $this->db->get_where('tblquestion', array('idquestion' => $idquestion))->result();
    }

    function update($idquestion, $data)
    {
        $this->db->where('idquestion', $idquestion);
        $this->db->update('tblquestion', $data);
    }

    function delete($idquestion)
    {
        $this->db->where('idquestion', $idquestion);
        $this->db->delete('tblquestion');
    }
}