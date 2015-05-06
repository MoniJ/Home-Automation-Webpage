<?php

class profile extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
	  $this->load->helper('form');
    if( !$this->session->userdata('isLoggedIn') ) {
		
        redirect('/login/show_login');
    }
  }

  function show_profile() {
    
    $user_id = $this->session->userdata('id');
    $is_admin = $this->session->userdata('isAdmin');
    
    $data['is_admin'] = $is_admin;
    $data['email'] = $this->session->userdata('email');
    $data['name'] = $this->session->userdata('name');
	$data['firstName'] = $this->session->userdata('firstName');
	$data['lastName'] = $this->session->userdata('lastName');

    $this->load->view('profile',$data);
	
  }
	
  function edit_profile() {
      
    $user_id = $this->session->userdata('id');
    $data = $_POST['value'];
    $field = $_POST['field'];
    //$userInfo = $this->input->post(null,true);
 	$this->load->model('user_m');
    $this->user_m->update_user($user_id, $data, $field);
    //$saved = $this->user_m->update_user($data, $field);
    //echo $saved;

    //$this->load->view('profile',$data);
      
	echo $data;
  }

}
