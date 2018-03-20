<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login')=="") {
			redirect('login');
		}
		if ($this->session->userdata('login')!="admin") {
			redirect('petani/petani');
		}
	}
	public function index()
	{
		$this->templateback->render('back/welcome_message');
	}
}
