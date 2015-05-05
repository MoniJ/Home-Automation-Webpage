<?php


class room_m extends CI_Model {

    function  create_new_room($roomData) {
      $data['name'] = $roomData['name'];
      $data['idFloor'] = $roomData['idFloor'];
      return $this->db->insert('room',$data);
    }
    
    function remove_room($roomData) {
      $this->db->where('id', $roomData);
      $this->db->delete('room'); 
    }
    
    function remove_rooms($roomData) {
      $this->db->where('idFloor', $roomData);
      $this->db->delete('room'); 
    }
    
    public function get_rooms($slug = FALSE)
    {
        if ($slug === FALSE)
        {
                $query = $this->db->get('room');
                return $query->result_array();
        }

        $query = $this->db->get_where('room', array('slug' => $slug));
        return $query->row_array();
    }

}