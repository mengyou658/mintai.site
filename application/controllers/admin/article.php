<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Article_Model');
		$this->load->model('Articletype_Model');
	}

	public function index()
	{
		$articles = $this->Article_Model->findAll();
		$data['menu'] = 'article';
		$data['sub_menu'] = 'article_list';
		$data['articles'] = $articles;
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/article_list", $data);
		$this->load->view('admin/_footer');

	}

	public function form()
	{
		$data['menu'] = 'article';
		$data['sub_menu'] = 'article_form';

		$types = $this->Articletype_Model->findAll();
		$data['types'] = $types;
		$this->load->view('admin/_header');
		$this->load->view('admin/_left', $data);
		$this->load->view("admin/article_form");
		$this->load->view('admin/_footer');
	}	

	public function add()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('news_content');
		$post_time = $this->input->post('post_time');
		$source = $this->input->post('source');
		$status = $this->input->post('status');
		$status = ($status == 'yes') ? 1 : 0;
		$type_id = $this->input->post('type_id');
		$article = array(
			'title'	=> $title,
			'content' => $content,
			'post_time' => $post_time,
			'source' => $source,
			'status' => $status,
			'type_id' => $type_id,
			'createtime' => date('Y-m-d H:m:s')
			); 

		$this->Article_Model->save($article);				
		redirect('/admin/article/');
	}

	public function preview()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('news_content');
		$news_content = $this->input->post('content');
		$post_time = $this->input->post('post_time');
		$source = $this->input->post('source');
		$status = $this->input->post('status');
		$status = ($status == 'yes') ? 1 : 0;
		$type_id = $this->input->post('type_id');
		$type = $this->Articletype_Model->findById($type_id);
		$article = array(
			'title'	=> $title,
			'content' => $content,
			'post_time' => $post_time,
			'source' => $source,
			'status' => $status,
			'type_id' => $type_id,
			'createtime' => date('Y-m-d H:m:s')
			); 
		$data['article'] = $article;
		$data['type'] = $type;
		$this->load->view('admin/news_preview', $data);	
	}

	public function edit()
	{
	
	}

	public function listall()
	{
	
	}	

}

