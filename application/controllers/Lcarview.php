<?php

class Lcarview extends CI_Controller{
    public function index(){

        $this->load->model('Lcarsview');
        $vehicles['vehicles'] = $this->Lcarsview->get_gcar();
        
        $this->load->view('template/header');
        $this->load->view('pages/Luxury', $vehicles);
        $this->load->view('template/footer');
   }

}
?>