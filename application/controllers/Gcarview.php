<?php

class Gcarview extends CI_Controller{
    public function index(){
       $stone = 'Genaral ';
       $sttwo = 'Cars ';
        $this->load->model('Gcarsview');
        $hello = $this->Gcarsview->get_gcar($stone, $sttwo);
        $data = array('hello' =>$hello);
        $this->load->view('pages/Generalcars', $data);
   }
}
?>