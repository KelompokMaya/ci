<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mspk_alternatif extends CI_Model {
	
	public function HapusAlternatif($Namatabel,$dimana){

	$hps= $this->db->delete($Namatabel,$dimana);
	return $hps;
	}
	public function GetAlternatif($dimana){
		$this->db->where('id_alternatif',$dimana);
	$data = $this->db->get('alternatif');
	return $data->result_array();  
	}
	public function EditKriteria($Namatabel,$data,$dimama){
	$edt= $this->db->update($Namatabel,$data,$dimama);
	return $edt;

}
}
