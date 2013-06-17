<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('User_Model');
	}

	public function index()
	{
	}

	public function form()
	{
		$this->load->view('online');
	}	

	public function add()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		if($gender == "yes")
		{
			$gender == 1;	
		}
		else
		{
			$gender == 0;
		}
		$remark = $this->input->post('remark');
		$user = array(
			'name'	=> $name,
			'phone' => $phone,
			'gender' => $gender,
			'remark' => $remark, 
			'createtime' => date('Y-m-d H:m:s')
			); 

		$this->User_Model->save($user);				
		echo "<script>alert('预约成功');</script>";
		redirect('/user/form/');
	}

	public function edit()
	{
	
	}

	public function listall()
	{
	
	}	

	public function apply()
	{
	
	}

}

