<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Portfolio extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

	function category() {
        $template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/portfolio/category';
        $template_bottom = 'templates/responsive/footer_home';

        $kategori = $this->db->get('t_cat_portfolio')->result();

		// var_dump($kategori); die();

        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama, 'kategori' => $kategori));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
    }

	function add_category() {
        $template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/portfolio/add_category';
        $template_bottom = 'templates/responsive/footer_home';

        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
    }

	function save_category() {
		$aplikasi = $this->aplikasi;
		
		$data['name'] = $this->input->post('name');

		// var_dump($data); die();

		if($this->db->insert('t_cat_portfolio', $data)){
			$this->session->set_flashdata('result', 'Kategori berhasil ditambah');
			$this->session->set_flashdata('mode_alert', 'success');
			redirect('portfolio/category');
		} else {
			return false;
		}

	}

	function edit_category($id){
		$template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/portfolio/edit_category';
        $template_bottom = 'templates/responsive/footer_home';

		$this->db->where('id',$id);
		$kategori = $this->db->get('t_cat_portfolio')->row();

        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama, 'kategori' => $kategori));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
	}

	function save_edit_category(){
		$id= $this->input->post('acid');
		$data['name'] = $this->input->post('name');

		// var_dump($data['name']); die();

		$this->db->where('id',$id);
		if($this->db->update('t_cat_portfolio', $data)){
			$this->session->set_flashdata('result', 'Kategori berhasil diupdate');
			$this->session->set_flashdata('mode_alert', 'success');
			redirect('portfolio/category');
		} else {
			return false;
		}
	}

	function delete_category($id = false) {
        if (!$id) {
            redirect(base_url() . 'portfolio/category');
        } else {
            // $this->db->where('id_asesi', $this->id);
            $this->db->where('id', $id);
            $this->db->delete('t_cat_portfolio');

			$this->session->set_flashdata('result', 'Kategori berhasil dihapus');
			$this->session->set_flashdata('mode_alert', 'success');

            redirect(base_url() . 'portfolio/category');
        }
    }



    function delete_ajax($nmdokumen){

        $filepath = "repo/portfolio/$nmdokumen";

        // var_dump($filepath); die();

        if (is_file($filepath))
        {
            unlink($filepath);
        }

    }

    public function upload_ajax($nmdokumen)
    {
        $this->load->helper('postinger');
        $this->load->library('upload');

        $files = $_FILES['file'];
        // $namafile = $nmdokumen . "-" . time() . "_" . $files['name'];
        // $namafile = $nmdokumen . "-" . time() . "-buktipendukung";
        $namafile = $nmdokumen . time();
        $fileupload = $this->upload_allportofolio('file', $namafile);
        echo $fileupload;

        // var_dump($namafile); die();
    }

    function upload() {
        $template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/portfolio/upload';
        $template_bottom = 'templates/responsive/footer';

		$kategori = $this->db->get('t_cat_portfolio')->result();
        // dump($kategori);die();

        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama, 'kategori' => $kategori));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
    }

    function add() {

        $nama_dokumen = $this->input->post('nama_dokumen', true);
        $file_data    = $this->input->post('file_data', true);
        $filesize     = $this->input->post('file_size', true);
        $fileext      = $this->input->post('file_ext', true);
        
        $nama_portfolio = $this->input->post('nama_portfolio');
        $id_categories = $this->input->post('id_categories');
        $description   = $this->input->post('description');

        // var_dump(($file_data)); die();

        $data['id_asesi'] = $this->id;

        foreach ($nama_dokumen as $key => $value) {

        //     // $aplikasi = $this->aplikasi;

            $array_portofolio[$key] = $file_data[$key];
            $array_filesize[$key] = $filesize[$key];
            $array_fileext[$key] = $fileext[$key];

            $arr_ext = str_replace('.', '', $array_fileext[$key]);

            $array_jenis = $this->cek_ext_file($arr_ext);

            $data_detail = array(
                'file_size' => round(($array_filesize[$key] / 1024), 2) . ' MB',
                'extension' => $arr_ext,
                'id_asesi' => $this->id,
                'nama_file' => $array_portofolio[$key],
                'id_categories' => $id_categories,
                'nama_dokumen' => $nama_portfolio,
                'extension_jenis' => $array_jenis,
                'description' => $description,
            );

            // if($this->db->insert('t_portfolio', $data)){
				// $this->session->set_flashdata('result', 'Portfolio berhasil ditambah');
				// $this->session->set_flashdata('mode_alert', 'success');
	        //     redirect('portfolio/index');
            // }

            $this->db->insert('t_portfolio', $data_detail);
            
        }

        $this->session->set_flashdata('result', 'Portfolio berhasil ditambah');
		$this->session->set_flashdata('mode_alert', 'success');
	    redirect('portfolio/index');

        // var_dump(($array_portofolio)); die();
    }

    // function add() {
    //     $aplikasi = $this->aplikasi;
    //     if (isset($_FILES['nama_file']['tmp_name']) && !empty($_FILES['nama_file']['tmp_name'])) {
    //         $data['nama_file'] = 'portfolio_acwid_' . time() . '_' . str_replace(' ', '_', $_FILES['nama_file']['name']);
    //         $config['upload_path'] = substr(__dir__, 0, strpos(__dir__, "application")) . 'repo/portfolio/';
    //         $config['allowed_types'] = '*';
    //         $config['max_size'] = 11000000;
    //         $config['file_name'] = $data['nama_file'];
    //         $this->load->library('upload', $config);

    //         if (!$this->upload->do_upload('nama_file')) {

	// 			$this->session->set_flashdata('result', 'Portfolio gagal ditambahkan');
	// 			$this->session->set_flashdata('mode_alert', 'alert');

	// 			redirect(base_url() . 'portfolio/upload');
    //         } else {
    //             $data_upload = $this->upload->data();
    //             $data['file_size'] = round(($data_upload['file_size'] / 1024), 2) . ' MB';
    //             $data['extension'] = str_replace('.', '', $data_upload['file_ext']);
    //             $data['id_asesi'] = $this->id;
    //             $data['nama_file'] = $config['file_name'];
    //             $data['id_categories'] = $this->input->post('id_categories');
    //             $data['nama_dokumen'] = $this->input->post('nama_dokumen');
    //             $data['description'] = $this->input->post('description');
    //             if($this->db->insert('t_portfolio', $data)){
	// 				$this->session->set_flashdata('result', 'Portfolio berhasil ditambah');
	// 				$this->session->set_flashdata('mode_alert', 'success');
	//                 redirect('portfolio/index');
    //             }
    //         }
    //     }
    // }

    function index() { 
        $template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/portfolio/index';
        $template_bottom = 'templates/responsive/footer';

        $this->load->model('portfolio_model');

        $kategori = $this->portfolio_model->kategori();
		$portfolio = $this->portfolio_model->portfolio();

		// var_dump($portfolio); die();
        
        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama, 'kategori' => $kategori, 'portfolio' => $portfolio));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
    }

    function hapus($id = false) {
        if (!$id) {
            redirect(base_url() . 'portfolio/index');
        } else {
            // $this->db->where('id_asesi', $this->id);
            // $this->db->where('id', $id);
            // $this->db->delete('t_portfolio');

			$this->db->where('id',$id);
        	$row = $this->db->get('t_portfolio')->row();

			// var_dump($row); die();
			

			// var_dump($files); die();

			$file = 'repo/portfolio/' . $row->nama_file;

			if (file_exists($file)) {
				$this->db->where('id', $id);
            	$this->db->delete('t_portfolio');
				unlink($file);

				$this->session->set_flashdata('result', 'Portfolio berhasil dihapus');
				$this->session->set_flashdata('mode_alert', 'success');
			}else {
				$this->session->set_flashdata('result', 'Portfolio gagal dihapus');
				$this->session->set_flashdata('mode_alert', 'danger');
			}

            redirect(base_url() . 'portfolio/index');
        }
    }
    function edit($id) {
        $template_header = 'templates/responsive/header';
        $template_body = 'templates/responsive/bukti_pendukung/edit_upload';
        $template_bottom = 'templates/responsive/footer';
        $this->db->where('id',$id);
        $row = $this->db->get('t_repositori')->row();
        $this->load->view($template_header, array('aplikasi' => $this->aplikasi, 'query_pesan' => $this->query_pesan, 'query_pesan_unread' => $this->query_pesan_unread));
        $this->load->view($template_body, array('row'=>$row,'aplikasi' => $this->aplikasi, 'unread_message' => $this->unread_message, 'menus' => $this->menus, 'rolename' => $this->auth->get_rolename(), 'nama_user' => $this->auth->get_user_data()->nama));
        $this->load->view($template_bottom, array('aplikasi' => $this->aplikasi));
    }

    function update() {
        $is_work = $this->input->post('is_work');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $id_provinsi = $this->input->post('id_provinsi');
        $tanggal_bergabung = $this->input->post('tanggal_bergabung');
        $tanggal_berhenti = $this->input->post('tanggal_berhenti');
        
        //var_dump($is_work); die();
        //$nama_pekerjaan = $_POST['group-a'];
        //$this->db->where('id_users', $this->id);
        //$this->db->delete('t_users_pekerjaan');
        //foreach ($nama_pekerjaan as $key => $value) {
            if ($nama_pekerjaan != "") {
                $tglberhenti = $tanggal_berhenti == "" ? NULL : mysql_date($tanggal_berhenti);
                $data_array = array('nama_pekerjaan' => $value['nama_pekerjaan'],
                    'tanggal_bergabung' => mysql_date($tanggal_bergabung),
                    'tanggal_berhenti' => $tglberhenti,
                    'nama_perusahaan' => $nama_perusahaan,
                    'nama_pekerjaan' => $nama_pekerjaan,
                    'id_provinsi' => $id_provinsi,
                    'is_work' => $is_work,
                    'id_users' => $this->id);
                //var_dump($data_array);die();
                $this->db->insert('t_users_pekerjaan', $data_array);
            }
        //}
        redirect('profil/pekerjaan');
    }
    function edit_upload() {
        $aplikasi = $this->aplikasi;
        if (isset($_FILES['nama_file']['tmp_name']) && !empty($_FILES['nama_file']['tmp_name'])) {
            $data['nama_file'] = time() . str_replace(' ', '_', $_FILES['nama_file']['name']);
            $config['upload_path'] = substr(__dir__, 0, strpos(__dir__, "application")) . 'repo/asesi/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1100000;
            $config['file_name'] = $data['nama_file'];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('nama_file')) {
                echo"gagal update";
            } else {
                $data_upload = $this->upload->data();
                $data['file_size'] = round(($data_upload['file_size'] / 1024), 2) . ' MB';
                $data['extension'] = str_replace('.', '', $data_upload['file_ext']);
                //$data['id_asesi'] = $this->id;
                $data['nama_file'] = $config['file_name'];
                $data['jenis_portofolio'] = $this->input->post('jenis_portofolio');
                $data['nama_dokumen'] = $this->input->post('nama_dokumen');
                $data['description'] = $this->input->post('description');
                //var_dump($this->input->post('id'));die();
                $id= $this->input->post('id');
                $this->db->where('id',$id);
                $this->db->update('t_repositori', $data);
                redirect('bukti_pendukung/index');
            }
        }
    }
}
