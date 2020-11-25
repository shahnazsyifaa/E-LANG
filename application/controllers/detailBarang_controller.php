<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detailBarang_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('detailM');
		$this->load->model('ProfileModel');
   }

	public function index()
	{
		$this->load->view('detailBarang');
	}

	public function verifikasiBarangD($id_barang)
	{
		$data['barang'] = $this->detailM->getBarangbyId('barang',$id_barang);
		$this->load->view('verifikasiBarangDitemukan', $data);
	}

	public function verifbarang_handle($penemu)
	{
		$id_barang = $this->input->post('id_barang');
		$user = $this->input->post('username');
		$ciri_khusus = $this->input->post('ciri_khusus');
		$data = $this->detailM->getBarangbyId('barang',$id_barang);

		if ($data[0]['ciri_khusus'] == $ciri_khusus){
			$this->inputModel->updateKetemu($user, $id_barang, $penemu);
			$data['barang'] = $this->detailM->getBarangbyId('barang',$id_barang);
			$data['user'] = $this->ProfileModel->get_data_by_username($user,'user');
			$this->load->view('verifikasiBarangDSukses', $data);
		}else{
			$data['barang'] = $this->detailM->getBarangbyId('barang',$id_barang);
			$this->load->view('verifikasiBarangDitemukan', $data);
		}
	}

	public function verifikasiBarangDS()
	{
		$this->load->view('verifikasiBarangDSukses');
	}
	
	public function detailBarang($id_barang)
	{
		$data['barang'] = $this->detailM->getBarangbyId('barang',$id_barang);
		$this->load->view('detailBarang',$data);
	}

}
