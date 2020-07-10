
<?php
function sendEmail($from,$to,$subject,$message){
    $obj = & get_instance();

    $obj->load->library('email');

    $obj->email->from($from);
    $obj->email->to($to);

    $obj->email->subject($subject);
    $obj->email->message($message);

    $obj->email->send();
    return true;
}
?>