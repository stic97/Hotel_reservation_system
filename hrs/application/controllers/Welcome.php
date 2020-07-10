<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
		$this->load->database();
		$this->load->model('WelcomeModel');
		$this->load->helper('email_helper');
        }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['page'] = 'welcome.php';
		$this->load->view('container',$data);
	}
	public function aboutUs()
	{
		$data['page'] = 'about_us.php';
		$this->load->view('container',$data);
	}
	public function searchHotels()
	{
		$data["allHotels"] = $this->WelcomeModel->searchHotels($_POST['search']);
		$data['page'] = 'hotels.php';
		$this->load->view('container',$data);
	}
	public function allHotels(){
		$data["allHotels"] = $this->WelcomeModel->fetchHotels();
		$data['page'] = 'hotels.php';
		$this->load->view('container',$data);
	}
	public function getHotel(){
		$hotel_id = $this->uri->segment(2);
		$hotel = $this->WelcomeModel->getHotel($hotel_id);
		$rooms = $this->WelcomeModel->getRooms($hotel_id);
		$pictures = $this->WelcomeModel->getPictures($hotel_id);
		$owner = $this->WelcomeModel->getOwner($hotel->ownerid);

		if($owner==null){
			echo "Hotel doesnt have owner.";
		}
		else{
			$data['HotelOwner'] = $owner;
		}
		if($pictures==null){
			echo "Hotel doesnt have pictures.";
		}
		else{
			$data['pictures'] = $pictures;
		}
		if($hotel==null){
			echo "Hotel doesn't exist!";
		}
		else{
			$data['hotel'] = $hotel;
		}
		if($rooms==null){
			echo "Hotel doesnt have rooms.";
		}
		else{
			$data['rooms'] = $rooms;
		}
		$data['page'] = 'hotel.php';
		$this->load->view('container',$data);
	}
    public function getReservedDates(){
		$reservedDates = $this->WelcomeModel->getDates($_POST['roomId']);
		echo json_encode($reservedDates);
	}
	public function sendQuestion(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$question = $_POST['question'];
		sendEmail($email,"marko97mare@gmail.com","Question from $name",$question);
	}
	public function reservation()
	{
		$room = $this->WelcomeModel->getRoom($_POST['roomId']);

		$date1 = new DateTime($_POST['from_date']);
		$date2 = new DateTime($_POST['to_date']);
		$diff = $date1->diff($date2);
		$price = $diff->days * $room->price;

		$x = 0;
		$result = $this->WelcomeModel->getDates($_POST['roomId']);
		if ($_POST['from_date'] < $_POST['to_date'])
	{
		foreach($result as $row)
		{
			if ($_POST['from_date'] >= $row->from_date && $_POST['from_date'] <= $row->to_date && $_POST['to_date'] <= $row->to_date)
			{
				$x = 1;
			}
			if ($_POST['from_date'] >= $row->from_date && $_POST['from_date'] <= $row->to_date && $_POST['to_date'] >= $row->to_date)
			{
				$x = 1;
			}
			if ($row->from_date >= $_POST['from_date'] && $_POST['to_date'] >= $row->from_date)
			{
				$x = 1;
			}
		}
	}
	else
	{
		$x = 1;
	}
		if($x == 0)
		{
		$this->WelcomeModel->reservation($_POST,$price);
		$this->session->set_flashdata('reservation_success','Reservation was successful from ' . $_POST['from_date'] . ' to ' . $_POST['to_date']);
		redirect('/hotels/'.$_POST['hotelId']);
		}
		else {
			$this->session->set_flashdata('roomId',$_POST['roomId']);
			$this->session->set_flashdata('reservation_error','This room is reserved in that time!');
			redirect('/hotels/'.$_POST['hotelId']);
		}
	}
}
