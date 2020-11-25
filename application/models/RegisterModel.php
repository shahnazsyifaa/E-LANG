<?php

class RegisterModel extends CI_Model{
	function cek_username($table,$where){
        $this->db->where('username',$where);
        return $this->db->get($table)->result_array();
    }

    function after_register($table,$where){
        $this->db->where('username',$where);
        return $this->db->get($table)->result_array();
    }

    function register_db($table,$data){
        $this->db->insert($table, $data);
    }
}
