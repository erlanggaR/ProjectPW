<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login extends CI_Controller { 


protected $data = array();

 public function __construct(){

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');
        $this->load->library('session');
        $this->data['error'] = '';  

} 

public function index() 
  {
    if( empty( $this->session->userdata('id') ) ) {

      $this->data['error'] = '';
      $this->load->view('index', $this->data);
      return;
    }
    redirect(base_url('index.php/Control/home'));
  }
 
 public function login_user(){

  $this->load->helper('form');
  $this->load->library('form_validation');

  $this->form_validation->set_rules('email', 'Email', 'required');
  $this->form_validation->set_rules('password', 'Password', 'required');
  
  if($this->form_validation->run() === FALSE ) {
      $this->data['error'] = "";      
      $this->load->view('index', $this->data);
    } 
  else {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
    
      $response = $this->User_model->login_user($email, $password);
      if( $response == false ) {
        $this->index();
        $this->data['error'] = "*Sorry there is problem encounterd";
        $this->load->view('index', $this->data);    
        return;
      }
  
      if( $response->num_rows() != 1 ) {
        
        $this->data['error'] =  "*Username or Password not found";
        $this->load->view('index', $this->data);    
        return;
      }

      $result = $response->row();
      $sess_user = array (
        'id' => $result->id,
        'email' => $result->email,
        'looged_in' => TRUE
      );

      $this->session->set_userdata($sess_user);
      redirect(base_url('index.php/Control/home'));    
    }
}

public function user_logout(){

  $this->session->sess_destroy();
  redirect('Login/index', 'refresh');
}
}