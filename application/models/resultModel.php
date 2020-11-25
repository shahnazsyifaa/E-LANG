<?php 

class resultModel extends CI_Model{
	function tampil_data(){
       $query =  $this->db->get('barang');
        if($query->num_rows() != 0){
            return $query->result();
        }else{
            return false;
        }
    }
}