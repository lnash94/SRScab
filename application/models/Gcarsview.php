<?php

class Gcarsview extends CI_Model{

	function get_gcar($one, $two){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE type='Genaral';");
        $query->result_array();
        echo "<pre>";
		print_r($query->result_array());
		echo "</pre>";
	}


}

?>