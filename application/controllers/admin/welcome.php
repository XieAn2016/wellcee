<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
        parent::__construct();
//        $this->load->model('user_model');
//        $this -> load -> model('appeal_model');
//        $this -> load -> model('appeal_content_model');
//        $this -> load -> model('revert_model');
//        $this->load->model('comment_model');
    }
    public function login(){
        $this->load->view('admin/login');
    }
    public function index(){
        $this->load->view('admin/index');
    }
    public function house(){
        $this->load->view('admin/house');
    }
    public function get_comments(){
        $hcomments = $this->comment_model->get_houseComments();
        $ocomments = $this->comment_model->get_ownerComments();
        $ucomments = $this->comment_model->get_userComments();
        //thj--跳转到评论管理页
        $this->load->view('admin/comment',array(
            'hcomments'=>$hcomments,
            'ocomments'=>$ocomments,
            'ucomments'=>$ucomments
        ));
    }
    public function notice(){
        $this->load->view('admin/notice');
    }
    public function appeal()
    {
        $appeals = $this->appeal_model->get_all();
        $this->load->view('admin/appeal', array(
            'appeals' => $appeals
        ));
    }
    public function appeal_content()
    {
        $order_id = $this->input->get('orderId');
        $order = $this->appeal_content_model->get_by_id($order_id);
        if ($order) {
            $this->load->view('admin/appeal_content', array(
                'order' => $order
            ));
        } else {
            echo '没有差到指定值';
        }
    }

    public function revert(){
        $appealId = $this -> input -> post('appealId');
        $content = $this -> input -> post('content');
        $reply = $this -> input -> post('reply');
        $orderId = $this -> input -> post('orderId');
        $rows = $this -> revert_model -> save($appealId,$content,$reply,$orderId);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
        public function delete_piece(){
            $order_id = $this -> input -> get('orderId');
            $rows = $this -> appeal_model -> delete($order_id);
            if($rows > 0){
                echo 'success';
            }else{
                echo 'fail';
            }
        }

        public function delete_selected_piece(){
            $order_ids_str = $this -> input -> get('orderIdStr');
            $rows = $this -> appeal_model -> delete_selected($order_ids_str);
            if($rows > 0){
                echo 'success';
            }else{
                echo 'fail';
            }
        }
    public function feedback(){
        $this-> load -> model('feedback_model');
        $feedbacks = $this -> feedback_model -> get_all();
        $this->load->view('admin/feedback',array(
            'feedbacks' => $feedbacks
        ));
    }
    public function delete_feedback(){
        $feedback_id = $this -> input -> get('feedbackId');
        $this -> load -> model('feedback_model');
        $rows = $this -> feedback_model -> delete($feedback_id);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }

    public function delete_selected_feedback(){
        $feedback_ids = $this -> input -> get('feedbackIdStr');
        $this -> load -> model('feedback_model');
        $rows = $this -> feedback_model -> delete_selected($feedback_ids);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
}
