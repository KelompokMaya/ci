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
public function EditAlternatif($Namatabel,$data,$dimama){
	$edt= $this->db->update($Namatabel,$data,$dimama);
	return $edt;

	}
public function GetData(){
	$data = $this->db->get('alternatif');
	return $data->result_array();  
	}
/*public function Ranking($Namatabel,$data){
	$this->db->select('*');
	$this->db->from('alternatif');
	$this->db->join('ranking', 'alternatif.nama_alternatif = ranking.nama_alternatif');
 
	$data = $this->db->get();
	return $data->result_array();  
	} */
public function GetRanking(){
	$this->db->order_by('nilai','DESC');
	$ranking= $this->db->get('ranking' );
	return $ranking->result_array();  
}

}
