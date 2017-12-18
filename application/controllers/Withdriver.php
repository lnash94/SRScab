<?php

class Withdriver extends CI_Controller{
    public function index(){
    
       	$this->load->model('Withdrivermodel');
       	$vehicles['vehicles'] = $this->Withdrivermodel->get_drivercar();

        $this->load->view('template/header');
        $this->load->view('pages/withdriverview', $vehicles);
        $this->load->view('template/footer');
   }
}
?>