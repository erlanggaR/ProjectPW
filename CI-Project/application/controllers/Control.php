<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Control extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');	
		}
		
		public function home(){
			$this->load->view('home');
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
			$data['data_book'] = $this->Film_model->pilih_booking($id_film);
			$this->load->view('SeatChart',$data);
		}

		public function book(){
			$this->load->model('Film_model');
			$response = false;
			
			$id_booking=$this->input->post('id_booking');
			$id=$this->input->post('id');
			$baris=$this->input->post('baris');
			$kolom=$this->input->post('kolom');
			$id_film=$this->input->post('id_film');
			
			$data["booking"] = $this->Film_model->input($id_booking, $id, $id_film, $baris, $kolom);

			echo "You Have Been Purchased a Ticket! for row ".$baris." seat ".$kolom;
			//var_dump($data['booking']); die();
			
		}


	}
?>