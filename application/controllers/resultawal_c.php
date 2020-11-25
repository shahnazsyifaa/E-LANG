<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resultawal_c extends CI_Controller {

    function __construct(){
        parent::__construct();
    }
    
	public function index()
	{
		$this->load->view('searchResult');
	}

	public function search(){
		$this->load->model('barangModel');
		$keyword = $this->input->post('keyword');
		$data['barang']=$this->barangModel->get_product_keyword($keyword);
		$this->load->view('searchResult',$data);
	}
}
