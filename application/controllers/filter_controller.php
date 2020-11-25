<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class filter_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('hasilPencarian');
	}

	public function search(){
		$this->load->model('barangModel');
		$keyword = $this->input->post('keyword');
		$data['barang']=$this->barangModel->get_product_keyword($keyword);
		// $this->load->view('searchResult1',$data);
		$this->load->view('hasilPencarian',$data);
	}
    
    public function loadBarang(){
        $lokasi = $_GET['lokasi'];
        $data = $this->db->get_where('barang',['kategori'->lokasi])->result()
    }


}
