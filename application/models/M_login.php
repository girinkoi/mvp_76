<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function get_user_by_username($username)
	{
		return $this->db
					->where('name', $username)
					->get('users')
					->row();
	}

	public function insert_user($data)
	{
		return $this->db->insert('users', $data);
	}
}
