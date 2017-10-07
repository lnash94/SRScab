<?php

class  Addvehicle extends CI_Controller{
	public function add(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('licenno','Licence number','callback_check_if_lno_exsists');
		
		
		if($this->form_validation->run()==FALSE){
			
		}
		else{
			$this->load->model('New_vehicle_model');
			if($this->New_vehicle_model->add()){
				
			}
		}
	}
	
	public function check_if_lno_exsists($requested_licenno){
		$this->load->model('New_vehicle_model');
		
		return $this->New_vehicle_model->check_if_lno_exsists($requested_licenno);
		
	}
}

?>