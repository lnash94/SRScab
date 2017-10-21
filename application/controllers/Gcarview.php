<?php

class Gcarview extends CI_Controller{
    public function index(){
    
       	$this->load->model('Gcarsview');
        //$hello = $this->Gcarsview->get_gcar();
       // $data = array('hello' =>$hello);
        $this->load->view('template/header');
        $this->load->view('pages/Generalcars');
        $this->load->view('template/footer');
   }
}
?>