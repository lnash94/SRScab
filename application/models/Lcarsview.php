<?php

class Lcarsview extends CI_Model{

	function get_gcar(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE type='Luxury';");
        $query->result_array();
        echo "<pre>";
		print_r($query->result_array());
		echo "</pre>";
	}


}

?>