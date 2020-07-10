<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('OwnerModel');
        if($_SESSION['role']!='owner'){
          redirect('/');
        }
    }
    public function index()
	  {
        $data['page'] = 'owner_welcome.php';
		$this->load->view('owner/owner_container.php',$data);
    }
    public function allReservations(){
        $owner_id = $this->uri->segment(2);
        $data["allReservations"] = $this->OwnerModel->fetchReservations($owner_id);
        $data['page'] = 'all_reservations.php';
        $this->load->view('owner/owner_container.php',$data);
    }
}