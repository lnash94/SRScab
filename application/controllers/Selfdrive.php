<?php

class Selfdrive extends CI_Controller{
    public function index(){
    
       	$this->load->model('selfmodel');
       	$vehicles['vehicles'] = $this->selfmodel->get_selfcar();

        $this->load->view('template/header');
        $this->load->view('pages/Selfdriveview', $vehicles);
        $this->load->view('template/footer');
   }
}
?>