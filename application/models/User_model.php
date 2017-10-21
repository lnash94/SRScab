<?php

class User_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function login($username,$password){
        //validate
        $this->db->where('customer_email',$username);
        $this->db->where('customer_password',$password);

        $result= $this->db->get('customer_credintial');

        if ($result->num_rows()==1){
            return $result->row(0)->customer_id;
        }
        else{
            return false;
        }


    }
//    add customer details to database

    public function sing_up($enc_password)
    {
        //user data array
        $data = array(

            'customer_email' => $this->input->post('customer_email'),
            'customer_password' => $enc_password

        );
        //insert data
        return $this->db->insert('customer_credintial', $data);
    }

    //check email exist
    public function check_email_exists($customer_email)
    {
        $query = $this->db->get_where('customer_credintial',array('customer_email'=>$customer_email));
        if (empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }
//
    public function get_customer($customer_id){
        $this->db->where('customer_id',$customer_id);
        $result = $this->db->get('customer1');
        return $result->row_array();
    }
//    insert customer details to database
    public function register($user_id){

    }


}

