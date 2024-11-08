<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Profil_model extends MY_Model {
    public function __construct() {

    }

    public function sosmed($id){
        // var_dump($id); die();

        $this->db->where('id',99);
        $query = $this->db->get('t_sosmed');
        return $query->row();
    }
    public function biodata($id){
        $this->db->where('id_users',$id);
        $query = $this->db->get(kode_lsp().'biodata');
        return $query->row();
    }
    public function pekerjaan($id){
    	   $this->db->where('id_users',$id);
        $query = $this->db->get('t_users_pekerjaan');
        return $query->result();
    }
    public function pendidikan($id){
    	$this->db->where('id_users',$id);
        $query = $this->db->get('t_users_pendidikan');
        return $query->result();
    }
    function provinsi(){
        $data = $this->db->get('mst_provinsi')->result();
        $options = array();

        foreach ($data as $row)
        {
            $options[$row->prov_id] = $row->prov_nama;
        }
        return $options;
    }
}
