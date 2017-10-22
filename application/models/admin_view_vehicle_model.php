<?php

class admin_view_vehicle_model extends CI_Model{

	function index(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle;");
        return $query->result_array();
        
	}


}

?>