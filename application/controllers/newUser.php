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
    
    $data['is_admin'] = $is_admin;
    $data['email'] = $this->session->userdata('email');
    $data['name'] = $this->session->userdata('name');

    $this->load->view('newUser',$data);
	
  }
	
  function create_new_user() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

            $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

        if ($this->form_validation->run() == FALSE)
        {
            $user_id = $this->session->userdata('id');
            $is_admin = $this->session->userdata('isAdmin');

            $data['is_admin'] = $is_admin;
            $data['email'] = $this->session->userdata('email');
            $data['name'] = $this->session->userdata('name');

            $this->load->view('newUser',$data);
        }
        else
        {
            //$this->show_newUser();

            $userInfo = $this->input->post(null,true);
            if(isset($_POST['isAdmin'])) {
                $userInfo['isAdmin'] = true;
            }
            else {
                $userInfo['isAdmin'] = false;
            }

            if( count($userInfo) ) {
              $this->load->model('user_m');
              $saved = $this->user_m->create_new_user($userInfo);
            }

            if ( isset($saved) && $saved ) {
                $user_id = $this->session->userdata('id');
                $is_admin = $this->session->userdata('isAdmin');

                $data['is_admin'] = $is_admin;
                $data['email'] = $this->session->userdata('email');
                $data['name'] = $this->session->userdata('name');
                $data['saved'] = true;
                $this->load->view('newUser',$data);
            }
        }

  }
}
