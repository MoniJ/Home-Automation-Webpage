<?php


class device_m extends CI_Model {

    function  create_new_device($deviceData) {
      $data['name'] = $deviceData['name'];
      $data['idNumber'] = $deviceData['idNumber'];
      $data['idRoom'] = $deviceData['idRoom'];
      $data['idFloor'] = $deviceData['idFloor'];
      return $this->db->insert('device',$data);
    }
    
    function remove_device($deviceData) {
      $this->db->where('id', $deviceData);
      $this->db->delete('device'); 
    }
    
    function remove_devices($deviceData) {
      $this->db->where('idRoom', $deviceData);
      $this->db->delete('device'); 
    }
    
     function remove_devices_floor($deviceData) {
      $this->db->where('idFloor', $deviceData);
      $this->db->delete('device'); 
    }
    
    public function get_devices($slug = FALSE)
    {
        if ($slug === FALSE)
        {
                $query = $this->db->get('device');
                return $query->result_array();
        }

        $query = $this->db->get_where('device', array('slug' => $slug));
        return $query->row_array();
    }

}