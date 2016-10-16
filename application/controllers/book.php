<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('book_model');
    }


    public function get_user_hobby(){
        $user_id = $this -> input -> get("userId");
        $data = $this->book_model->get_user_hobby($user_id);
        echo json_encode($data);
    }

/**
房东: 房源预订信息开始

1	待处理	接受	1	1 -> 21房东／31房客
拒绝	1	1 -> 41房东／ 5房客
当前日期>申请日期＋1	1	1－> 42/5(房客）

2	进行中	待房客入住	21	当前日期 >＝ 结束日期＋5: 21->31房东/41房客
房客入住中	22	当前日期 >=  结束日期：  22 ->31房东/41房客
房客申诉中	23
3	成功交易	评价房客	31	31 -> 32
3	交易成功	已评价	32
4	无效预定	无效预定

0:全部／1:待处理／2:进行中 21:待房客入住 22:房客入住中／3:成功交易 31:评价房客 32:已评价／41: 无效 42:超过处理时间
 */
    public function booklist(){
        $this->load->view('booklist.php');
    }

    public function get_booklist(){
        $status = $this -> input -> get("status");
        if(!$status){
            $data = $this->book_model->get_booklist();
        }else{
            $data = $this->book_model->get_booklist($status);
        }
        echo json_encode($data);
    }



    public function owner_accept(){
        $order_id = $this -> input -> get("orderId");
        $r1 = $this -> book_model -> update_order_status_owner($order_id, 21);
        $r2 = $this -> book_model -> update_order_status_user($order_id, 31);
        if($r1 && $r2){
            echo "success";
        }else{
            echo "fail";
        }
    }
    public function owner_decline(){
        $order_id = $this -> input -> get("orderId");
        $r1 = $this -> book_model -> update_order_status_owner($order_id, 41);
        $r2 = $this -> book_model -> update_order_status_user($order_id, 5);
        if($r1 && $r2){
            echo "success";
        }else{
            echo "fail";
        }
    }
    public function owner_comment(){
        $order_id = $this -> input -> get("orderId");
        $r1 = $this -> book_model -> update_order_status_owner($order_id, 32);
        if($r1 ){
            echo "success";
        }else{
            echo "fail";
        }
    }

    public function change_status_owner(){
        $order_id = $this -> input -> get("orderId");
        $curr_status_owner = $this -> input -> get("currOStatus");
        $curr_status_user = $this -> input -> get("currUStatus");
        switch($curr_status_owner){
            case 1:
                //1待处理: 当前日期>申请日期＋1		1－> 42/5(房客）
//                var_dump(1);
                $apply_date = $this -> book_model -> get_order_by_id($order_id) -> order_timestamp;
//                var_dump(time());
//                var_dump($apply_date);
                if((time() - $apply_date) >= 86400){
                    $r1 = $this -> book_model -> update_order_status_owner($order_id, 42);
                    $r2 = $this -> book_model -> update_order_status_user($order_id, 5);
                }
                break;

            case 21:
//                var_dump(21);

                //2	进行中	待房客入住21	当前日期 >＝ 结束日期＋5: 21->31房东/41房客
                $end_date = $this -> book_model -> get_order_by_id($order_id) -> end_timestamp;
//                echo time();
//                echo $end_date;
                if((time() - $end_date) >= 86400*5){
//                    echo "yes";

                    $r1 = $this -> book_model -> update_order_status_owner($order_id, 31);
                    $r2 = $this -> book_model -> update_order_status_user($order_id, 41);
                }
                break;

            case 22:
//                var_dump(22);
                //2	进行中	房客入住中22	当前日期 > 结束日期： 22 -> 31房东/41房客
                $end_date = $this -> book_model -> get_order_by_id($order_id) -> end_timestamp;
                if((time() - $end_date) >= 0){
//                    var_dump("yes");
//                    var_dump(date ( "m.d.y" ), $end_date);
//                    var_dump(date ( "m.d.y" ), time());
                    $r1 = $this -> book_model -> update_order_status_owner($order_id, 31);
                    $r2 = $this -> book_model -> update_order_status_user($order_id, 41);
                }
                break;
        }
        $data = $this -> book_model -> get_order_by_id($order_id);
        echo json_encode($data);
    }
/**
房东: 房源预订信息结束
*/
/**
房客: 我的旅程开始
*/


    public function journey(){
        $this->load->view('journey.php');
    }
    public function get_journey(){
        $status = $this -> input -> get("status");
        if(!$status){
            $data = $this->book_model->get_journey();
        }else{
            $data = $this->book_model->get_journey($status);
        }
        echo json_encode($data);
    }

/**
房客: 我的旅程结束
 */



}























