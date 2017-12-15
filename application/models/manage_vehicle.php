<?php

class manage_vehicle extends CI_Model{

	function get_vehicle(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle;"); 
		return($query->result_array());
	}

}

?>