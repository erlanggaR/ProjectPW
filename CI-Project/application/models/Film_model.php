<?php
	class Film_model extends CI_model
		{
			
		 public function __construct(){
 
         parent::__construct();
          $this->load->database();
   			$this->load->helper('url');
   	 		$this->load->model('Film_model');
			$this->load->library('session');
 
		}
			
		public function tampil()
		{
			$query = $this->db->get('list_film');
			return $query;
		}
		
		public function pilih($id_film)
		{
			$query = $this->db->get_where('list_film', array('id_film' => $id_film))->row();
			return $query;
		}
		
		}
?>
