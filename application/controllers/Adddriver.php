<?php

class  Adddriver extends CI_Controller{
	public function add(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('driverid','Driver ID','required|numeric|callback_check_if_driverid_exsists');
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('nic','NIC','required|callback_check_nic_validation');
		$this->form_validation->set_rules('contactno','Contact Number Field','required|max_length[10]|numeric');
		$this->form_validation->set_rules('address','Address','required');
		
		if($this->form_validation->run()==FALSE){
			echo validation_errors();
		}
		else{
			$this->load->model('new_driver_model');
			if($this->new_driver_model->add()){
			echo "success";
			}
		}
	}
	
	public function check_if_driverid_exsists($requested_driverid){
		$this->load->model('new_driver_model');
		
		return $this->new_driver_model->check_if_driverid_exsists($requested_driverid);
		
	}
    public function check_nic_validation($nic){
        $this->form_validation->set_message('check_nic_validation', 'NIC length should be 10 or 12.Please recheck your NIC ');
        $len=strlen($nic);
        $new=substr($nic, 0, -1);
        if (($len==10)&&(is_numeric($new))){
            if(($nic[9]=="v")||($nic[9]=="V")) {
                return true;
            }
            else{
                return false;
            }
        }
        elseif(($len==12)&&(is_numeric($nic))){
            return true;
        }
        else{
            return false;
        }

    }
}

?>