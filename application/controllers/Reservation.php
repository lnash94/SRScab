<?php
class  Reservation extends CI_Controller{
	public function reservecar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('pickupdate','Pick up Date','required');
		$this->form_validation->set_rules('dropoffdate','Drop off Date','required');
		$this->form_validation->set_rules('passengers','No of Passengers','required');

		if ($this->form_validation->run()=== FALSE){
            echo validation_errors();
        }
        else{
			echo 'success';
//            Insert reservation First step details to database
           // $location=$this->input->post('location');
           // $pickupdate=$this->input->post('pickupdate');
           // $dropoffdate=$this->input->post('dropoffdate');
           // $passengers=$this->input->post('passengers');
            
            //$this->Reservation_model->reserve_car($location,$pickupdate,$dropoffdate,$passengers);
        }

	}


}
?>