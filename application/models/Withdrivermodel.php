<?php

class Withdrivermodel extends CI_Model{

	function get_drivercar(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE with_driver='With driver';");
        return ($query->result_array());
        
	}


}

?>