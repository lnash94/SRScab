<?php

class Ccarsview extends CI_Model{

	function get_Ccars(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE type='Classic';");
        $query->result_array();
        echo "<pre>";
		print_r($query->result_array());
		echo "</pre>";
	}


}

?>