<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
            $get_tanaman = $this->M_tanaman->get_all_tanaman();
        
            $data = array(
                'list_tanaman' => $get_tanaman
            );

            $this->load->view('inc/header');
            $this->load->view('v_index', $data);
            $this->load->view('inc/footer');
        }
    }
}
?>