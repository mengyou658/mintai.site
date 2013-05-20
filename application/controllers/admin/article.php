<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index()
	{

	}

	public function form()
	{
		$data['menu'] = 'article';
		$data['sub_menu'] = 'article_form';
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/article_form");
		$this->load->view('admin/_footer');
	}	

	public function edit()
	{
	
	}

	public function listall()
	{
	
	}	

}

