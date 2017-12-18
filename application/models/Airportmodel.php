<?php

class Airportmodel extends CI_Model{

	function get_airport(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE No_seats <= 15;");
        return ($query->result_array());
        
	}


}

?>