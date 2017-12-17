<?php
class  Reservation extends CI_Controller{
     public function __construct()
     {
         parent::__construct();
         $this->load->model('reservation_model');
     }

    public function reservecar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('searchbox','Search Field','required');
		$this->form_validation->set_rules('pickupdate','Pick up Date','required');
		$this->form_validation->set_rules('dropoffdate','Drop off Date','required');
		$this->form_validation->set_rules('passengers','No of Passengers');

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



//        load myprevious reservation page
        public function get_myreservation(){
            $this->load->view('template/header');
            $this->load->view('Customer/dashbord');
            $this->load->view('Customer/myreservation');
            $this->load->view('template/footer');


        }
    public function get_newreservation(){
        //$location1['location']=  $location;
        $this->load->view('template/header');
        $this->load->view('Customer/dashbord');
        $this->load->view('Customer/reservation');
        $this->load->view('template/footer');


    }
        public function get_last_reservation(){

            $customer_id=$this->input->post('customer_id');
            //echo $customer_id;
            //echo $customer_id;
            $fetch_data=$this->reservation_model->get_myreservation($customer_id);

            echo json_encode($fetch_data);

        }
//        cancel reservation
        public function cancel_reservation(){
            $customer_id=$this->input->post('customer_id');
            $fetch_data=$this->reservation_model->get_cancel_reservation($customer_id);
            echo json_encode($fetch_data);


        }
        public function delete_reservation(){
            $reservation_id=$this->input->post('reservation_id');
            $result=$this->reservation_model->delete_reservation($reservation_id);
            if ($result){
                echo "success";
                /*$response['status']='success';
                $response['message']='Reservation Deleted Successfully!';*/
            }
            else{
                $response['status']='error';
                $response['message']='Unable to delete reservation!';
            }
            //echo json_encode($response);

        }
		
		public function assigndriver(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('did','Select Driver First name','required');
			if ($this->form_validation->run()=== FALSE)
            	echo validation_errors();
        	else{
				$this->reservation_model->assigndriver();
			}
            	
			
		}
	public function changedriver(){
			
		
				$this->reservation_model->changedriver();
			
            	
			
		}
//		load reservation details
		public function get_reservation(){
            $this->load->model('Reservation_model');
            $reservation_no=$this->input->post('reservation_no');
            //get reservation details from model
            $result=$this->reservation_model->getreservationsdetails($reservation_no);
            if ($result){
                echo json_encode($result);
            }

        }
        public function load_page()
        {
            $this->load->view('choose_bestvehicle');
        }

	}
?>