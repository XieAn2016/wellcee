<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class House_model extends CI_Model {

    public function get_house_all(){
        $this -> db -> select("house.*, user.last_name, user.first_name");
        $this -> db -> from("t_house house");
        $this -> db -> where("house.status != 0");
        $this -> db -> join("t_user user", "user.user_id = house.user_id");
        $data = $this -> db -> get() -> result();

        return $data;
    }
    public function get_house_detail($house_id){
        return $this -> db ->get_where("t_house", array(
            "house_id" => $house_id
        )) -> row();
    }
    public function get_house_type(){
        return $this -> db -> get("t_house_type") -> result();
    }
    public function get_house_rent_type(){
        return $this -> db -> get("t_house_rent_type") -> result();
    }
    public function get_convenience(){
        return $this -> db -> get("t_convenience") -> result();
    }
    public  function get_house_by_userId(){
        $this->db->select("house.*,img.thumb_path,type.name");
        $this->db->from("t_house house");
        $this->db->where("house.user_id",1);
        $this->db->join("t_house_img img","house.house_id=img.house_id");
        $this->db->join("t_house_type type","house.type_id=type.type_id");
        return $this->db->get()->result();
    }
    public function change_house_status($house_id, $status){
        $this -> db -> update("t_house", array(
            "status" => $status
        ), "house_id = $house_id");
        return $this->db->affected_rows();
    }
    public function save_house($data){
        $this -> db -> insert("t_house", $data);
        return $this-> db -> affected_rows();
    }


}