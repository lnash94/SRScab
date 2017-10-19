<?php

class Vbusview extends CI_Controller{
    public function index(){
    
        $this->load->model('Vbussview');
        $hello = $this->Vbussview->get_Vbus();
        $data = array('hello' =>$hello);
        $this->load->view('template/header');
        $this->load->view('pages/Vanbus', $data);
        $this->load->view('template/footer');
   }
}
?>