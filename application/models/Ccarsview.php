<?php

class Ccarsview extends CI_Model{

	function get_Ccars(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE type='Classic';");
        return($query->result_array());
        
	}


}

?>