<?php
class AdminModel extends CI_Model
{
    public function fetchUsers()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
    public function fetchHotels()
    {
        $query = $this->db->get('hotels');
        return $query->result();
    }
    public function fetchRooms()
    {
        $query = $this->db->get('rooms');
        return $query->result();
    }
    public function fetchPictures()
    {
        $query = $this->db->get('pictures');
        return $query->result();
    }

    public function getUser($user_id){
        $this->db->where('id',$user_id);
        return $this->db->get('users')->first_row();
    }
    public function getHotel($hotel_id){
        $this->db->where('id',$hotel_id);
        return $this->db->get('hotels')->first_row();
    }
    public function getRoom($room_id){
        $this->db->where('id',$room_id);
        return $this->db->get('rooms')->first_row();
    }
    public function getPicture($picture_id){
        $this->db->where('id',$picture_id);
        return $this->db->get('pictures')->first_row();
    }
    public function saveUser($user_id,$post){
        $data = array(
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'card_number' => $post['card_number'],
            'jmbg' => $post['jmbg'],
            'role' => $post['role'],
        );
        $this->db->where('id',$user_id);
       $this->db->update('users',$data);
       return true;
    }
    public function saveHotel($hotel_id,$post)
    {
        $data = array(
            'name' => $post['name'],
            'location' => $post['location'],
            'surface' => $post['surface'],
            'ownerid' => $post['ownerid'],
            'rooms_number' => $post['rooms_number'],
            'garages_number' => $post['garages_number'],
            'bathrooms_number' => $post['bathrooms_number'],
            'picture' => "public/img/feature/".''.$post['picture'],
        );
        $this->db->where('id',$hotel_id);
        $this->db->update('hotels',$data);
       return true;
    }
    public function saveRoom($room_id,$post)
    {
        $data = array(
            'price' => $post['price'],
            'terrace' => $post['terrace'],
            'kitchen' => $post['kitchen'],
            'room_type' => $post['room_type'],
            'air_conditioner' => $post['air_conditioner'],
            'hotelid' => $post['hotelid'],
        );
        $this->db->where('id',$room_id);
        $this->db->update('rooms',$data);
       return true;
    }
    public function savePicture($picture_id,$post)
    {
        $data = array(
            'picture' => "public/img/single-list-slider/".''.$post['picture'],
            'hotelid' => $post['hotelid'],
        );
        $this->db->where('id',$picture_id);
        $this->db->update('pictures',$data);
       return true;
    }
    public function submitHotel($post)
    {
        $data = array(
            'name' => $post['name'],
            'location' => $post['location'],
            'surface' => $post['surface'],
            'ownerid' => $post['ownerid'],
            'rooms_number' => $post['rooms_number'],
            'garages_number' => $post['garages_number'],
            'bathrooms_number' => $post['bathrooms_number'],
            'description' => $post['description'],
            'date_modified' => $post['date_modified'],
            'stars' => $post['stars'],
            'picture' => "public/img/feature/".''.$post['picture'],
        );
        $this->db->insert('hotels',$data);
        return true;
    }
    public function submitRoom($post)
    {
        $data = array(
            'price' => $post['price'],
            'terrace' => $post['terrace'],
            'kitchen' => $post['kitchen'],
            'room_type' => $post['room_type'],
            'air_conditioner' => $post['air_conditioner'],
            'hotelid' => $post['hotelid'],
        );
        $this->db->insert('rooms',$data);
       return true;
    }
    public function submitPicture($post)
    {
        $data = array(
            'picture' => "public/img/single-list-slider/".''.$post['picture'],
            'hotelid' => $post['hotelid'],
        );
        $this->db->insert('pictures',$data);
       return true;
    }
    public function deleteUser($user_id){
        $this->db->where('id',$user_id);
       $this->db->delete('users');
       return true;
    }
    public function deleteHotel($hotel_id){
        $this->db->where('id',$hotel_id);
        $this->db->delete('hotels');
       return true;
    }
    public function deleteRoom($room_id){
        $this->db->where('id',$room_id);
        $this->db->delete('rooms');
       return true;
    }
    public function deletePicture($picture_id){
        $this->db->where('id',$picture_id);
        $this->db->delete('pictures');
       return true;
    }
}
?>