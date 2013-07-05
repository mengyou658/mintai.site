<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Article_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function del($id)
	{
		$this->db->delete('article', array('id' => $id));	
	}

	//保存分类
	function save($article)
	{
		$this->db->insert('article', $article);
	}

	function update($id, $article)
	{
		$this->db->where('id', $id);
		$this->db->update('article', $article);	
	}

	function findById($id)
	{
		$next_data = $this->db->query('select id, title from article where id >'.$id.' order by id asc limit 1');
		$cur_data = $this->db->query('select * from article where id =' . $id);
		$pre_data = $this->db->query('select id, title from article where id <'.$id.' order by id desc limit 1');
		$next = $next_data->result_array();
		$curr = $cur_data->result_array();
		$pre = $pre_data->result_array();
		$data = array();
		if(!empty($next)) $data['next'] = $next[0];
		if(!empty($pre)) $data['pre'] = $pre[0];
		$data['curr'] = $curr[0];
		return $data;
	}

	function findByType($typeId, $limit = 6)
	{
		$query = $this->db->query("select * from article where type_id = " . $typeId . "  and index_show = 1 and status = 1 order by id desc limit " . $limit);
		return $query->result_array();
	}

	function findByTypeIndex($typeId)
	{
		$sql = "select * from article where type_id = " . $typeId . " and index_show = 0 and status = 1 order by id desc limit 1";
		$query = $this->db->query($sql);
		$tmp_arr = $query->result_array();
		if(!empty($tmp_arr))
		{
			return $tmp_arr[0];
		}
		else
		{
			return array();	
		}
	}


	function findAll($type_id = 0, $offset = 0, $limit = 10) 
	{
		if($type_id !=0)
		{
			$this->db->where('type_id', $type_id);
		}
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("article", $limit, $offset);
		return $query->result_array();
	}

	function findAllIndex($type_id = 0, $offset = 0, $limit = 10) 
	{
		if($type_id !=0)
		{
			$this->db->where('type_id', $type_id);
		}

		$this->db->where('status', 1);
		$query = $this->db->get("article", $limit, $offset);
		return $query->result_array();
	}


	function findCount($type_id = 0) 
	{
		if($type_id != 0)
		{
			$sql = "select count(1) as count from article where type_id = " . $type_id;	
		}
		else
		{
			$sql = "select count(1) as count from article";	
		}
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}
