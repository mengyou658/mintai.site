<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Article_Model');
	}

	public function index()
	{
			
	}

	public function show($id)
	{
		$data['article'] = $this->Article_Model->findById($id);
		$this->load->view('news_show', $data);	
	}


	public function news_list()
	{
		$this->load->view('news_list');	
	}	

}

