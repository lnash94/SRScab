<?php

class  Addvehicle extends CI_Controller{
	public function add(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('licenno','Licence number','required|min_length[7]|max_length[8]|callback_check_if_lno_exsists');
		$this->form_validation->set_rules('model','vehicle model','required');
		$this->form_validation->set_rules('details','vehicle details','required');
		
		if($this->form_validation->run()==FALSE){
			echo validation_errors();
		}
		else{
			$this->load->model('New_vehicle_model');
			if($this->New_vehicle_model->add()){
			echo "success";
			}
		}
	}
	
	public function check_if_lno_exsists($requested_licenno){
		$this->load->model('New_vehicle_model');
		
		return $this->New_vehicle_model->check_if_lno_exsists($requested_licenno);
		
	}
}

?>