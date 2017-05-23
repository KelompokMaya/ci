<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk_alternatif extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mspk_alternatif');     
    }
    public function alternatif()
	{
		

		$data=$this->mspk->GetAlternatif();
		$this->load->view('alternatif',array('data' =>$data)); 
 
	}
  
    public function tambah_alternatif()
	{
		$nama_alternatif		= $_POST['nama_alternatif'];
		$nilai_kriteria1		= $_POST['nilai_kriteria1'];
		$nilai_kriteria2		= $_POST['nilai_kriteria2'];
		$nilai_kriteria3		= $_POST['nilai_kriteria3'];
		$nilai_kriteria4		= $_POST['nilai_kriteria4'];
		$nilai_kriteria5		= $_POST['nilai_kriteria5'];
		$nilai_kriteria6		= $_POST['nilai_kriteria6'];

		
		$data_tambah	= array(
						  'nama_alternatif' => $nama_alternatif,
						  'nilai_kriteria1' => $nilai_kriteria1,
						  'nilai_kriteria2'	=> $nilai_kriteria2,
						  'nilai_kriteria3'	=> $nilai_kriteria3,
						  'nilai_kriteria4'	=> $nilai_kriteria4,
						  'nilai_kriteria5'	=> $nilai_kriteria5,
						  'nilai_kriteria6'	=> $nilai_kriteria6 );

		$tbh = $this->db->insert('alternatif',$data_tambah);
		if($tbh>=1){
			echo "<script>
				alert('data berhasil ditambahkan');
				window.location.href='alternatif';
				</script>";

		}
		else{
			echo "<script>
				alert('data gagal ditambahkan');
				</script>";
		}
		
		

	}
	public function lihat_edit_alternatif($id_alternatif){
		$data_k = $this->mspk_alternatif->GetAlternatif($id_alternatif);

		$data = array(
						  'id_alternatif' => $data_k[0]['id_alternatif'],
						  'nama_alternatif' => $data_k[0]['nama_alternatif'],
						  'nilai_kriteria1' => $data_k[0]['nilai_kriteria1'],
						  'nilai_kriteria2'	=> $data_k[0]['nilai_kriteria2'],
						  'nilai_kriteria3'	=> $data_k[0]['nilai_kriteria3'],
						  'nilai_kriteria4'	=> $data_k[0]['nilai_kriteria4'],
						  'nilai_kriteria5'	=> $data_k[0]['nilai_kriteria5'],
						  'nilai_kriteria6'	=> $data_k[0]['nilai_kriteria6'] );



		$this->load->view('edit_alternatif',$data);

	}
	public function edit_alternatif()
	{
		$id_alternatif			= $_POST['id_alternatif'];
		$nama_alternatif		= $_POST['nama_alternatif'];
		$nilai_kriteria1		= $_POST['nilai_kriteria1'];
		$nilai_kriteria2		= $_POST['nilai_kriteria2'];
		$nilai_kriteria3		= $_POST['nilai_kriteria3'];
		$nilai_kriteria4		= $_POST['nilai_kriteria4'];
		$nilai_kriteria5		= $_POST['nilai_kriteria5'];
		$nilai_kriteria6		= $_POST['nilai_kriteria6'];

	
		$data_edit		= array(
						  
						  'nama_alternatif' => $nama_alternatif,
						  'nilai_kriteria1' => $nilai_kriteria1,
						  'nilai_kriteria2'	=> $nilai_kriteria2,
						  'nilai_kriteria3'	=> $nilai_kriteria3,
						  'nilai_kriteria4'	=> $nilai_kriteria4,
						  'nilai_kriteria5'	=> $nilai_kriteria5,
						  'nilai_kriteria6'	=> $nilai_kriteria6 );
		$dimana 		= array( 'id_alternatif' => $id_alternatif);


		$edt = $this->mspk->EditKriteria('alternatif',$data_edit,$dimana);

		if($edt>=1){
			echo "<script>
				alert('data berhasil diubah');
				window.location.href='alternatif';
				</script>";
				
		}
		else{
			echo "<script>
				alert('data gagal diubah');
				</script>";
		}
		
	}


	public function hapus_alternatif($id_alternatif)
	{
		$dimana = array('id_alternatif'=> $id_alternatif);
		$hps = $this->mspk_alternatif->HapusAlternatif('alternatif',$dimana);
		if($hps>=1){
			
				redirect('spk_alternatif/alternatif');

		}

	}

	
}
	
