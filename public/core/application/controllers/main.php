<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index($params){
		redirect('forum');
	}

	function _remap($method, $params){
		//remap function similar to route config file
		$this->index($params);
	}
}

/* eof file application/controllers/main.php */