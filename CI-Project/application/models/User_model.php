<?php
	class User_model extends CI_model
		{
			
		 public function __construct(){
 
         parent::__construct();
          $this->load->database();
   			$this->load->helper('url');
   	 		$this->load->model('User_model');
			$this->load->library('session');
 
		}
			
		public function register_user()
		{

			$data = array(
				'id' => $this->input->post('id'),
		        'nama' => $this->input->post('nama'),
	    	    'email' => $this->input->post('email'),
	    	    'credit_card' => $this->input->post('credit_card'),
	        	'password' => md5( $this->input->post('password') )
    		);
	
				return $this->db->insert('customer', $data);
		}

		public function login_user($email,$password)
		{
				$query  = "SELECT * 
				FROM customer
				WHERE email = ". $this->db->escape($email) .
				" AND  password = md5(" . $this->db->escape($password) . ")" ;
				
				if( $result = $this->db->query($query) ) {
				return $result;	
				}
				else return false;
		}
	
	}
?>
