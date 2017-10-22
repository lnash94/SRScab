<?php

class Reservation_model extends CI_Model{
	
    public function reserve_car($location,$pickupdate,$dropoffdate,$passengers){
    	$reservation_data =array(
    		'location' => $location,
    		'pickup_Date'=> $pickupdate,
    		'dropoff_Date'=> $dropoffdate,
    		'no_of_passengers'=> $passengers
    			
    		);
    	//insert reservation details into database
        $insertdata= $this->db->insert('reservation', $reservation_data);
        return $insertdata;

    }
}