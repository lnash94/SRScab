<?php

class Lcarsview extends CI_Model{

	function get_gcar(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE type='Luxury';");
        return($query->result_array());
	}


}

?>