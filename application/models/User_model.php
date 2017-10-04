<?php
class User_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function login($username,$password){
        //validate
        $this->db->where('email',$username);
        $this->db->where('password',$password);

        $result= $this->db->get('users');

        if ($result->num_rows()==1){
            return $result->row(0)->id;
        }
        else{
            return false;
        }


    }
    //check email exist
    public function check_email_exists($username)
    {
        $query = $this->db->get_where('user',array('employee_email'=>$username));
        if (empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }


}