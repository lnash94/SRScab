<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/17/2017
 * Time: 4:22 PM
 */

class Search_vehicle_model extends CI_Model{
    public function search_vehicle(){
        $now = date('Y-m-d');
            $this->db->select('*');
            $this->db->join('vehicle','vehicle.L_No=reservation.Vehicle_L_No','left');
            $this->db->where('end_Date<=',$now);
            $query = $this->db->get('reservation');
            return $query-result_array();
    }

}
