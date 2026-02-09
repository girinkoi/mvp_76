<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(['url','form']);
        $this->load->database();
        $this->load->library('session');
        $this->load->model('M_login');
    }

    public function index()
    {
        if($this->session->userdata('user') == true)
        {
            redirect('orders');
        }
        elseif($this->session->userdata('admin') == true)
        {
            redirect('dashboard');
        }
        else
        {
            $this->load->view('v_login');
        }
    }


    public function do_login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$user = $this->M_login->get_user_by_username($username);

		if ($user && $password === $user->password) {

			if ($user->role == 'admin') {

				$this->session->set_userdata([
					'admin'     => true,
					'admin_id'  => $user->id,
					'admin_name'=> $user->username
				]);

				redirect('dashboard');

			} else {

				$this->session->set_userdata([
					'user'      => true,
					'user_id'   => $user->id,
					'user_name' => $user->username
				]);

				redirect('orders');
			}

		} else {
			$this->session->set_flashdata(
				'alert_gagal',
				'Login Gagal: Cek username dan password Anda!'
			);
			redirect('login');
		}
	}

    public function register()
    {
        $this->load->view('v_register');
    }

    public function register_process()
    {
        $data = [
            'name' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role' => 'user'
        ];

        $this->M_login->insert_user($data);

        $this->session->set_flashdata('success', 'Register berhasil, silakan login!');
        redirect('login');
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
