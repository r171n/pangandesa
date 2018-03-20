<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		if ($this->session->userdata('login')=="admin") {
			redirect('admin/admin');
		}
		if (!$this->session->userdata('login')=="") {
			redirect('admin/admin');
		}
		$this->template->render('login');
	}

	public function proses()
	{
		!$this->session->userdata('login') || redirect('login');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			if ($this->input->post('username') == "admin"){
				$table_name = "master_admin";
				$id = "ID_ADMIN";
				$redirect = "admin/admin";
			} else {
				$table_name = "master_petani";
				$id = "$user->ID_PETANI";
				$redirect = "petani/petani";
			}
			$this->load->model('user_model');
			if ($user = $this->user_model->login(
					$this->input->post('username'),
					$this->input->post('password'),
					$table_name
				)) {
						$this->session->set_userdata('login', $user->USERNAME);
						$this->session->set_userdata('id', $user->ID_ADMIN);
						redirect($redirect);
					} else
				$this->template->render('login', array('error2'=>'<p>Login gagal</p>'));
		} else
			$this->template->render('login', array('error2'=>validation_errors()));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
