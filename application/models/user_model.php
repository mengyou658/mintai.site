<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_Model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	public function save($user)
	{
		$this->db->insert('user_apply', $user);	
	}

	public function findAll()
	{
		$users = $this->db->get('user_apply');	
		return $users->result_array();
	}

}
