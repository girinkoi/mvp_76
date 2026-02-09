<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanaman extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->database();
        $this->load->library('session');
        $this->load->model('M_tanaman');
    }

    public function index()
    {
        if($this->session->userdata('admin') == false)
        {
            redirect('login');
        }
        else
        {
            $this->load->view('inc/header');
            $this->load->view('v_add_tanaman');
            $this->load->view('inc/footer');
        }
    }

    public function add()
    {
        $data = array (
            'name'   => $this->input->post('name'),
            'price'  => $this->input->post('price'),
            'status' => 'ready'
        );

        $this->M_tanaman->add_tanaman($data);

        redirect('dashboard');
    }
}
?>