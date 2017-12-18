<?php

class Airport extends CI_Controller{
    public function index(){
    
       	$this->load->model('Airportmodel');
       	$vehicles['vehicles'] = $this->Airportmodel->get_airport();

        $this->load->view('template/header');
        $this->load->view('pages/airportview', $vehicles);
        $this->load->view('template/footer');
   }
}
?>