<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formDitemukan_controller extends CI_Controller {

	function __construct(){
        parent::__construct();
	}
	
	public function index()
	{
		// $user =  $_SESSION['nama'];
		// echo $user;
		$this->load->view('formDitemukan');
	}

	public function insertBarang()
	{
		$ciri = $_POST['ciri'];
		$user =  $_SESSION['nama'];
		$data = array();
		
		$count = count($_FILES['files']['name']);

		for($i=0; $i< $count; $i++){
			if (!empty($_FILES['files']['name'][$i])){
				$_FILES['file']['name'] = $_FILES['files']['name'][$i];
				$_FILES['file']['type'] = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['files']['error'][$i];
				$_FILES['file']['size'] = $_FILES['files']['size'][$i];

				$config['upload_path']          =  './img';
				$config['allowed_types']        =  'gif|jpeg|jpg|png';
				$config['max_size']             =  5000000;
				$config['max_width']            =  5000;
				$config['max_height']           =  5000;
				$config['file_name'] = $_FILES['files']['name'][$i];

				// Load and initialize upload library
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				// Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $foto = $this->upload->data();
					$namafile = $foto['file_name'];
					$data[$i] = array(
								'username' => $user, //harusnya diisi session user login
								'nama_barang' => $this->input->post('namaBarang', 'required'),
								'lokasi' => $this->input->post('lokasi', 'required'),
								'tanggal' => $this->input->post('tanggal','required'),
								'deskripsi' => $this->input->post('desc','required'),
								'kategori' => $this->input->post('kategori'),
								'ciri-ciri' => $this->input->post('ciri','required'),
								'ciri_khusus' => $this->input->post('ciriKhusus','required'),
								'petunjuk' => $this->input->post('petunjuk','required'),
								'foto' => $namafile,
								'status_barang' => 0,
								'jenis' => 1
					);
                }else{
					// echo "GAGAL".$_FILES['file']['name'];
					
				}
			}else {
				// Flash message foto kosong
				// echo "GAMBAR KOSONG";
				
				// echo $error;
			}
		} 
		$this->inputModel->inputBarang('barang',$data);
		$this->load->view('formDitemukan');
		// redirect('index.php/fromDitemukan_controller', 'refresh');
	}

}
