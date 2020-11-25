<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}

	public function doLogin(){
				$email = $this->input->post('email',true);
				$password = $this->input->post('password',true);

				$res = $this->LoginModel->getUserLogin($email,$password);

				if($res != null){
						redirect('Dashboard_controller');
				}else{
						echo "Username dan password salah !";
						redirect('Home_controller');
				}
		}
}
