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
    public function get_myreservation($customer_id){
        $this->db->select('*');
        $this->db->where('Customer_customer_Id',$customer_id);
        $query=$this->db->get('reservation');
        $result=$query->result();
        return $result;
    }
    public function get_cancel_reservation($customer_id){
        //        get current date to compare reservation end date days
        $now = date('Y-m-d');
        $this->db->select('*');
        $this->db->where('start_Date >=',$now);
        $this->db->where('Customer_customer_Id',$customer_id);
        $query=$this->db->get('reservation');
        $result=$query->result();
        return $result;
    }
    public function delete_reservation($reservation_id){
        $this->db->where('reservation_No',$reservation_id);
        $query=$this->db->delete('reservation');
        return $query;
    }
}