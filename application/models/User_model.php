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
    {  $email=$this->input->post('customer_email');
        //user data array
        $data = array(

            'customer_email' => $email,
            'customer_password' => $enc_password

        );
        //insert data
        $this->db->insert('customer_credintial', $data);
        $null = '';
        $data2= array(
            'customer_id'=> $this->db->insert_id(),
            'customer_fname'=>$null,
            'customer_lname'=>$null,
            'customer_email'=>$email,
            'customer_nic'=>$null,
            'customer_gender'=>$null,
            'customer_contacte_number'=>$null
        );
        return $this->db->insert('customer1',$data2);
    }
//update username password
    public function sing_up_update($customer_id,$enc_password){
        $this->db->where('customer_id',$customer_id);

        $email=$this->input->post('customer_email');
        //user data array
        $data = array(

            'customer_email' => $email,
            'customer_password' => $enc_password

        );
        $this->db->update('customer_credintial', $data);


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
        $result = $this->db->get_where('customer1',array('customer_id'=>$customer_id));
        return $result->row_array();
    }
//    insert customer details to database
    public function register($user_id){
        $this->db->where('customer_id',$user_id);
        $data =array(
            'customer_id'=> $user_id,
            'customer_fname'=>$this->input->post('customer_fname'),
            'customer_lname'=>$this->input->post('customer_lname'),
            'customer_email'=>$this->input->post('customer_email'),
            'customer_nic'=>$this->input->post('customer_nic'),
            'customer_gender'=>$this->input->post('customer_gender'),
            'customer_contacte_number'=>$this->input->post('customer_contact_no')
        );
        $query=$this->db->update('customer1',$data);
        return $query;
    }


}

