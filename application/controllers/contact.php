<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('contact_model');
	}

	function index() {

        $template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/contact/index';
        $template_bottom = 'templates/responsive/footer_home';

        $contact = $this->contact_model->contact($this->id);
        //dump($contact);die();
        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama, 'contact' => $contact));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));

    }

    function edit() {

        $tlp = $this->input->post('tlp');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $url = $this->input->post('url');

        $data = array(
            'tlp' => $tlp,
            'alamat' => $alamat,
            'email' => $email,
            'url' => $url);

        // var_dump($this->id);die();

        // $this->db->where('id', 99);
        if ($this->db->update('t_contact', $data)) {
            $this->session->set_flashdata('result', 'Update contact success');
            $this->session->set_flashdata('mode_alert', 'success');
            redirect('contact');
        } else {
            return false;
        }
    }

}