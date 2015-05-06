<?php
class Floors_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_floors($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('floor');
            return $query->result_array();
        }

        $query = $this->db->get_where('room', array('idFloor' => $id));
        return $query->row_array();
    }
}