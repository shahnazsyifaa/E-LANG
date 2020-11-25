<?php

class notifModel extends CI_Model{
    function notifKetemu($table,$username){
		$this->db->where('username',$username);
		return $this->db->get($table)->result_array();
	}
}