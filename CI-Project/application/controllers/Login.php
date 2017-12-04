<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login extends CI_Controller { 

 public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('User_model');
        $this->load->library('session');

}	
 public function index() 
 { 
    $this->load->helper('url');
    $this->load->view('index');
 }
 
 function login_user(){
  
  $email = $this->input->post('email');
  $password = $this->input->post('password');

  $this->load->model('User_model');
    $result['data'] = $this->User_model->login_user($email, $password);
        
        if ($result['data'] == NULL){
            redirect('/Login', 'refresh');
        }

        else{
            $data = array( 
                'email'     => $email, 
                'logged_in' => TRUE
            );         
        }

        $this->session->set_userdata($data);
        $this->load->view("home.php");
    }

public function user_logout(){

  $this->session->sess_destroy();
  redirect('Login/index', 'refresh');
}
}