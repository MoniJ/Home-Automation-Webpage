<?php
class Control extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('floors_model');
            if( !$this->session->userdata('isLoggedIn') ) {
                redirect('/login/show_login');
            }
        }

        public function allFloors()
        {
            $data['floors'] = $this->floors_model->get_floors();
            $data['title'] = 'Pisos';

            
            $user_id = $this->session->userdata('id');
            $is_admin = $this->session->userdata('isAdmin');
    
            $data['is_admin'] = $is_admin;
            $data['email'] = $this->session->userdata('email');
            $data['name'] = $this->session->userdata('name');
            $this->load->view('allFloors', $data);
    
        }

        public function viewRooms($id = NULL)
        {
            $data['rooms'] = $this->floors_model->get_floors($id);
            $data['title'] = 'Rooms';
            
            if (empty($data['rooms']))
            {
                $user_id = $this->session->userdata('id');
                $is_admin = $this->session->userdata('isAdmin');

                $data['is_admin'] = $is_admin;
                $data['email'] = $this->session->userdata('email');
                $data['name'] = $this->session->userdata('name');
                $this->load->view('emptyRoom', $data);
            }else{
                $user_id = $this->session->userdata('id');
                $is_admin = $this->session->userdata('isAdmin');

                $data['is_admin'] = $is_admin;
                $data['email'] = $this->session->userdata('email');
                $data['name'] = $this->session->userdata('name');
                $this->load->view('viewRooms', $data);
            }
            
        }
        
        public function viewDevices($id = NULL)
        {
            $data['devices'] = $this->floors_model->get_devices($id);
            $data['title'] = 'Devices';
            
            if (empty($data['devices']))
            {
                $user_id = $this->session->userdata('id');
                $is_admin = $this->session->userdata('isAdmin');

                $data['is_admin'] = $is_admin;
                $data['email'] = $this->session->userdata('email');
                $data['name'] = $this->session->userdata('name');
                $this->load->view('emptyDevices', $data);
            }else{
                $user_id = $this->session->userdata('id');
                $is_admin = $this->session->userdata('isAdmin');

                $data['is_admin'] = $is_admin;
                $data['email'] = $this->session->userdata('email');
                $data['name'] = $this->session->userdata('name');
                $this->load->view('viewDevices', $data);
            }
            
        }
}