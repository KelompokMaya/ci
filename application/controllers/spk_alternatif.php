<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk_alternatif extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
        $this->load->helper('url');
        $this->load->model('mspk_alternatif');     
    }
    public function index()
	{
		$comp = array(
		"header" =>$this->load->view("header",array(),true),);
		$this->load->view("index",$comp);
	}
    public function alternatif()
	{
		

		$data=$this->mspk->GetAlternatif();
		$this->load->view('alternatif',array('data' =>$data)); 
 
	}
  
    public function tambah_alternatif()
	{
		$nama_alternatif		= $this->input->post('nama_alternatif');
		$nilai_kriteria1		= $this->input->post('nilai_kriteria1');
		$nilai_kriteria2		= $this->input->post('nilai_kriteria2');
		$nilai_kriteria3		= $this->input->post('nilai_kriteria3');
		$nilai_kriteria4		= $this->input->post('nilai_kriteria4');
		$nilai_kriteria5		= $this->input->post('nilai_kriteria5');
		$nilai_kriteria6		= $this->input->post('nilai_kriteria6');

		
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
			redirect('spk_alternatif/alternatif');

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


		$edt = $this->mspk_alternatif->EditAlternatif('alternatif',$data_edit,$dimana);

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
	public function ranking()
	{
		$this->db->empty_table('ranking');
		$data=$this->mspk_alternatif->GetData();
		$jum_kol1 = 0;$jum_kol2 = 0;$jum_kol3 = 0;$jum_kol4 = 0;$jum_kol5 = 0;$jum_kol6 = 0;
		foreach($data as $row){

			 $jum_kol1 += str_replace(",", "", $row['nilai_kriteria1']);
			 $jum_kol2 += str_replace(",", "", $row['nilai_kriteria2']);
			 $jum_kol3 += str_replace(",", "", $row['nilai_kriteria3']);
			 $jum_kol4 += str_replace(",", "", $row['nilai_kriteria4']);
			 $jum_kol5 += str_replace(",", "", $row['nilai_kriteria5']);
			 $jum_kol6 += str_replace(",", "", $row['nilai_kriteria6']);
			
		}

		//inisialisasi bobot kriteria
		$getbobot=$this->mspk->GetKonsisten();
		$i=1;
		foreach ($getbobot as $row) {
			
				$bobot[$i]=$row['bobot'];
				
				$i++;	
			}

		//bobot dari 6 kriteria pada orang pertama 
		$i=1;
		foreach($data as $row){

			$bobotalternatif1[$i]=$row['nilai_kriteria1']/$jum_kol1;
			$bobotalternatif2[$i]=$row['nilai_kriteria2']/$jum_kol2;
			$bobotalternatif3[$i]=$row['nilai_kriteria3']/$jum_kol3;
			$bobotalternatif4[$i]=$row['nilai_kriteria4']/$jum_kol4;
			$bobotalternatif5[$i]=$row['nilai_kriteria5']/$jum_kol5;
			$bobotalternatif6[$i]=$row['nilai_kriteria6']/$jum_kol6;
			

			//echo $bobotalternatif1[$i],'<br>'; echo $bobotalternatif2[$i],'<br>'; echo $bobotalternatif3[$i],'<br>';echo $bobotalternatif4[$i],'<br>';echo $bobotalternatif5[$i],'<br>';echo $bobotalternatif6[$i],'<br>','<br>';

			$i++;
		}


		//menentukan hasil kal matrik
		$i=1;
		foreach ($data as $row) {
			$nama_alternatif[$i]=$row['nama_alternatif'];
		
			//perhitungan matrix 
			$hasil[$i]=($bobotalternatif1[$i]*$bobot[1])+($bobotalternatif2[$i]*$bobot[2])+($bobotalternatif3[$i]*$bobot[3])+($bobotalternatif4[$i]*$bobot[4])+($bobotalternatif5[$i]*$bobot[5])+($bobotalternatif6[$i]*$bobot[6]);	
			//echo $hasil[$i],'<br>';
			$proses_kedatabase= array( 'nama_alternatif' => $nama_alternatif[$i],
									    'nilai' => $hasil[$i]
										);
			$this->db->insert('ranking',$proses_kedatabase);
			$i++;
			
		}	
		//menampilkan ranking
				$data=$this->mspk_alternatif->GetRanking();
		$this->load->view('ranking',array('data' =>$data)); 
		
	}
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

	
	
}
	
