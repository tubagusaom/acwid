<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resume extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Sertifikasi_Model');
	}

	function add() {
        $template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/resume/add';
        $template_bottom = 'templates/responsive/footer';

        // var_dump($this->id);die();

        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
    }

		function upload() {
				$aplikasi = $this->aplikasi;

				// $data_upload = $this->upload->data();
				// $data['file_size'] = round(($data_upload['file_size'] / 1024), 2) . ' MB';
				// $data['extension'] = str_replace('.', '', $data_upload['file_ext']);

				$data['id_pekerjaan'] = $this->input->post('pekerjaan');
				$data['nama'] = $this->input->post('nama');
				$data['thn_awal'] = $this->input->post('thn_awal');
				$data['thn_akhir'] = $this->input->post('thn_akhir');
				$data['tempat'] = $this->input->post('tempat');
				$data['description'] = $this->input->post('description');

				// var_dump($data); die();

				if($this->db->insert('t_resume', $data)){
					$this->session->set_flashdata('result', 'Resume berhasil ditambah');
					$this->session->set_flashdata('mode_alert', 'success');
					redirect('resume/data');
				} else {
					return false;
				}

		}

	function data() {
        $template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/resume/data';
        $template_bottom = 'templates/responsive/footer';

        $this->db->where('id_pekerjaan', '1');
        $profesional = $this->db->get('t_resume')->result();

				$this->db->where('id_pekerjaan', '2');
        $public = $this->db->get('t_resume')->result();

        // var_dump($public);die();

        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama, 'profesional' => $profesional, 'public' => $public));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
    }

	function hapus($id = false) {
        if (!$id) {
            redirect(base_url() . 'resume/data');
        } else {
            // $this->db->where('id_asesi', $this->id);
            $this->db->where('id', $id);
            $this->db->delete('t_resume');

						$this->session->set_flashdata('result', 'Resume berhasil dihapus');
						$this->session->set_flashdata('mode_alert', 'success');

            redirect(base_url() . 'resume/data');
        }
    }

		function edit($id) {
	        $template_header = 'templates/responsive/header';
	        $template_body = 'templates/responsive/resume/edit';
	        $template_bottom = 'templates/responsive/footer';

					$this->db->where('id',$id);
	        $resume = $this->db->get('t_resume')->row();
	        // var_dump($resume);die();

	        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
	        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama, 'resume' => $resume));
	        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
	    }

			function update() {

					$id= $this->input->post('acid');

					$data['id_pekerjaan'] = $this->input->post('pekerjaan');
					$data['nama'] = $this->input->post('nama');
					$data['thn_awal'] = $this->input->post('thn_awal');
					$data['thn_akhir'] = $this->input->post('thn_akhir');
					$data['tempat'] = $this->input->post('tempat');
					$data['description'] = $this->input->post('description');

					$this->db->where('id',$id);
					if($this->db->update('t_resume', $data)){
						$this->session->set_flashdata('result', 'Resume berhasil diupdate');
						$this->session->set_flashdata('mode_alert', 'success');
						redirect('resume/data');
					} else {
						return false;
					}
	    }

}
