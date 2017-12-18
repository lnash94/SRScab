<?php

class Ccarview extends CI_Controller{
    public function index(){
    
        $this->load->model('Ccarsview');
        $vehicles['vehicles'] = $this->Ccarsview->get_Ccars();
       
        $this->load->view('template/header');
        $this->load->view('pages/Classic', $vehicles);
        $this->load->view('template/footer');
   }
}
?>
