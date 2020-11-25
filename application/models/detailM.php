<?php

class detailM extends CI_Model{
	function getBarangbyId($table, $id_barang){
        $this->db->where('id_barang', $id_barang);
        return $this->db->get($table)->result_array();
	}

	function notifKetemu($table, $username, $penemu){
		$this->db->where('username',$username);
		return $this->db->get($table)->result_array();
	}
}