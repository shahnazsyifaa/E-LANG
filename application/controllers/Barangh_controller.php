<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Barangh_controller extends CI_Controller {

	public function index()
	{
		$data['barang']=  $this->db->get('barang')->result_array();
		$this->load->view('BarangHilang',$data);
	}
}
