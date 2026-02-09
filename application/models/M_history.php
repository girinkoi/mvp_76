<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_history extends CI_Model {

    public function get_history_completed()
    {
        $this->db->select('
            orders.id,
            orders.buyer_name,
            orders.address,
            orders.payment_method,
            orders.status,
            plants.name,
            plants.price
        ');

        $this->db->from('orders');
        $this->db->join('plants', 'orders.plant_id = plants.id', 'inner');
        $this->db->where('orders.status', 'completed');

        $query = $this->db->get();
        return $query->result();
    }

    public function get_history_by_user()
    {
        $user_id = $this->session->userdata('user_id');

        $this->db->select('
            orders.id,
            orders.buyer_name,
            plants.name,
            plants.price
        ');

        $this->db->from('orders');
        $this->db->join('plants', 'orders.plant_id = plants.id', 'inner');

        $this->db->where('orders.user_id', $user_id);

        $query = $this->db->get();
        return $query->result();
    }


    
}
