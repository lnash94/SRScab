<?php

class Gcarsview extends CI_Model{

	function get_gcar(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE type='Genaral';");
        return ($query->result_array());
        
	}


}

?>