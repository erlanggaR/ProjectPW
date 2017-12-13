<?php 
	defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Daftar_User extends CI_Controller
		{
			protected $data = array();
			public function __construct()
				{
					parent::__construct();
					$this->load->helper('url');
					$this->load->model('user_model');
					$this->load->library('session');
				}	

			public function index() 
				{ 
					$this->load->helper('url');
					$this->load->view('Daftar');
				}

		public function register_user()
		{
					
			$this->load->helper('form');
			$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama','required|min_length[3]|max_length[50]', 
			array( 
				'required' => 'Required Nama',
				'min_length' => 'Min 3 characters for your Name',
				'max_length' => 'Max 50 characters for your Name'
			)
		);
		$this->form_validation->set_rules(
			'email', 'Email', 
			'required|min_length[10]|max_length[30]',
			array(
				'required' => 'Required Email',
				'min_length' => 'Min 10 characters for email',
				'max_length' => 'Max 30 characters for email',
				'is_unique' => 'Email has been used' 
			)
		);


		$this->form_validation->set_rules('credit_card', 'credit_card', 
			'required|min_length[12]|max_length[12]', 
			array( 
				'required' => 'Required Credit Card Number',
				'min_length' => 'Must Consist 12 characters of credit card',
				'max_length' => 'Must Consist 12 characters of credit card'
			)
		);

		$this->form_validation->set_rules('password', 'Password',
			'required|min_length[8]|max_length[30]',
			array(
				'required' => 'You must provide a %s.',
				'min_length' => 'Min 8 password characters',
				'max_length' => 'Max 30 password characters'
			)
		);
		$this->form_validation->set_rules('passconf', 'Password Confirmation','required|matches[password]',
			array(
				'required' => 'Confirm your password',
				'matches' => 'Password not match'
			)
		);

		if ($this->form_validation->run() === FALSE) {
	        $this->load->view('Daftar');
	    } else {

	        $this->user_model->register_user();
   			$this->data['error'] = "Please Login";
			$this->load->view('index', $this->data);
			return;
			}
		}
	}
?>