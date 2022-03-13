<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_location extends CI_Controller {

	public function getLocations()
	{
		$this->db->select('*');
		$this->db->from('locations');
		$res = $this->db->get()->result_array();
        echo json_encode($res);
	}
}
