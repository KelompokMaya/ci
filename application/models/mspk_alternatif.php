<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mspk_alternatif extends CI_Model {
	
	public function HapusAlternatif($Namatabel,$dimana){

	$hps= $this->db->delete($Namatabel,$dimana);
	return $hps;
}
	
}
