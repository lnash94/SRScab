 <?php
class  Users extends CI_Controller{
    public function login()
    {
        $data['title'] = 'Log in';
        $this->form_validation->set_rules('username', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('customer/login', $data);
            $this->load->view('pages/home',$data);
            $this->load->view('template/footer');
        }
        else {
            //get username
            $username = $this->input->post('username');
            //get password
            $password = $this->input->post('password');
            //loggin user

            $user_id = $this->user_model->login($username, $password);
            //$this->user_model->update_lastlogin($employee_id);


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
    public function customerbooking(){
            $this->load->view('template/header');
            $this->load->view('Customer/reservation',array('path'=>'empty.png'));
            $this->load->view('template/footer');
    }

    //check if email exists
    public function check_email_exists($username)
    {
        $this->form_validation->set_message('check_email_exists', 'That email  is taken.Please choose a different one');
        if ($this->user_model->check_email_exists($username)) {
            return true;
        } else {
            return false;
        }
    }
//customer registration
    public function register(){

    }
}