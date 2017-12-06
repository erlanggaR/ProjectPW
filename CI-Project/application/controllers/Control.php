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
		
		public function home(){
			$this->load->view('home.php');
		}
		public function movDet(){
			$id_film = $this->uri->segment(3);
			$this->load->model('Film_model');
			$data["list_film"] = $this->Film_model->pilih($id_film);
			$this->load->view('MovieDetail',$data);
		}
		public function movList(){
			$this->load->model('Film_model');
			$data["list_film"] = $this->Film_model->tampil();
			$this->load->view('MovieList', $data);
		}
		
		public function seat(){
			$id_film = $this->uri->segment(3);
			$this->load->model('Film_model');
			$data["list_film"] = $this->Film_model->pilih($id_film);
			$this->load->view('SeatChart',$data);
		}

		public function book(){
			$this->load->model('Film_model');

			$baris=$this->input->post('baris');
			$kolom=$this->input->post('kolom');
			$id_film=$this->input->post('id_film');
			$data["booking"] = $this->Film_model->input($id_film,$baris,$kolom);
			var_dump($data['booking']); die();
			
		}


	}
?>