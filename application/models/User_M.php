<?php

class User_M extends CI_Model
{
    function get_user()
    {
        return $this->db->get('tbluser')->result();
    }

    function insert_user($username, $password)
    {
        $data = array('username' => $username,'password' => $password);
        $this->db->insert('tbluser', $data);
    }

    function get_one($iduser) {
        return $this->db->get_where('tbluser', array('iduser' => $iduser))->result();
    }

    function get_one_by_username($username)
    {
        return $this->db->get_where('tbluser', array('username' => $username))->result();
    }

    function update($iduser, $data)
    {
        $this->db->where('iduser', $iduser);
        $this->db->update('tbluser', $data);
    }

    function delete($iduser)
    {
        $this->db->where('iduser', $iduser);
        $this->db->delete('tbluser');
    }
}