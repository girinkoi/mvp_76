<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengelolaan extends CI_Model {

    public function get_orders()
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
        $this->db->where('orders.status', 'pending');

        $query = $this->db->get();
        return $query->result();
    }

    public function accept_status($order_id)
    {
        $order = $this->db
                      ->get_where('orders', ['id' => $order_id])
                      ->row();

        $plant_id = $order->plant_id;

        $this->db->trans_start();

        $this->db->where('id', $order_id);
        $this->db->update('orders', [
            'status' => 'completed'
        ]);

        $this->db->where('id', $plant_id);
        $this->db->update('plants', [
            'status' => 'sold'
        ]);

        $this->db->trans_complete();

        return $this->db->trans_status();
    }
}
