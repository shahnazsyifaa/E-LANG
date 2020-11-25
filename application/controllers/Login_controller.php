<?php
class Login_controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');

	}

	function index(){
		$this->load->view('Home');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$_SESSION['username'] = $username;
		$cek = $this->LoginModel->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/Dashboard_controller"));

		}else{
			// redirect(base_url("index.php/Home"));
			echo $username," ";
			echo md5($password)," ";
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}
