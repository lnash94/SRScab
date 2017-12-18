<?php

class Gcarview extends CI_Controller{
    public function index(){
    
       	$this->load->model('Gcarsview');
       	$vehicles['vehicles'] = $this->Gcarsview->get_gcar();

        $this->load->view('template/header');
        $this->load->view('pages/Generalcars', $vehicles);
        $this->load->view('template/footer');
   }
}
?>