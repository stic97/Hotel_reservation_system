<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('UserModel');
        $this->load->model('AuthModel');
        if($_SESSION['role']!='user'){
          redirect('/');
        }
    }
    public function index()
	{
        $data['page'] = 'user_welcome.php';
		$this->load->view('user/user_container.php',$data);
    }
    public function myReservations(){
        $user_id = $this->uri->segment(2);
        $data["myReservations"] = $this->UserModel->myReservations($user_id);
        $data['page'] = 'my_reservations.php';
        $this->load->view('user/user_container.php',$data);
    }
    public function deleteReservation(){
        $reservation_id = $this->uri->segment(3);
        $this->UserModel->deleteReservation($reservation_id);
        redirect('user');
    }
    public function editUser(){
        $user_id = $this->uri->segment(3);
        $data["user"] = $this->UserModel->getUser($user_id);
        $data['page'] = 'edit_personal.php';
        $this->load->view('user/user_container.php',$data);
      }
    public function saveUser(){
        $user_id = $this->uri->segment(3);
        $this->form_validation->set_rules('email','Email','required|valid_email|callback_verifyRegistration');

        if ($this->form_validation->run() == false)
        {
            $data['new_errors'] = validation_errors();
            $data['page'] = 'edit_personal.php';
            $user->id = $user_id;
            $user->first_name = set_value('first_name');
            $user->last_name = set_value('last_name');
            $user->email = set_value('email');
            $user->phone = set_value('phone');
            $user->jmbg = set_value('jmbg');
            $user->card_number = set_value('card_number');
            $data['user'] = $user;
            $this->load->view('user/user_container.php',$data);
        }
        else
        {
          $this->UserModel->saveUser($user_id,$_POST);
          redirect('user/data/'.$user_id.'/edit');
        }
    }
    public function verifyRegistration()
    {
            $email = $this->input->post('email');
            $user = $this->UserModel->getUser($this->uri->segment(3));
            if($email!=$user->email && $this->AuthModel->ifExist($email))
            {
                $this->form_validation->set_message('verifyRegistration','Email alredy exist');
                return false;
            }
            else
            {
                return true;
            }
    }
    public function changePassword()
    {
        $user_id = $this->uri->segment(3);
        $oldPassword = $_POST['password'];
        $user = $this->UserModel->getUser($user_id);
        $oldPassword2 = $user->password;
        if (md5($oldPassword) == $oldPassword2 )
        {
            $this->UserModel->updatePassword($user_id,$_POST['password2']);
            redirect('user/');
        }
        else
        {
            $this->session->set_flashdata('password_error','You entered wrong old password!');
            redirect('user/password');
            
        }
    }
    public function password(){
        $user_id = $this->uri->segment(3);
        $data["user"] = $this->UserModel->getUser($user_id);
        $data['page'] = 'change_password.php';
        $this->load->view('user/user_container.php',$data);
      }
}