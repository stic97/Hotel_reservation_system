<?php 
class AuthModel extends CI_Model
{
    public function registerUser($data){
        $data = array(
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => md5($data['password']),
            'phone' => $data['phone'],
            'card_number' => $data['card_number'],
            'jmbg' => $data['jmbg'],
            'role' => "user",
        );
        $this->db->insert('users', $data);
        return true;
    }
    public function ifExist($email)
    {
        $this->db->select('email');
        $this->db->where('email',$email);
        $query = $this->db->get('users');

        if($query->num_rows() > 0)
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function loginUser($email,$pass)
    {
        $this->db->where('email',$email);
        $this->db->where('password',md5($pass));
        $data = $this->db->get('users')->first_row();
        if(isset($data))
        {
            $session_data = array(
                'user_id'=>$data->id,
                'email' =>$data->email,
                'first_name'=>$data->first_name,
                'last_name'=>$data->last_name,
                'role'=>$data->role
            );

            $this->session->set_userdata($session_data);
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>