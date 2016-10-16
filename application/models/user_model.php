<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    public function save($user_data){
        

        $this->db->insert('t_user',array(
                'first_name'=> $user_data['first_name'],
                'last_name'=> $user_data['last_name'],
                'sex'=> $user_data['sex'],
                'birth_year'=> $user_data['birth_year'],
                'birth_month'=> $user_data['birth_month'],
                'birth_day'=> $user_data['birth_day'],
                'email'=> $user_data['email'],
                'tel'=> $user_data['tel'],
                'country'=> $user_data['country'],
                'address'=> $user_data['address'],
                'currency'=> $user_data['currency'],
                'intro'=> $user_data['intro'],
                'img'=> $user_data['img'],
                'thumb_img'=> $user_data['thumb_img'],
            ));
        $user_id =  $this->db->insert_id();
        $hobby = $user_data['hobby'];


       

            $one_info = array();
            $insert_data = array();
            $one_info['user_id'] = $user_id;

            for($i = 0; $i < count($hobby); $i++) {
                $one_info['hobby_id'] = $hobby[$i];
                $insert_data[] = $one_info;
            }

            $this -> db -> insert_batch("t_user_hobby",$insert_data); 
            return $this -> db -> affected_rows();












       
        die();
        return $this->db->affected_rows();
    }
    public function get_all(){
        $this->db->order_by('date','desc');
        $this->db->select('user.*');
        $this->db->from('t_user user');
        $this->db->where('user.status',0);
        return $this->db->get()->result();
    }
    public function get_by_id($user_id){
        $this->db->select('user.*');
        $this->db->from('t_user user');
        $this->db->where('user.user_id',$user_id);
        return $this->db->get()->row();
    }
    public function get_all_count($title){
        $this->db->order_by('date','desc');
        $this -> db -> select('user.*');
        $this -> db -> from('t_user user');
        $this -> db -> where('user.status', 0);
        if($title) {
            $this->db->like('user.first_name', $title);
            $this->db->like('user.last_name', $title);
        }
        return $this->db->count_all_results();
    }
    public function get_by_page($title,$limit,$offset){
        $this->db->order_by('date','desc');
        $this -> db -> select('user.*');
        $this -> db -> from('t_user user');
        $this -> db -> where('user.status', 0);

        $this -> db -> order_by('user.user_id', 'desc');
        $this -> db -> limit($limit, $offset);
        return $this -> db -> get() -> result();
    }
    public function delete($user_id){
        $this -> db -> where('user_id', $user_id);
        $this -> db -> update('t_user', array(
            'status' => '1'
        ));
        return $this -> db -> affected_rows();
    }
    public function disable($user_id){
        $this -> db -> where('user_id', $user_id);
        $this -> db -> update('t_user', array(
            'status' => '2'
        ));
        return $this -> db -> affected_rows();
    }
    public function delete_selected($user_ids_str){
        $user_ids = explode(',', $user_ids_str);
        $this -> db -> where_in('user_id', $user_ids);
        $this -> db -> update('t_user', array(
            'status' => '1'
        ));
        return $this -> db -> affected_rows();
    }
    public  function update_by_id($user_id,$user_data){
        $this->db->where('t_user.user_id', $user_id);
        $this->db->update('t_user', $user_data);
        return $this -> db -> affected_rows();
    }

    public function get_user_by_keyword($keyword){
        // $this->db->select('user.*');
        // $this->db->from('t_user user');
        // $this->db->where('user.user_id',$user_id);
        // return $this->db->get()->row();

        $sql = "select * from t_user where t_user.first_name like '%$keyword%' or t_user.last_name like '%$keyword%'";

        $results = $this -> db -> query($sql) -> result();

        return $results;

    } 
}
?>