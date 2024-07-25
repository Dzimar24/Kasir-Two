<?php defined('BASEPATH') OR exit('No direct script access allowed');

class log_m extends CI_Model {

    public function get($id = null) 
    {
        $this->db->from('log_pegawai');
        if($id != null ) {
            $this->db->where('log_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

}