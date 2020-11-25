<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_controller extends CI_Controller {


	public function index()
	{
		$data['barang']=  $this->db->get('barang')->result_array();
		$this->load->view('Notifikasi',$data);
	}

	public function getNotif()
	{
		$this->load->view('Notifikasi');
	}
}

?>
