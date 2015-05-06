<?php


class floor_m extends CI_Model {

    function  create_new_floor($floorData) {
      $data['name'] = $floorData['name'];
	  $data['level'] = (int) $floorData['level'];
      return $this->db->insert('floor',$data);
    }
    
    function  remove_floor($floorData) {
      $this->db->where('id', $floorData);
      $this->db->delete('floor'); 
    }
    
    public function get_floors($slug = FALSE)
    {
        if ($slug === FALSE)
        {
                $query = $this->db->get('floor');
                return $query->result_array();
        }

        $query = $this->db->get_where('floor', array('slug' => $slug));
        return $query->row_array();
    }

}