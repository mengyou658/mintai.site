<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Article_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	//保存分类
	function save($article)
	{
		$this->db->insert('article', $article);
	}

	function findById($id)
	{
		$this->db->where('id', $id);	
		$query = $this->db->get('article');
		return $query->row_array();
	}

	function findAll() 
	{
		$query = $this->db->get("article");
		return $query->result_array();
	}
}
