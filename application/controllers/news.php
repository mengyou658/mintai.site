<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model('Article_Model');
		$this->load->model('Articletype_Model');
	}

	public function index()
	{
		$types = array('name' => '媒体报道', 'id'=>0);
		$data['types'] = $types;
		$news = $this->Article_Model->findAllIndex();
		$data['list'] = $news;
		$this->load->view('news_list', $data);		
	}

	public function show($id)
	{
		$result = $this->Article_Model->findById($id);
		$data['article'] = $result['curr'];
		if(!empty($result['pre'])) $data['pre'] = $result['pre'];
		if(!empty($result['next'])) $data['next'] = $result['next'];
		if($result['curr']['show_page'] == 0)
			$this->load->view('news_show', $data);	
		else
			$this->load->view('show_news', $data);	

	}


	public function more($type_id)
	{


		$limit = 20;
		$offset = 0;
		$num = $this->input->get('per_page');
		$type_id = $this->input->get('type');
		$type_id = empty($type_id) ?  0 : $type_id;
		$count = $this->Article_Model->findCount($type_id);
		$data['num'] = $num;
		$data['type_id'] = $type_id;
		//分页配置
		$config['base_url'] = 'index.php?d=admin&c=article&m=index';
		if(!empty($type_id))
		{
			$config['base_url'] = 'index.php?d=admin&c=article&m=index&type=' . $type_id;
		}

		$config['total_rows'] = $count[0]['count'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = $this->input->get('per_page');
		$config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';	
		$config['num_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';	
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';	
		$config['last_tag_close'] = '</li>';
		$config['use_page_numbers'] = TRUE;
	
		$this->pagination->initialize($config);

		if(empty($num))
		{
			$num = 0;	
			$offset = 0;
		}
		else
		{
			$offset = ($num - 1 ) * $limit;	
		}
		
		$articles = $this->Article_Model->findAll($type_id, $offset, $limit);
		$data['articles'] = $articles;
		$type = $this->Articletype_Model->findById($type_id);
		$data['list'] = $articles;
		$data['types'] = $type[0];
		$this->load->view('news_list', $data);	
	}	

}

