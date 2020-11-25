<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchResult_controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('resultModel');
   }

	public function index() 
	{
		// $this->load->view('searchResult');
		$data['barang'] = $this->resultModel->tampil_data();
		$this->load->view('hasilPencarian',$data);
	}

	
	public function search(){
		$this->load->model('barangModel');
		$keyword = $this->input->post('keyword');
		$location = $this->input->post('location');
		$kategori = $this->input->post('kategori');
		$jenis = $this->input->post('jenis');

		$data['barang'] = $this->barangModel->get_product_keyword_filter($keyword, $location, $kategori, $jenis);

		$this->load->view('hasilPencarian',$data);
	}

	
	// public function search(){
	// 	$this->load->model('barangModel');
	// 	$keyword = $this->input->post('keyword');
	// 	$data['barang'] = $this->barangModel->get_product_keyword($keyword);
	// 	$this->load->view('hasilPencarian',$data);
	// }

}
