<?php

class Reservation_model extends CI_Model{
	
    public function reserve_car(){
    	$reservation_data =array(
    		'location' =>$this->input->post('location'),
    		'pickup_Date'=>$this->input->post('pickupdate'),
    		'dropoff_Date'=>$this->input->post('dropoffdate'),
    		'no_of_passengers'=>$this->input->post('Nopassengers')
    			
    		);
    	//insert reservation details into database
        $insertdata= $this->db->insert('reservation', $reservation_data);
        return $insertdata;

    }
}