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
			$this->load->view('SeatChart',$data);
		}

		public function book(){
			$this->load->model('Film_model');
			
			$id_booking=$this->input->post('id_booking');
			$id=$this->input->post('id');
			$baris=$this->input->post('baris');
			$kolom=$this->input->post('kolom');
			$id_film=$this->input->post('id_film');
			
			$data["booking"] = $this->Film_model->input($id_booking, $id, $id_film, $baris, $kolom);

		$dataa = array();
		
		$this->dataa['error'] =  "You Have Been Purchased a Ticket!";
        $this->load->view('home', $this->dataa);    
        return;
   
			//var_dump($data['booking']); die();
			
		}


	}
?>