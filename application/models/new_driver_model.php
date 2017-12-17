<?php
class new_driver_model extends CI_Model{
	public function check_if_driverid_exsists($driverid){
		$this->db->where('driver_Id',$driverid);
		$result=$this->db->get('driver');
		
		if($result->num_rows()>0){
			return FALSE;
		}
		else
			return TRUE;
	}
	public function add(){
		$new_driver_data=array(
			'driver_Id'=>$this->input->post('driverid'),
			'first_name'=>$this->input->post('firstname'),
			'last_name'=>$this->input->post('lastname'),
			'nic'=>$this->input->post('nic'),
			'contact_No'=>$this->input->post('contactno'),
			'address'=>$this->input->post('address'),

			
		);
		$insert=$this->db->insert('driver',$new_driver_data);
		return $insert;
	}
	
	public function loaddriver($rno){
		
		
	}
}