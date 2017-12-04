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
			public function register_user($customer)
				{
					$this->db->insert('customer', $customer);
				}

			public function login_user($email,$password)
				{
					$password_query = $password;
            		$result = $this->db->get_where('customer',['email' =>$email, 'password'=>$password_query]);
            		return $result->result_array();
				}
		
		}
?>
