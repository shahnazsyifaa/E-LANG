<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('faq_v');
    }
}
