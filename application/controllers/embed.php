<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Embed extends MY_Controller {
	
	function __construct() {
		parent::__construct();
	}

	function index($file,$autoplay='false') {

		$data['data'] = $file;
		$data['autoplay'] = $autoplay;

		// var_dump($autoplay); die();

		$this->load->view('embed/video', $data);
	}

}