<?php


class Profile_controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ProfileModel');
		// $this->load->model('RegisterModel');
		$this->load->helper('url');
	}

	function index()
	{
		$username = $this->session->userdata("nama");
		$data['datauser'] = $this->db->get_where('user', array('username' => $username));
		$this->load->view('Profile', $data);
	}

	function updateProfile()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'no_handphone' => $this->input->post('no_handphone'),
			'alamat' => $this->input->post('alamat'),
		];
		$username = $this->input->post('username');
		$this->db->where('username', $username);
		$this->db->update('user', $data);

		$data['datauser'] = $this->db->get_where('user', array('username' => $username));
		$this->load->view('Profile', $data);
	}

	function changePassword()
	{
		$username = $this->session->userdata("nama");
		$passwordvalidasi = md5($this->input->post('password'));
		$newpass = md5($this->input->post('newpass'));
		$userdata = $this->db->get_where('user', array('username' => $username));

		foreach ($userdata->result() as $row) {
			$password = $row->password;
		}

		if ($passwordvalidasi == $password) {
			$data = [
				'password' => $newpass
			];
			$this->db->where('username', $username);
			$this->db->update('user', $data);
			$message = "password berhasil diubah";
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect(base_url("index.php/Profile_controller"));
		} else {
			$message = "password gagal diubah";
			redirect(base_url("index.php/Profile_controller"));
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
}
