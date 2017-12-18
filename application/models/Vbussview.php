<?php

class Vbussview extends CI_Model{

	function get_Vbus(){
       // $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE type='4wd';");
        return($query->result_array());
        
	}


}

?>