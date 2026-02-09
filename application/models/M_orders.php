<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_orders extends CI_Model {

    public function get_order_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('plants');

        return $query->row();
    }

    public function beli_tanaman($data)
    {
        return $this->db->insert('orders', $data);
    }

    public function update_status($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('plants', array('status' => 'pending'));

        return $query;
    }
}
