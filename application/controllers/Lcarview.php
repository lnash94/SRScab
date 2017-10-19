<?php

class Lcarview extends CI_Controller{
    public function index(){

        $this->load->model('Lcarsview');
        $hello = $this->Lcarsview->get_gcar();
        $data = array('hello' =>$hello);
        $this->load->view('pages/Luxury', $data);
   }
}
?>