<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Control extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');	
		}
		public function index(){
			$this->load->view('index');
		}
		
		public function home(){
			$this->load->view('home');
		}
	}
?>