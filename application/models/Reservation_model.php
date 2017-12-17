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
	public function getnotification_count(){//this returens the count of new reservations by customers
		$this->db->select('*');
		$this->db->from('reservation r');
		$this->db->join('customer1 c', 'r.Customer_customer_Id = c.customer_id'); // this joins the customer
		$this->db->join('vehicle v', 'v.L_No = r.Vehicle_L_No'); // this joins the vehicle table
        $this->db->where('r.driver_id',null);
        $query=$this->db->get('reservation');
        $result=$query->num_rows();
        return $result;
		
	}
	public function assigndriver(){
		/*$rno=$this->input->post('rno');
		$dfname=$this->input->post('dfname');
		$dlname=$this->input->post('dlname');*/
		//getting the driver id
		/*$query=$this->db->query("SELECT driver_Id FROM driver WHERE Fname='$dfname' && Lname='$dlname';");
		$driver=$query->row_array();
		$did=$driver['driver_Id'];*/
		$did=$this->input->post('did');
		$rno=$this->input->post('rno');
		$assign=$this->db->query("UPDATE reservation SET driver_id='$did' WHERE reservation_No='$rno';");

		
	}
	public function getreserved_drivers($rno){
		$query=$this->db->query("SELECT start_Date,end_Date FROM reservation WHERE reservation_No=$rno;");
		$result=$query->row_array();
		$startdate=$result['start_Date'];
		$enddate=$result['end_Date'];
		//getting 4 types of conflicting driver assignments
		$inrange=$this->db->query("SELECT driver_id FROM reservation WHERE start_Date>='$startdate' && end_Date<='$enddate' ;");
		$bellowconflict=$this->db->query("SELECT driver_id FROM reservation WHERE start_Date<='$startdate' && end_Date>='$startdate' ;");
		$aboveconflicet=$this->db->query("SELECT driver_id FROM reservation WHERE start_Date<='$enddate' && end_Date>='$enddate' ;");
		$inrangelarge=$this->db->query("SELECT driver_id FROM reservation WHERE start_Date<='$startdate' && end_Date>='$enddate' ;");
		$inrange_results=$inrange->result_array();
		$bellowconflict_results=$bellowconflict->result_array();
		$aboveconflicet_results=$aboveconflicet->result_array();
		$inrangelarge_results=$inrangelarge->result_array();
		$driverlist=[];
		foreach($inrange_results as $inrange_result ){
			array_push($driverlist,$inrange_result['driver_id']);
		}
		foreach($bellowconflict_results as $bellowconflict_result ){
			array_push($driverlist,$bellowconflict_result['driver_id']);
		}

		foreach($aboveconflicet_results as $aboveconflicet_result ){
			array_push($driverlist,$aboveconflicet_result['driver_id']);
		}

		foreach($inrangelarge_results as $inrangelarge_result ){
			array_push($driverlist,$inrangelarge_result['driver_id']);
		}

		return $driverlist;
		
	}
}