<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property $login
 */
class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$is_login = $this->session->userdata('is_login');

		if ($is_login) {
			redirect(base_url());
			return;
		}
	}


	public function index()
	{
		if (!$_POST) {
			$input = (object)$this->login->getDefaultValues();
		} else {
			$input = (object)$this->input->post(null, true);
		}

		if (!$this->login->validate()) {
			$data['title'] = 'Login';
			$data['input'] = $input;
			$data['page']  = 'pages/auth/login';

//			$this->view($data);
			log_message('error', 'Validation failed with input: ' . print_r($input, true));
			$this->view($data);
//			return;
			return;
		}

		if ($this->login->run($input)) {
			$this->session->set_flashdata('success', 'Successfully logged in');
			redirect(base_url());
		} else {
			$this->session->set_flashdata('error', 'Email or Password is wrong or not Active');
			redirect(base_url('login'));
		}
	}

}
