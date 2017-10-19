<?php

class Ccarview extends CI_Controller{
    public function index(){
    
        $this->load->model('Ccarsview');
        $hello = $this->Ccarsview->get_Ccars();
        $data = array('hello' =>$hello);
        $this->load->view('template/header');
        $this->load->view('pages/Classic', $data);
        $this->load->view('template/footer');
   }
}
?>