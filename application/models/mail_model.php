<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail_model extends CI_Model {
    public function get_sendMail_by_userId($user_id){
            $this->db->order_by('mail_date','desc');
            $this -> db -> select("mail.*, user.last_name, user.first_name");
            $this -> db -> from("t_mail mail");
            $this -> db -> where("mail.sender_id",$user_id);
            $this -> db -> where("mail.is_delete",0);
            $this -> db -> join("t_user user","user.user_id = mail.receiver_id");
            return  $this -> db -> get() -> result();
    }
    public function get_recMail_by_userId($user_id){
        $this->db->order_by('mail_date','desc');
        $this -> db -> select("mail.*, user.last_name, user.first_name");
        $this -> db -> from("t_mail mail");
        $this -> db -> where("mail.receiver_id",$user_id);
        $this -> db -> where("mail.is_delete",0);
        $this -> db -> join("t_user user","user.user_id = mail.sender_id");
       return  $this -> db -> get() -> result();
    }
    public function delete_by_id($mail_id){
        $this -> db -> where('mail_id', $mail_id);
        $this -> db -> update('t_mail', array(
            'is_delete' => '1'
        ));
        return $this -> db -> affected_rows();
    }
    public function get_recMail_by_mailId($mail_id){
        $query = $this->db->get_where('t_mail',array('mail_id'=>$mail_id));
        return $query->row();

    }
    public function save_mail_by_reply($mail_data){
        $this->db->insert('t_mail',$mail_data);
        return $this->db->affected_rows();
    }
}
