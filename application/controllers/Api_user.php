<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_user extends CI_Controller {

	public function getUsers()
	{
		$this->db->select('*');
		$this->db->from('users');
		$res = $this->db->get()->result_array();
        echo json_encode($res);
	}
}
