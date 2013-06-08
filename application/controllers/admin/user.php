<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('User_Model');
	}

	public function index()
	{
		$users = $this->User_Model->findAll();
		$data['menu'] = 'user';
		$data['sub_menu'] = 'user_list';
		$data['users'] = $users;
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/user_list", $data);
		$this->load->view('admin/_footer');

	}

}

