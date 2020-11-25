<?php
 // write your name and student id here
class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('Mahasiswa_model');
		//load library form validation
		$this->load->library('form_validation');
		$this->load->library('session');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Mahasiswa';

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nim','NIM','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('jurusan','Jurusan','required');

		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah', $data);
			$this->load->view('templates/footer');
		}

		//else, when successed {
		//call method "tambahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "added success"
		//back to controller mahasiswa }
		else{
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('msg', ' added success');
			redirect('mahasiswa','refresh');
		}
	}

	public function hapus($id)
	{
		//call method hapusDataMahasiswa with parameter id from mahasiswa_model
		$new['mahasiswa'] = $this->Mahasiswa_model->hapusDataMahasiswa($id);

		//use flashdata to show alert "dihapus"
		//back to controller mahasiswa
		$this->session->set_flashdata ('msg', ' dihapus');
		redirect('mahasiswa','refresh');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Elektro', 'DKV', 'MBTI'];

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nim','NIM','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('jurusan','Jurusan','required');

		//conditon in form_validation, if user input form = false, then load page "ubah" again
		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
		}
		//else, when successed {
		//call method "ubahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "data changed successfully"
		//back to controller mahasiswa }
		else{
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata ('msg', 'data changed successfully');
			redirect('mahasiswa','refresh');
		}

		
	}
}
