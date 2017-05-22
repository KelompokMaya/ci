<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mspk extends CI_Model {

public function GetKriteria($dimana=""){
	$data = $this->db->get('bobotkriteria'.$dimana);
	return $data->result_array();  
	}
public function GetNormalisasi($dimana=""){
	$data = $this->db->get('normalisasi_kriteria'.$dimana);
	return $data->result_array();  
	}
public function GetKonsisten($dimana=""){
	$this->db->select('*');
	$this->db->from('bobotkriteria');
	$this->db->join('normalisasi_kriteria', 'bobotkriteria.id_kriteria = normalisasi_kriteria.id_kriteria');
 
	$data = $this->db->get();
	return $data->result_array();  
	}


public function EditKriteria($Namatabel,$data,$dimama){
	$edt= $this->db->update($Namatabel,$data,$dimama);
	return $edt;

}
public function GetAlternatif(){
	$data = $this->db->get('alternatif');
	return $data->result_array();  
	}
	
}
