<?php

class manage_vehicle extends CI_Model{

	function get_vehicle(){
        $this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle;"); 
		return($query->result_array());
	}
	function getvehicle_by_lno($lno){
		
		$this->load->database();
        $query = $this ->db->query("SELECT * FROM vehicle WHERE L_No='$lno';");
        return ($query->result_array());
	}

}

?>