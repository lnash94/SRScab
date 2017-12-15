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
            echo "success";
            //$this->load->model('Reservation_model');
            //if($this->Reservation_model->reserve_car()){
            
      //}
    }
        //else{

			

//            Insert reservation First step details to database
           // $location=$this->input->post('location');
           // $pickupdate=$this->input->post('pickupdate');
           // $dropoffdate=$this->input->post('dropoffdate');
           // $passengers=$this->input->post('passengers');
            
            //$this->Reservation_model->reserve_car($location,$pickupdate,$dropoffdate,$passengers);
        }
        public function get_myreservation($customer_id=NULL){
            $data['reservasion']=$this->reservation_model->get_myreservation($customer_id);
	        $this->load->view('template/header');
            $this->load->view('Customer/dashbord');
            $this->load->view('Customer/myreservation',$data);
            $this->load->view('template/footer');


        }


	}
?>