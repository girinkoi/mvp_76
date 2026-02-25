<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tanaman extends CI_Model {

    public function get_all_tanaman()
    {
        $this->db->where_in('status', ['ready', 'pending']);
        $query = $this->db->get('plants');

        return $query->result();    
    }

    public function add_tanaman($data)
    {
        return $this->db->insert('plants', $data);
    }

    public function get_tanaman_ready()
    {
        $this->db->where('status', 'ready');
        $query = $this->db->get('plants');

        return $query->result();
    }

    
}
