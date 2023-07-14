<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Contact_model extends MY_Model {
    public function __construct() {

    }

    public function contact($id){
        // var_dump($id); die();

        // $this->db->where('id',99);
        $query = $this->db->get('t_contact');
        return $query->row();
    }
}
