<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Register_Model');
	}

	public function index()
	{
		$data['menu'] = 'register';
		$data['sub_menu'] = 'register_list';

		$this->load->view("admin/_header");
		$this->load->view("admin/_left", $data);
		$this->load->view("admin/register_list");
		$this->load->view("admin/_footer");
	}


	public function experienceReg()
	{
		$name = $this->input->post("name");	
		$phone = $this->input->post("phone");	
		$type = $this->input->post("type");	
		list($type_name, $type_id) = explode("-" , $type);
		
		$register = array(
			'name' => $name,
			'phone' => $phone,
			'type_id' => intval($type_id),
			'typename' => $type_name,
			'createtime' => date('Y-m-d H:m:s')
		);

		$this->Register_Model->save($register);
		$this->session->set_flashdata('success', '您的信息已经提交，网站工作人员会尽快与您取得联系!');
		redirect("/item/show/robot#reg");
	}

	public function tryReg()
	{
		$name = $this->input->post("name");	
		$phone = $this->input->post("phone");	
		$type = $this->input->post("type");	
		list($type_name, $type_id) = explode("-" , $type);
		
		$register = array(
			'name' => $name,
			'phone' => $phone,
			'type_id' => intval($type_id),
			'typename' => $type_name,
			'createtime' => date('Y-m-d H:m:s')
		);

		$this->Register_Model->save($register);
		$this->session->set_flashdata('success', '您的信息已经提交，网站工作人员会尽快与您取得联系!');
		redirect("/item/show/trader");

	}

	public function simReg()
	{
		$name = $this->input->post("name");	
		$phone = $this->input->post("phone");	
		$type = $this->input->post("type");	
		list($type_name, $type_id) = explode("-" , $type);
		
		$register = array(
			'name' => $name,
			'phone' => $phone,
			'type_id' => intval($type_id),
			'typename' => $type_name,
			'createtime' => date('Y-m-d H:m:s')
		);

		$this->Register_Model->save($register);
		$this->session->set_flashdata('success', '您的信息已经提交，网站工作人员会尽快与您取得联系!');
		redirect("/item/show/trader_master");

	}

	public function simulationReg()
	{
		$name = $this->input->post("name");	
		$phone = $this->input->post("phone");	
		$idcard = $this->input->post("idcard");	
		$area = $this->input->post("area");	
		$qqnum = $this->input->post("qqnum");	
		list($province_id, $provincename) = explode("-" , $this->input->post("province"));
		list($city_id, $cityname) = explode("-" , $this->input->post("city"));
		
		$sim  = array(
			'name' => $name,
			'phone' => $phone,
			'idcard' => $idcard,
			'area_name' => $area,
			'qqnum' => $qqnum,
			'province_id' => $province_id,
			'province_name' => $provincename,
			'city_id' => $city_id,
			'city_name' => $cityname,
			'createtime' => date('Y-m-d H:m:s')
		);
		$this->Register_Model->saveSim($sim);
		$this->session->set_flashdata('success', '您的信息已经提交，网站工作人员会尽快与您取得联系!');
		redirect("/item/show/invest_imitate#reg");
	}

	public function subscribeReg()
	{
		$name = $this->input->post("name");	
		$phone = $this->input->post("phone");	
		$qqnum = $this->input->post("qqnum");	
		$account = $this->input->post("account");	
		$gender = $this->input->post('gender');
		$gender = $gender == "yes" ? 1 : 0;

		$sub = array(
			'name' => $name,
			'phone' => $phone,
			'qqnum' => $qqnum,
			'account' => $account,
			'gender' => $gender,
			'createtime' => date('Y-m-d H:m:s')
		);

		$this->Register_Model->saveSub($sub);
		$this->session->set_flashdata('success', '您的信息已经提交，网站工作人员会尽快与您取得联系!');
		redirect("/item/show/online_account#reg");
			
	}

}

