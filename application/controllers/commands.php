<?php
class Commands extends CI_Controller {
/*
	public function dimDevice(){
		$level = $this->input->post('level');
		$device = $this->input->post('device');
		$this->load->model('device_model');
		$this->device_model->updateStatus($device,$level);
		exec('echo "*1*'.$level.'*'.$device.'#9##" > /dev/ttyUSB0');
	}
*/  
    public function all_on(){
		exec('echo "*1*1*0#00#9##" > /dev/ttyUSB0');
	}
	public function all_off(){
		exec('echo "*1*0*0#00#9##" > /dev/ttyUSB0');
	}
    
    public function turnOn(){
        $device = json_decode(stripslashes($_POST['id']));
		exec('echo "*1*1*'.$device.'#9##" > /dev/ttyUSB0');
	}
    
    public function turnOff(){
		 $device = json_decode(stripslashes($_POST['id']));
		exec('echo "*1*0*'.$device.'#9##" > /dev/ttyUSB0');
	}
    
    public function dimmer(){
        $device = json_decode(stripslashes($_POST['id']));
        $level = json_decode(stripslashes($_POST['level']));
		exec('echo "*1*'.$level.'*'.$device.'#9##" > /dev/ttyUSB0');
	}


}