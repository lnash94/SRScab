<?php

class manage_vehicle extends CI_Model{

	function get_vehicle(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle;"); 
		return($query->result_array());
	}
	function getvehicle_by_lno($lno){
		
		$this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE L_No='$lno';");
        return ($query->result_array());
	}
	function check_if_new_lno_exsists($lno){
		$this->db->where('L_no',$lno);
		$result=$this->db->get('vehicle');
		if($this->input->post('licenno')==$this->input->post('lodlicenno')){
			return TRUE;
		}
		
		else{
			if($result->num_rows()>0){
			return FALSE;
		}
		else
			return TRUE;
			}
	}
	function update(){
		$this->db->where('L_No',$this->input->post('lodlicenno'));
		$update_vehicle_data=array(
			'L_no'=>$this->input->post('licenno'),
			'model'=>$this->input->post('model'),
			'brand'=>$this->input->post('brand'),
			'type'=>$this->input->post('type'),
			'transmission_type'=>$this->input->post('ttype'),
			'rate_per_day'=>$this->input->post('rpd'),
			'excess_mileage'=>$this->input->post('emc'),
			'No_seats'=>$this->input->post('seats'),
			'details'=>$this->input->post('details'),
			'imageLink'=>$this->input->post('imageLink'),
			'with_driver'=>$this->input->post('withdriver')
			
		);
		$update=$this->db->update('vehicle',$update_vehicle_data);
		return $update;
	}
	
	function delete(){
		$this->db->where('L_No',$this->input->post('lno'));
		$delete=$this->db->delete('vehicle');
		return $delete;
	}

}

?>