<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/1/2017
 * Time: 6:44 PM
 */

class Chart_model extends  CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_linegraph(){
        $customer_id=$this->input->post('customer_id1');

        $query=$this->db->query("SELECT COUNT(start_Date) AS count_date , start_Date FROM reservation WHERE Customer_customer_Id =$customer_id GROUP BY(start_Date);");
        if ($query->num_rows()>0) {
            $response = array();
            foreach ($query->result_array() as $key => $value) {
                $response[$key]['label'] = $value['start_Date'];
                $response[$key]['value'] = $value['count_date'];
            }
            return $response;
        }
        return NULL;
        //return $query->result_array();
    }
}