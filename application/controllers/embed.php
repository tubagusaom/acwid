<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Embed extends MY_Controller {
	
	function __construct() {
		parent::__construct();
	}

	function index($file) {

		// $data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();
		$data['data'] = $file;

		// var_dump($data['aplikasi']); die();

		$this->load->view('embed/video', $data);
	}

}