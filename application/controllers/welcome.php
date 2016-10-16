<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('book_model');
    }
	public function index()
	{
		$this->load->view('index');
	}
	public function search(){
		$this->load->view('search.php');
	}
	public function become_owner(){
		//成为房东
		$this->load->view('become_owner');
	}
	public  function  order(){
		//预定房源
		$this->load->view('order');
	}
	public function tanceng(){
		//弹层主页
		$this->load->view('tanceng');
	}
	public  function share(){
		//分享个人
		$this->load->view('share');
	}
	public  function  complaint(){
		//申诉
		$this->load->view('complaint');
	}
	public  function  complaint_details(){
		//申诉详情
		$this->load->view('complaint_details');
	}
	public function Guest_home()
	{
		$this->load->view('Guest_home');
	}


    public function collect_page(){
        //跳转到收藏页
        $this->load->view('collect_page');
    }
	/*编辑房客信息页面*/
    public function edit_user_infor(){
    	$this->load->view('edit_user_infor');
    }
}















