<?php

class inputModel extends CI_Model{
	function inputBarang($table, $data){
		$this->db->insert_batch($table, $data);
	}

	function updateKetemu($username, $id_barang, $penemu){
		$this->db->where('username', $username);
		$this->db->where('id_barang', $id_barang);
		$data = array(
			'penemuBarang' => $penemu,
			'status_barang'  => 1
		);
		$this->db->set($data);
		$this->db->update('barang');

	}
}