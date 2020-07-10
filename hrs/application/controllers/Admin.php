<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('AdminModel');
        $this->load->model('AuthModel');
        if($_SESSION['role']!='admin'){
          redirect('/');
        }
    }
    public function index()
	  {
        $data['page'] = 'admin_welcome.php';
		    $this->load->view('admin/admin_container.php',$data);
    }
    public function allUsers(){
        $data["allUsers"] = $this->AdminModel->fetchUsers();
        $data['page'] = 'all_users.php';
        $this->load->view('admin/admin_container.php',$data);
    }
    public function allHotels(){
      $data["allHotels"] = $this->AdminModel->fetchHotels();
      $data['page'] = 'all_hotels.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function allRooms(){
      $data["allRooms"] = $this->AdminModel->fetchRooms();
      $data['page'] = 'all_rooms.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function allPictures(){
      $data["allPictures"] = $this->AdminModel->fetchPictures();
      $data['page'] = 'all_pictures.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function editUser(){
      $user_id = $this->uri->segment(3);
      $data["user"] = $this->AdminModel->getUser($user_id);
      $data['page'] = 'edit_user.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function editHotel(){
      $hotel_id = $this->uri->segment(3);
      $data["hotel"] = $this->AdminModel->getHotel($hotel_id);
      $data['page'] = 'edit_hotel.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function editRooms(){
      $rooms_id = $this->uri->segment(3);
      $data["room"] = $this->AdminModel->getRoom($rooms_id);
      $data['page'] = 'edit_room.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function editPictures(){
      $picture_id = $this->uri->segment(3);
      $data["picture"] = $this->AdminModel->getPicture($picture_id);
      $data['page'] = 'edit_picture.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function saveUser(){
        $user_id = $this->uri->segment(3);
        $this->form_validation->set_rules('email','Email','required|valid_email|callback_verifyRegistration');

        if ($this->form_validation->run() == false)
        {
            $data['edit_errors'] = validation_errors();
            $data['page'] = 'edit_user.php';
            $user->id = $user_id;
            $user->first_name = set_value('first_name');
            $user->last_name = set_value('last_name');
            $user->email = set_value('email');
            $user->phone = set_value('phone');
            $user->jmbg = set_value('jmbg');
            $user->card_number = set_value('card_number');
            $user->role = set_value('role');
            $data['user'] = $user;
            $this->load->view('admin/admin_container.php',$data);
        }
        else
        {
          $this->AdminModel->saveUser($user_id,$_POST);
          redirect('admin/users');
        }
    }
    public function saveHotel()
    {
      $hotel_id = $this->uri->segment(3);
        $this->AdminModel->saveHotel($hotel_id,$_POST);
        redirect('admin/hotels');
    }
    public function saveRoom()
    {
        $room_id = $this->uri->segment(3);
        $this->AdminModel->saveRoom($room_id,$_POST);
        redirect('admin/rooms');
    }
    public function savePicture()
    {
        $picture_id = $this->uri->segment(3);
        $this->AdminModel->savePicture($picture_id,$_POST);
        redirect('admin/pictures');
    }
    public function verifyRegistration()
    {
            $email = $this->input->post('email');
            $user = $this->AdminModel->getUser($this->uri->segment(3));
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
    public function deleteUser(){
      $user_id = $this->uri->segment(3);
      $this->AdminModel->deleteUser($user_id);
      redirect('admin/users');
    }
    public function deleteHotel(){
      $hotel_id = $this->uri->segment(3);
      $this->AdminModel->deleteHotel($hotel_id);
      redirect('admin/hotels');
    }
    public function deleteRoom(){
      $room_id = $this->uri->segment(3);
      $this->AdminModel->deleteRoom($room_id);
      redirect('admin/rooms');
    }
    public function deletePicture(){
      $picture_id = $this->uri->segment(3);
      $this->AdminModel->deletePicture($picture_id);
      redirect('admin/pictures');
    }
    public function addHotel()
    {
      $data['page'] = 'add_hotel.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function addRoom()
    {
      $data['page'] = 'add_room.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function addPicture()
    {
      $data['page'] = 'add_picture.php';
      $this->load->view('admin/admin_container.php',$data);
    }
    public function submitHotel()
    {
      $this->AdminModel->submitHotel($_POST);
      redirect('admin/hotels');
    }
    
    public function submitRoom()
    {
      $this->AdminModel->submitRoom($_POST);
      redirect('admin/rooms');
    }
    public function submitPicture()
    {
      $this->AdminModel->submitPicture($_POST);
      redirect('admin/pictures');
    }
}

?>
