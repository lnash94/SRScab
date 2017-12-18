<?php

class Vbusview extends CI_Controller{
    public function index(){
    
        $this->load->model('Vbussview');
        $vehicles['vehicles'] = $this->Vbussview->get_Vbus();
       
        $this->load->view('template/header');
        $this->load->view('pages/Vanbus', $vehicles);
        $this->load->view('template/footer');
   }
}
?>