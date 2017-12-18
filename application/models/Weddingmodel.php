<?php

class Weddingmodel extends CI_Model{

	function get_weddingcar(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE type='Luxury' or  type ='Genaral' or type='Classic';");
        return ($query->result_array());
        
	}


}

?>