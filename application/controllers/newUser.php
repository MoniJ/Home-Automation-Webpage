<?php

class newUser extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
	  $this->load->helper('form');
    if( !$this->session->userdata('isLoggedIn') ) {
		
        redirect('/login/show_login');
    }
  }

  function show_newUser() {
    
    $user_id = $this->session->userdata('id');
    $is_admin = $this->session->userdata('isAdmin');
    
    $data['isAdmin'] = $is_admin;
    $data['email'] = $this->session->userdata('email');
    $data['name'] = $this->session->userdata('name');

    $this->load->view('newUser',$data);
  }

  function create_new_user() {
    $userInfo = $this->input->post(null,true);

    if( count($userInfo) ) {
      $this->load->model('user_m');
      $saved = $this->user_m->create_new_user($userInfo);
    }

    /*if ( isset($saved) && $saved ) {
       echo "success";
    }*/
  }


}
