<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Control extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');	
		}
		public function index(){
			$this->load->view('index.php');
		}
		
		public function logout(){
			session_start();
			session_destroy(); 
			$this->load->view('index.php');
		}

		public function home(){
			$this->load->view('home.php');
		}
		public function movDet(){
			$this->load->view('MovieDetail');
		}
		public function movList(){
			$this->load->view('MovieList');
		}
		
		public function seat(){
			$this->load->view('SeatChart');
		}
	}
?>