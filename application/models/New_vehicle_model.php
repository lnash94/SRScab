<?php
class New_vehicle_model extends CI_Model{
	public function check_if_lno_exsists($lno){
		$this->db->where('L_no',$lno);
		$result=$this->db->get('vehicle');
		
		if($result->num_rows()>0){
			return FALSE;
		}
		else
			return TRUE;
	}
	public function add(){
		$new_vehicle_data=array(
			'L_no'=>$this->input->post('licenno'),
			'model'=>$this->input->post('model'),
			'brand'=>$this->input->post('brand'),
			'type'=>$this->input->post('type'),
			'details'=>$this->input->post('details'),
			'imageLink'=>$this->input->post('imageLink'),
			'with_driver'=>$this->input->post('withdriver')
			
		);
		$insert=$this->db->insert('vehicle',$new_vehicle_data);
		return $insert;
	}
}