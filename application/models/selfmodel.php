<?php

class selfmodel extends CI_Model{

	function get_selfcar(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE with_driver='Without driver';");
        return ($query->result_array());
        
	}


}

?>