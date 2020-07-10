<?php
class WelcomeModel extends CI_Model
{
    public function fetchHotels()
    {
        $query = $this->db->get('hotels');
        return $query->result();
    }
    public function getHotel($hotel_id){
        $this->db->where('id',$hotel_id);
        return $this->db->get('hotels')->first_row();
    
    }
    public function getRooms($hotel_id){
        $this->db->where('hotelid',$hotel_id);
        $query = $this->db->get('rooms')->result();
        return $query;
    }
    public function getPictures($hotel_id){
        $this->db->where('hotelid',$hotel_id);
        $query = $this->db->get('pictures')->result();
        return $query;
    }
    public function getOwner($owner_id){
        $this->db->where('id',$owner_id);
        return $this->db->get('users')->first_row();
    
    }
    public function reservation($data,$price){
        $data = array(
            'from_date' => $data['from_date'],
            'to_date' => $data['to_date'],
            'userid' => $data['userid'],
            'roomid' => $data['roomId'],
            'hotelid' => $data['hotelId'],
            'price' => $price
        );
        $this->db->insert('reservations', $data);
        return true;
    }
    public function getDates($room_id)
    {
        $this->db->where('roomid',$room_id);
        $query = $this->db->get('reservations')->result();
        return $query;
    }
    public function getRoom($room_id)
    {
        $this->db->where('id',$room_id);
        return $this->db->get('rooms')->first_row();
    }
    public function searchHotels($search)
    {
        $this->db->like('name',$search);
        $this->db->or_like('location',$search);
        $query = $this->db->get('hotels');
        return $query->result();
    }
}
?>