
<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/12/2017
 * Time: 8:31 PM
 */
class  Users extends CI_Controller{

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

//customer login

    public function login()
    {
        $data['title'] = 'Log in';
        $this->form_validation->set_rules('username', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header');
            $this->load->view('customer/login', $data);
            $this->load->view('pages/home');
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

    //check if email exists
    public function check_email_exists($email)
    {
        $this->form_validation->set_message('check_email_exists', 'That email  is taken.Please choose a different one');
        if ($this->user_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }

}