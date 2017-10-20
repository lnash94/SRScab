 <?php
class  Users extends CI_Controller{
//    create basic sing up
    public function sing_up(){
        $data['title']='Sign Up';
        $this->form_validation->set_rules('customer_email','Email','required|callback_check_email_exists');
        if ($this->form_validation->run()=== FALSE){
            $this->load->view('template/header');
            $this->load->view('customer/sign_up', $data);
            $this->load->view('template/footer');
        }
        else{
//            insert basic data to database
            $username=$this->input->post('customer_email');
            //Encrypte password
            $enc_password = md5($this->input->post('customer_password'));
            $this->user_model->sing_up($enc_password);

            //set message
            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

//            $this->user_model->login($username,$enc_password);
            redirect('users/sing_up');

        }
    }


    public function login()
    {
        $data['title'] = 'Log in';
        $this->form_validation->set_rules('username', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('customer/login', $data);
            $this->load->view('template/footer');
        }
        else {
            //get username
            $username = $this->input->post('username');
            //get password
            $password = md5($this->input->post('password'));
            //loggin user

            $user_id = $this->user_model->login($username, $password);
            if ($user_id) {
                //create the session
                //die('SUCCESS');
                $user_data = array(
                    'user_id'=>$user_id,
                    'user_username'=>$username,
                    'logged_in'=>true
                );

                $this->session->set_userdata($user_data);


                //set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');



                redirect('pages/view');
            } else {
                //set message
                $this->session->set_flashdata('login_failed', 'You are logged into fail');

                redirect('users/login');
            }
        }
    }
	public function adminlogin(){
		 	$this->load->view('template/header');
            $this->load->view('Admin/addvehicle',array('path'=>'empty.png'));
            $this->load->view('template/footer');
	}
     public function logout(){
         //unset user data
         $this->session->unset_userdata('logged_in');
         $this->session->unset_userdata('user_id');
         $this->session->unset_userdata('user_username');

         //set message
         $this->session->set_flashdata('user_loggedout','You are now logged out');
         redirect('pages/view');
     }



     /*public function customerbooking(){
             $this->load->view('template/header');
             $this->load->view('Customer/reservation',array('path'=>'empty.png'));
             $this->load->view('template/footer');
     }*/
    public function customerpayment(){
            $this->load->view('template/header');
            $this->load->view('Customer/paymentdetails',array('path'=>'empty.png'));
            $this->load->view('template/footer');
    }


    //check if email exists
    public function check_email_exists($customer_email)
    {
        $this->form_validation->set_message('check_email_exists', 'That email  is taken.Please choose a different one');
        if ($this->user_model->check_email_exists($customer_email)) {
            return true;
        } else {
            return false;
        }
    }
//customer registration
     public function register(){
         $data['title']='registration';
         $this->form_validation->set_rules('fname','First name','required');
         $this->form_validation->set_rules('lname','Last name','required');
         $this->form_validation->set_rules('email','Email','required|valid_email|callback_check_email_exists');
         $this->form_validation->set_rules('password','Password','required|min_length[06]');
         $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

         if ($this->form_validation->run() === FALSE){
             $this->load->view('template/header');
             $this->load->view('pages/home');
             $this->load->view('customer/customer_registration');
             $this->load->view('template/footer');
         }
         else {

             //Encrypte password
             $enc_password = md5($this->input->post('password'));
             $this->user_model->register($enc_password);

             //set message
             $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

             redirect('users/register');
         }

     }
	//controler to test user logedin header
	public function logedin(){
		 $this->load->view('template/logedinheader');
         $this->load->view('pages/home');
             
         $this->load->view('template/footer');
	}
	public function dashbord($page='myreservation'){
		 $this->load->view('template/logedinheader');
		$this->load->view('Customer/dashbord');
		$this->load->view('Customer/'.$page);
		$this->load->view('template/footer');
	}

}