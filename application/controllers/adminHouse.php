<?php

class adminHouse extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    if( !$this->session->userdata('isLoggedIn') ) {
        redirect('/login/show_login');
    }
  }

  /**
   * This is the controller method that drives the application.
   * After a user logs in, show_main() is called and the main
   * application screen is set up.
   */
  function show_adminHouse() {
    
    $user_id = $this->session->userdata('id');
    $is_admin = $this->session->userdata('isAdmin');
    
    $data['is_admin'] = $is_admin;
    $data['email'] = $this->session->userdata('email');
    $data['name'] = $this->session->userdata('name');
    
    $this->load->model('floor_m');
    $data['floors'] = $this->floor_m->get_floors();
    $this->load->model('room_m');
    $data['rooms'] = $this->room_m->get_rooms();
    $this->load->model('device_m');
    $data['devices'] = $this->device_m->get_devices();
    $this->load->view('adminHouse',$data);
  }

  function create_new_floor() {
    $floorInfo = $this->input->post(null,true);

    if( count($floorInfo) ) {
      $this->load->model('floor_m');
      $saved = $this->floor_m->create_new_floor($floorInfo);
    }
      
    redirect('/adminHouse/show_adminHouse');
  }

   function create_new_room() {
    $roomInfo = $this->input->post(null,true);

    if( count($roomInfo) ) {
      $this->load->model('room_m');
      $saved = $this->room_m->create_new_room($roomInfo);
    }
      
    redirect('/adminHouse/show_adminHouse');
  }
    
    function create_new_device() {
    $deviceInfo = $this->input->post(null,true);

    if( count($deviceInfo) ) {
      $this->load->model('device_m');
      $saved = $this->device_m->create_new_device($deviceInfo);
    }
      
    redirect('/adminHouse/show_adminHouse');
  }
    
   public function view($slug = NULL)
    {
            $data['floors_item'] = $this->floor_model->get_floors($slug);
            $data['rooms_item'] = $this->room_model->get_rooms($slug);
            $data['devices_item'] = $this->device_model->get_devices($slug);
    }
    
    function remove_room(){
        $roomInfo = json_decode(stripslashes($_POST['id']));
        if( count($roomInfo) ) {
          $this->load->model('room_m');
          $this->room_m->remove_room($roomInfo);
        }
    }
    
    function remove_rooms(){
        $roomInfo = json_decode(stripslashes($_POST['id']));
        if( count($roomInfo) ) {
          $this->load->model('room_m');
          $this->room_m->remove_rooms($roomInfo);
        }
    }
    
    function remove_devices(){
        $deviceInfo = json_decode(stripslashes($_POST['id']));
        if( count($deviceInfo) ) {
          $this->load->model('device_m');
          $this->device_m->remove_devices($deviceInfo);
        }
    }
    
    function remove_devices_floor(){
        $deviceInfo = json_decode(stripslashes($_POST['id']));
        if( count($deviceInfo) ) {
          $this->load->model('device_m');
          $this->device_m->remove_devices_floor($deviceInfo);
        }
    }
    
    function remove_device(){
        $deviceInfo = json_decode(stripslashes($_POST['id']));
        if( count($deviceInfo) ) {
          $this->load->model('device_m');
          $this->device_m->remove_device($deviceInfo);
        }
    }
        
    function remove_floor(){
        $floorInfo = json_decode(stripslashes($_POST['id']));
        if( count($floorInfo) ) {
          $this->load->model('floor_m');
          $this->floor_m->remove_floor($floorInfo);
        }
    }
}
