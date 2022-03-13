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
    public function calculateDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
        {
        $long1 = deg2rad($longitudeFrom);
        $long2 = deg2rad($longitudeTo);
        $lat1 = deg2rad($latitudeFrom);
        $lat2 = deg2rad($latitudeTo);

        //Haversine Formula
        $dlong = $long2 - $long1;
        $dlati = $lat2 - $lat1;

        $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);

        $res = 2 * asin(sqrt($val));

        $radius = 3958.756;

        $result = $res*$radius;

        echo round($result * 1609.34, 0);
        }
}
