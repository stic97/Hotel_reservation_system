<?php
class OwnerModel extends CI_Model
{
    public function fetchReservations($owner_id)
    {   
        $this->db->where('ownerid',$owner_id);
        $query = $this->db->get('hotels')->first_row();
        $this->db->where('hotelid',$query->id);
        $reservations = $this->db->get('reservations')->result();
        return $reservations;

    }
}