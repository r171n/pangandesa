<?php

class templateback
{
	private $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
	}

	public function render($view, $data = array(), $return = false)
	{
		$data['__content'] = $this->ci->load->view($view, $data, true);
		$data['__header']  = $this->ci->load->view('back/header', $data, true);
		$data['__footer']  = $this->ci->load->view('back/footer', $data, true);
		$data['__menu']    = //!$this->ci->session->userdata('login')?null :
			$this->ci->load->view('back/menu', $data, true);
		$data['__menuadmin']    = !$this->ci->session->userdata('login')?null :
			$this->ci->load->view('back/menuadmin', $data, true);
		$data['__menuuser']    = !$this->ci->session->userdata('login')?null :
			$this->ci->load->view('back/menuuser', $data, true);
		if ($return)
			return $this->ci->load->view('templateback', $data, true);
		$this->ci->load->view('templateback', $data);
	}
}
