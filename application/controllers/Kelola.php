<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->database();
        $this->load->library('session');
        $this->load->model('M_pengelolaan');
    }

    public function index()
    {
        if($this->session->userdata('admin') == false)
        {
            redirect('login');
        }
        else
        {
            $get_data = $this->M_pengelolaan->get_orders();

            $data = array(
                'list_data' => $get_data
            );
            
            $this->load->view('inc/header');
            $this->load->view('v_pengelolaan_admin', $data);
            $this->load->view('inc/footer');
        }
    }

    public function accept($id)
    {
        $this->M_pengelolaan->accept_status($id);
        redirect('kelola');
    }
}
?>