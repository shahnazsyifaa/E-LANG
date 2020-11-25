<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

	 function __construct(){
	 		parent::__construct();

	 		if($this->session->userdata('status') != "login"){
	 			redirect(base_url("Login_controller"));
	 		}
	 	}


	public function index()
	{
		$this->load->view('Dashboard');
	}


	public function search(){
		$this->load->model('barangModel');
		$keyword = $this->input->post('keyword');
		$data['barang'] = $this->barangModel->get_product_keyword($keyword);
		$this->load->view('hasilPencarian',$data);
	}


}
