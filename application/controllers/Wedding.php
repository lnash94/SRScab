<?php

class Wedding extends CI_Controller{
    public function index(){
    
       	$this->load->model('Weddingmodel');
       	$vehicles['vehicles'] = $this->Weddingmodel->get_Weddingcar();

        $this->load->view('template/header');
        $this->load->view('pages/weddingview', $vehicles);
        $this->load->view('template/footer');
   }
}
?>