<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/17/2017
 * Time: 4:28 PM
 */

class Search_vehicles extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('search_vehicle_model');
    }
    public function search_vehicle(){

    }
    public function available_vehicle(){
            $results['vehicles']=$this->search_vehicle_model->search_vehicle();
            $this->load->view('template/header');
            $this->load->view('Customer/search_vehicales',$results);
            $this->load->view('template/footer');
    }


}
