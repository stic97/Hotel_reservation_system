<?php
class Auth extends CI_Controller{

    public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('AuthModel');            
        }

    public function login()
    {
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|callback_verifyUser');

        if ($this->form_validation->run() == false)
        {
            $data['login_errors'] = validation_errors();
            $this->load->view('container',$data);
        }
        else
        {
            redirect('/');
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }

    public function register()
    {
        $this->form_validation->set_rules('email','Email','required|valid_email|callback_verifyRegistration');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','Password2','required|matches[password]');

        if ($this->form_validation->run() == false)
        {
            $data['registration_errors'] = validation_errors();
            $data['page'] = 'welcome';
            $this->load->view('container',$data);
        }
        else
        {
            if($this->AuthModel->registerUser($_POST)){
                $this->AuthModel->loginUser($_POST['email'],$_POST['password']);
            }
            redirect('/');
        }
    }

    public function verifyRegistration()
    {
            $email = $this->input->post('email');

            if($this->AuthModel->ifExist($email))
            {
                $this->form_validation->set_message('verifyRegistration','Email alredy exist');
                return false;
            }
            else
            {
                return true;
            }
    }

    public function verifyUser()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        if($this->AuthModel->loginUser($email,$pass))
        {
           // echo "<pre>"; print_r($_SESSION); echo "</pre>"; exit;
            return true;
        }
        else{
            $this->form_validation->set_message('verifyUser','Incorect Email or Password');
            return false;
        }
    }

}
?>