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
	public function getnewreservations(){//get new reservetions(reservations that not assigned a driver)
		$this->db->select('*');
		$this->db->from('reservation r');
		$this->db->join('customer1 c', 'r.Customer_customer_Id = c.customer_id'); // this joins the customer
		$this->db->join('vehicle v', 'v.L_No = r.Vehicle_L_No'); // this joins the vehicle table
        $this->db->where('r.driver_id',null);
        $query=$this->db->get('reservation');
        $result=$query->result_array();
        return $result;
		
	}
	public function getreservationsdetails($rno){//get new reservetion details
		$this->db->select('*');
		$this->db->from('reservation r');
		$this->db->join('customer1 c', 'r.Customer_customer_Id = c.customer_id'); // this joins the customer
		$this->db->join('vehicle v', 'v.L_No = r.Vehicle_L_No'); // this joins the vehicle table
        $this->db->where('r.reservation_No',$rno);
        $query=$this->db->get('reservation');
        $result=$query->row_array();
        return $result;
		
	}
}