<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mgruser extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('user_model');

    }

    /*房源管理开始*/
    public function rooms_mgr(){
        $user_id=82;
        $this->load->model('house_model');
        $datas=$this->house_model->get_house_by_userId($user_id);

        $house_types=$this->house_model->get_house_type();

        $rent_types=$this->house_model->get_house_rent_type();

        $this->load->view('rooms_mgr',array(
            'datas'=>$datas,
            'house_types'=>$house_types,
            'rent_types'=>$rent_types
        ));
    }















    /*房源管理结束*/

    /*收发回复开始*/
    public function send_rec_message(){
        /*$this->input->get('userId');*/
        $user_id=1;
        $this->load->model('mail_model');
        $datas=$this->mail_model->get_recMail_by_userId($user_id);

        $this->load->view('send_rec_message',array(
            'datas'=>$datas
        ));
    }

    public function get_rec_message(){
        $user_id=1;
        $this->load->model('mail_model');
        $datas=$this->mail_model->get_recMail_by_userId($user_id);
        echo json_encode($datas);
    }
    public function get_send_message(){
        $user_id=1;
        $this->load->model('mail_model');
        $datas=$this->mail_model->get_sendMail_by_userId($user_id);
        echo json_encode($datas);
    }

    public function delete_message(){
        $mail_id = $this -> input -> get('mailId');
        $this -> load -> model('mail_model');
        $rows = $this ->mail_model-> delete_by_id($mail_id);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }

    public function reply_message(){
        $mail_id = $this -> input -> get('mailId');
        $content = $this -> input -> get('content');

        $this->load->model('mail_model');
        $datas=$this->mail_model->get_recMail_by_mailId($mail_id);
        $sender_id= $datas->sender_id;
        $receiver_id = $datas->receiver_id;
        $mail_data=array(
            'sender_id'=>$receiver_id,
            'receiver_id'=>$sender_id,
            'content'=>$content
        );
        $rows=$this ->mail_model->save_mail_by_reply($mail_data);
        if($rows){
            echo 'success';
        }else{
            echo 'fail';
        }
    }











    /*收发回复结束*/


    /*房客评论房东开始*/

    public function user_comment_owner(){
        $this->load->view('user_comment_owner');
    }
    /*房客评论房东结束*/

    /*房客管理开始*/
    /* public function mgr_user(){
         $this->load->model('user_model');
         $users = $this ->user_model->get_all();
         $this->load->view('admin/mgr_user',array(
             'users'=>$users
         ));
     }*/





    public function mgr_use(){

        $offset1 = $this -> uri -> segment(3);
        echo $offset1;
        die();

        $offset = $this -> input -> get('per_page') == NULL?0 : $this -> input -> get('per_page');





        $this -> load -> model('user_model');
        $total_rows = $this -> user_model -> get_all_count($title);


        /*分页配置信息开始*/
        $this->load->library('pagination');
        $config['base_url'] = 'admin/mgr_user/';
        $config['total_rows'] = $total_rows;
        $config['per_page'] =10;
        $config['uri_segment'] = 4;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        /*分页配置信息结束*/
        $users = $this -> user_model -> get_by_page($title, $config['per_page'], $offset);
        $this -> load -> view('admin/mgr_user', array(
            'users' => $users
        ));

    }

    /**
     * $aderCate_id = $this -> input -> get('aderCate_id');
    $searchNeeds_count = $this -> anchor_model -> get_searchNeed_count($aderCate_id);
    $offset = $this -> input -> get('per_page') == NULL?0 : $this -> input -> get('per_page');
    $this->load->library('pagination');
    $config['base_url'] = 'anchor/search_needs?aderCate_id='.$aderCate_id;
    $config['total_rows'] = $searchNeeds_count;
    $config['per_page'] = 3;
    $config['page_query_string'] = TRUE;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['last_link'] = FALSE;
    $config['first_link'] = FALSE;
    $config['prev_link'] = '«';//上一页
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '»';//下一页
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['num_tag_open'] = '<li>';//每个数字页
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="'.$config['base_url'].'">';//当前页
    $config['cur_tag_close'] = '</a></li>';

    $this -> pagination -> initialize($config);

    $result = $this -> anchor_model -> get_anchorNeed_by_aderCateId_and_page($aderCate_id,$config['per_page'],$offset);






    if($result){
    $data = array(
    'anchorNeeds' => $result,
    'total' => $searchNeeds_count
    );
    $this -> load -> view('anchor-need-search-list',$data);
    }else{
    $this -> load -> view('ader-search-null');
    }

     *
     *
     *
     *
     *
     *
    */














    public function mgr_user_update(){

        $user_id=$this->input->get('userId');

        $this->load->model('user_model');
        $user=$this->user_model->get_by_id($user_id);
        if($user){
            $this->load->view('admin/mgr_user_update',array(
                'user'=>$user
            ));
        }else{
            echo '没有查到指定值';
        }


    }



    public function mgr_user_edit(){
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '4096';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload("img"))
        {
            $upload_data = $this -> upload -> data();
            $this -> load -> library("image_lib");
            //压缩小图
            $config['image_library'] = 'gd2';
            $config['source_image'] = $upload_data['full_path'];
            $config['thumb_marker'] = '_thumb';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['master_dim'] = 'width';
            $config['width'] = 330;
            $config['height'] = 240;
            $config['maintain_ratio'] = FALSE;

            $this -> image_lib -> initialize($config);
            $this -> image_lib -> resize();
            $this -> image_lib -> clear();

            $thumb_img = 'upload/'.$upload_data['raw_name'] . '_thumb'  . $upload_data['file_ext'];

            //压缩大图
            $config['image_library'] = 'gd2';
            $config['source_image'] = $upload_data['full_path'];
            $config['thumb_marker'] = '';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['master_dim'] = 'width';
            $config['width'] = 1170;
            $config['height'] = 400;

            $this -> image_lib -> initialize($config);
            $this -> image_lib -> resize();
            $this -> image_lib -> clear();

            $img = 'upload/'.$upload_data['raw_name'] . $upload_data['file_ext'];

            $firstname= htmlspecialchars($this->input->post('firstname'));
            $lastname=htmlspecialchars($this->input->post('lastname'));
            $sex=$this->input->post('sex');

            $birth=$this->input->post('birth');
            $arr=explode('-', $birth);

            $birth_year=$arr[0];
            $birth_month=$arr[1];
            $birth_day=$arr[2];

            $email=htmlspecialchars($this->input->post('email'));
            $tel = htmlspecialchars($this->input->post('tel'));
            $country =$this ->input->post('country');
            $address =htmlspecialchars($this->input->post('address'));
            $currency = $this->input->post('currency');
            $hobby =$this->input->post('hobby');
            $intro = htmlspecialchars($this ->input ->post('intro'));

            $user_id=$this->input->post('userId');

            $user_data = array(
                'first_name'=>$firstname,
                'last_name'=>$lastname,
                'sex'=>$sex,
                'birth_year'=>$birth_year,
                'birth_month'=>$birth_month,
                'birth_day'=>$birth_day,
                'email'=>$email,
                'tel'=>$tel,
                'country'=>$country,
                'address'=>$address,
                'currency'=>$currency,
                'intro'=>$intro,
                'img'=>$img,
                'thumb_img'=>$thumb_img

            );
            $this->load->model('user_model');

            $rows=$this->user_model->update_by_id($user_id,$user_data);

            if($rows){
                redirect('admin/mgr_user');
            }else{
                echo 'fail';
            }
        }else{
            $firstname= htmlspecialchars($this->input->post('firstname'));
            $lastname=htmlspecialchars($this->input->post('lastname'));
            $sex=$this->input->post('sex');

            $birth=$this->input->post('birth');
            $arr=explode('-', $birth);

            $birth_year=$arr[0];
            $birth_month=$arr[1];
            $birth_day=$arr[2];

            $email=htmlspecialchars($this->input->post('email'));
            $tel = htmlspecialchars($this->input->post('tel'));
            $country =$this ->input->post('country');
            $address =htmlspecialchars($this->input->post('address'));
            $currency = $this->input->post('currency');
            $hobby =$this->input->post('hobby');
            $intro = htmlspecialchars($this ->input ->post('intro'));

            $user_id=$this->input->post('userId');


            $user_data = array(
                'first_name'=>$firstname,
                'last_name'=>$lastname,
                'sex'=>$sex,
                'birth_year'=>$birth_year,
                'birth_month'=>$birth_month,
                'birth_day'=>$birth_day,
                'email'=>$email,
                'tel'=>$tel,
                'country'=>$country,
                'address'=>$address,
                'currency'=>$currency,
                'intro'=>$intro,
            );

            $this->load->model('user_model');

            $rows=$this->user_model->update_by_id($user_id,$user_data);

            if($rows){
                redirect('admin/mgr_user');
            }else{
                echo 'fail';
            }
        }

    }
    public function mgr_user_add(){
        $this->load->model('hobby_model');
        $hobbys=$this->hobby_model->get_all();
        $this->load->view('admin/mgr_user_add',array(
            'hobbys'=>$hobbys
        ));
    }
    public function mgr_user_save(){
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '4096';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload("img"))
        {
            $upload_data = $this -> upload -> data();

            $this -> load -> library("image_lib");
            //压缩小图
            $config['image_library'] = 'gd2';
            $config['source_image'] = $upload_data['full_path'];
            $config['thumb_marker'] = '_thumb';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['master_dim'] = 'width';
            $config['width'] = 330;
            $config['height'] = 240;
            $config['maintain_ratio'] = FALSE;

            $this -> image_lib -> initialize($config);
            $this -> image_lib -> resize();
            $this -> image_lib -> clear();

            $thumb_img = 'upload/'.$upload_data['raw_name'] . '_thumb'  . $upload_data['file_ext'];

            //压缩大图
            $config['image_library'] = 'gd2';
            $config['source_image'] = $upload_data['full_path'];
            $config['thumb_marker'] = '';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['master_dim'] = 'width';
            $config['width'] = 1170;
            $config['height'] = 400;

            $this -> image_lib -> initialize($config);
            $this -> image_lib -> resize();
            $this -> image_lib -> clear();

            $img = 'upload/'.$upload_data['raw_name'] . $upload_data['file_ext'];

            $firstname= htmlspecialchars($this->input->post('firstname'));
            $lastname=htmlspecialchars($this->input->post('lastname'));
            $sex=$this->input->post('sex');

            $birth=$this->input->post('birth');


            $arr=explode('-', $birth);
           
           
            $birth_year=$arr[0];
            $birth_month=$arr[1];
            $birth_day=$arr[2];

           


            

            $email=htmlspecialchars($this->input->post('email'));
            $tel = htmlspecialchars($this->input->post('tel'));
            $country =$this ->input->post('country');
            $address =htmlspecialchars($this->input->post('address'));
            $currency = $this->input->post('currency');
            $hobby =$this->input->post('hobby');
























            $intro = htmlspecialchars($this ->input ->post('intro'));
            $user_data = array(
                'first_name'=>$firstname,
                'last_name'=>$lastname,
                'sex'=>$sex,
                'birth_year'=>$birth_year,
                'birth_month'=>$birth_month,
                'birth_day'=>$birth_day,
                'email'=>$email,
                'tel'=>$tel,
                'country'=>$country,
                'address'=>$address,
                'currency'=>$currency,
                'intro'=>$intro,
                'img'=>$img,
                'thumb_img'=>$thumb_img,
                'hobby' => $hobby


            );
            $this->load->model('user_model');
            $rows=$this->user_model->save($user_data);
            if($rows){
                

                redirect('admin/mgr_user');
            }else{
                echo 'fail';
            }
        }else{
            var_dump($this->upload->display_errors());
            echo '文件上传失败!';
        }
    }


    public function search_user(){
        $keyword = $this -> input -> get('keyword');
        $this -> load -> model('user_model');
        $results = $this ->user_model->get_user_by_keyword($keyword);
        if($results){
            echo json_encode($results);
        }
    }











    public function delete_user(){
        $user_id = $this -> input -> get('userId');
        $this -> load -> model('user_model');
        $rows = $this ->user_model-> delete($user_id);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }

    public function disabled_user(){
        $user_id = $this -> input -> get('userId');
        $this -> load -> model('user_model');
        $rows = $this ->user_model->disable($user_id);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }

    public function delete_selected_user(){
        $user_ids = $this -> input -> get('userIdStr');
        $this -> load -> model('user_model');
        $rows = $this -> user_model -> delete_selected($user_ids);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
    /*房客管理结束*/







}
