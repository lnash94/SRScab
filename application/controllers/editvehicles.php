<?php
class  editvehicles extends CI_Controller{
public function loadedit($lno){

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

}
?>