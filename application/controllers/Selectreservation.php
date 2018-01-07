<?php
class  Selectreservation extends CI_Controller
{
    public function get_selectedreservation(){
        //$location1['location']=  $location;
		
        $this->load->model('manage_vehicle');
        $vehicles['vehicles']=$this->manage_vehicle->get_vehicle();

        $this->load->view('Customer/selectreservation',$vehicles);


    }

}
?>