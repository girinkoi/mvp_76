<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->database();
        $this->load->library('session');
        $this->load->model('M_orders');
        $this->load->model('M_tanaman');
    }

    public function index()
    {
        $get_tanaman_by_status = $this->M_tanaman->get_tanaman_ready();
        
        $data = array(
            'list_tanaman' => $get_tanaman_by_status
        );

        if($this->session->userdata('user') == false)
        {
            redirect('login');
        }
        else
        {
            $this->load->view('v_orders_users', $data);
        }

        
    }

    public function pesan($id)
    {
        $get_pesan = $this->M_orders->get_order_by_id($id);

        $data = array (
            'list_pesan' => $get_pesan
        );

        $this->load->view('v_pesan_user', $data);
    }

    public function beli()
    {
        $user_id = $this->session->userdata('user_id');

        $id = $this->input->post('id_pesan');

        $data = array (
            'user_id'       => $user_id,
            'plant_id'      => $id,
            'buyer_name'    => $this->input->post('nama_pembeli'),
            'address'       => $this->input->post('alamat'),
            'payment_method'=> $this->input->post('payment_method'),
            'status'        => 'pending'
        );

        $this->M_orders->update_status($id);
        $this->M_orders->beli_tanaman($data);

        redirect('orders');
    }
}
?>