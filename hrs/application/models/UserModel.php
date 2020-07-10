<?php
class UserModel extends CI_Model
{
    public function myReservations($user_id)
    {   
        $this->db->where('userid',$user_id);
        $reservations = $this->db->get('reservations')->result();
        return $reservations;
    }
    public function deleteReservation($reservation_id){
        $this->db->where('id',$reservation_id);
        $this->db->delete('reservations');
       return true;
    }
    public function getUser($user_id){
        $this->db->where('id',$user_id);
        return $this->db->get('users')->first_row();
    }
    public function saveUser($user_id,$post){
        $data = array(
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'card_number' => $post['card_number'],
            'jmbg' => $post['jmbg'],
        );
        $this->db->where('id',$user_id);
       $this->db->update('users',$data);
       return true;
    }
    public function updatePassword($user_id,$pass)
    {
        $data = array(
            'password' => md5($pass)
        );

        $this->db->where('id',$user_id);
        $this->db->update('users',$data);
    }
}