<?php 
	defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Daftar_User extends CI_Controller
		{
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
					$user=array(
						'id'=>$this->input->post('id'),
						'password'=>$this->input->post('password'),
						'nama'=>$this->input->post('nama'),
						'email'=>$this->input->post('email'),
						'credit_card'=>$this->input->post('credit_card')
					);
					
					$this->user_model->register_user($user);
					$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
					redirect('Login');
				}
		}
?>