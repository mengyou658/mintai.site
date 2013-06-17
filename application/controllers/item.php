<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
			
	}

	public function show($item)
	{
		$this->load->view($item);	
	}

}

