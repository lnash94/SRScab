<?php
class  editvehicles extends CI_Controller{
public function loadedit($lno){//this will load the vehicle editing page

			$this->load->model('manage_vehicle');
			if($editingvehicle=$this->manage_vehicle->getvehicle_by_lno($lno)){
				foreach($editingvehicle as  $vehicle1){
				$data['path']=$vehicle1['imageLink'];
				
				$data['vehicle']=$vehicle1;
				$this->load->view('Admin/dashbord');
				$this->load->view('Admin/editvehicle',$data);
				$this->load->view('template/header');
				$this->load->view('template/footer');
				//echo("finish");
				}
			}
		
	}

public function edit(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('licenno','Licence number','required|min_length[7]|max_length[8]|callback_check_if_new_lno_exsists');
		$this->form_validation->set_rules('model','vehicle model','required');
		$this->form_validation->set_rules('seats','Number of seats','required|max_length[2]|numeric');
		$this->form_validation->set_rules('rpd','Rates per day','required|numeric');
		$this->form_validation->set_rules('emc','excess mileage charge','required|numeric');
		$this->form_validation->set_rules('details','vehicle details','required');
		
		if($this->form_validation->run()==FALSE){
			echo validation_errors();
			
		}
		else{
			$this->load->model('manage_vehicle');
			if($this->manage_vehicle->update()){
			echo "success";
			}
			
		}
	}
	
	
public function check_if_new_lno_exsists($requested_licenno){
	$this->load->model('manage_vehicle');
	return $this->manage_vehicle->check_if_new_lno_exsists($requested_licenno);
		
	}
	
public function delete(){
	$this->load->model('manage_vehicle');
	if($this->manage_vehicle->delete()){
			echo "success";
		}
	
}

}
?>