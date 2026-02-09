<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->database();
        $this->load->library('session');
        $this->load->model('M_history');
    }

    public function index()
    {
        if($this->session->userdata('admin') == false)
        {
            redirect('login');
        }
        else
        {
            $get_data = $this->M_history->get_history_completed();

            $data = array (
                'list_data' => $get_data
            );

            $this->load->view('inc/header');
            $this->load->view('v_history_admin', $data);
            $this->load->view('inc/footer');
        }
    }

    public function user()
    {
        $user_id = $this->session->userdata('user_id');

        if($this->session->userdata('user') == false)
        {
            redirect('login');
        }
        else
        {
            $get_data = $this->M_history->get_history_by_user($user_id);

            $data = array (
                'list_data' => $get_data
            );

            $this->load->view('v_history_user', $data);
        }
    }
}
?>