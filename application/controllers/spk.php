<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk extends CI_Controller {


	public function index()
	{
		$comp = array(
			"header" =>$this->load->view("header",array(),true),);
		$this->load->view("index",$comp);
	}

	

	public function kriteria()
	{
		

		$data=$this->mspk->GetKriteria();
		$this->load->view('kriteria',array('data' =>$data)); 
 
	}
	
	/*public function lihat_edit_kriteria($id_kriteria){
		$data_k = $this->mspk->GetKriteria(" where id_kriteria = '$id_kriteria'");
		
		$data = array(
			'id_kriteria'	=> $data_k[0]['id_kriteria'],
			'nama_kriteria' => $data_k[0]['nama_kriteria'],

			);

		$this->load->view('edit_kriteria',$data);
	}*/
	public function edit_kriteria()
	{


		$id_kriteria		= $_POST['id_kriteria'];
		$perbandingan_ket2	= $_POST['perbandingan_ket2'];
		$perbandingan_ket3	= $_POST['perbandingan_ket3'];
		$perbandingan_ket4	= $_POST['perbandingan_ket4'];
		$perbandingan_ket5	= $_POST['perbandingan_ket5'];
		$perbandingan_ket6	= $_POST['perbandingan_ket6'];

		if ($id_kriteria=='1') {
		$data_edit		= array(
						  'perbandingan_ket2' => $perbandingan_ket2,
						  'perbandingan_ket3' => $perbandingan_ket3,
						  'perbandingan_ket4' => $perbandingan_ket4,
						  'perbandingan_ket5' => $perbandingan_ket5,
						  'perbandingan_ket6' => $perbandingan_ket6
						  );
		$where=2;
		while ($where<=6) {
			if ($where=='2') {
				$perbandingan_ket=$perbandingan_ket2;
			}
			if ($where=='3') {
				$perbandingan_ket=$perbandingan_ket3;
			}
			if ($where=='4') {
				$perbandingan_ket=$perbandingan_ket4;
			}
			if ($where=='5') {
				$perbandingan_ket=$perbandingan_ket5;
			}
			if ($where=='6') {
				$perbandingan_ket=$perbandingan_ket6;
			}
			
		$perbandingan= 1/$perbandingan_ket;
		$hasil_perbandingan= array('perbandingan_ket1' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->mspk->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}
		if ($id_kriteria=='2') {
		$data_edit		= array(
						  
						  'perbandingan_ket3' => $perbandingan_ket3,
						  'perbandingan_ket4' => $perbandingan_ket4,
						  'perbandingan_ket5' => $perbandingan_ket5,
						  'perbandingan_ket6' => $perbandingan_ket6
						  );
		$where=3;
		while ($where<=6) {
			
			if ($where=='3') {
				$perbandingan_ket=$perbandingan_ket3;
			}
			if ($where=='4') {
				$perbandingan_ket=$perbandingan_ket4;
			}
			if ($where=='5') {
				$perbandingan_ket=$perbandingan_ket5;
			}
			if ($where=='6') {
				$perbandingan_ket=$perbandingan_ket6;
			}
			
		$perbandingan= 1/$perbandingan_ket;
		$hasil_perbandingan= array('perbandingan_ket2' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->mspk->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}
		if ($id_kriteria=='3') {
		$data_edit		= array(
						  'perbandingan_ket4' => $perbandingan_ket4,
						  'perbandingan_ket5' => $perbandingan_ket5,
						  'perbandingan_ket6' => $perbandingan_ket6
						  );
		$where=4;
		while ($where<=6) {
			
			if ($where=='4') {
				$perbandingan_ket=$perbandingan_ket4;
			}
			if ($where=='5') {
				$perbandingan_ket=$perbandingan_ket5;
			}
			if ($where=='6') {
				$perbandingan_ket=$perbandingan_ket6;
			}
			
		$perbandingan= 1/$perbandingan_ket;
		$hasil_perbandingan= array('perbandingan_ket3' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->mspk->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}
		if ($id_kriteria=='4') {
		$data_edit		= array(	  
						  'perbandingan_ket5' => $perbandingan_ket5,
						  'perbandingan_ket6' => $perbandingan_ket6
						  );
		$where=5;
		while ($where<=6) {
			
			if ($where=='5') {
				$perbandingan_ket=$perbandingan_ket5;
			}
			if ($where=='6') {
				$perbandingan_ket=$perbandingan_ket6;
			}
			
		$perbandingan= 1/$perbandingan_ket;
		$hasil_perbandingan= array('perbandingan_ket4' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->mspk->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}
		if ($id_kriteria=='5') {
		$data_edit		= array(		  
						  'perbandingan_ket6' => $perbandingan_ket6
						  );
		$where=6;
		while ($where<=6) {
			
			if ($where=='6') {
				$perbandingan_ket=$perbandingan_ket6;
			}
			
		$perbandingan= 1/$perbandingan_ket;
		$hasil_perbandingan= array('perbandingan_ket5' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->mspk->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}


		$dimana 		= array( 'id_kriteria' => $id_kriteria);


		$edt = $this->mspk->EditKriteria('bobotkriteria',$data_edit,$dimana);

		if($edt>=1){
			echo "<script>
				alert('data berhasil ditambahkan');
				</script>";
				redirect('spk/kriteria');
		}
		else{
			echo "<script>
				alert('data gagal ditambahkan');
				</script>";
		}

		
	}

	public function normalisasi_kriteria()
	{
			
			$data=$this->mspk->GetKriteria();
			$jum_kol1 = 0;$jum_kol2 = 0;$jum_kol3 = 0;$jum_kol4 = 0;$jum_kol5 = 0;$jum_kol6 = 0;
			foreach($data as $row){
			 $jum_kol1 += str_replace(",", "", $row['perbandingan_ket1']);
			 $jum_kol2 += str_replace(",", "", $row['perbandingan_ket2']);
			 $jum_kol3 += str_replace(",", "", $row['perbandingan_ket3']);
			 $jum_kol4 += str_replace(",", "", $row['perbandingan_ket4']);
			 $jum_kol5 += str_replace(",", "", $row['perbandingan_ket5']);
			 $jum_kol6 += str_replace(",", "", $row['perbandingan_ket6']);

			}
			$where=1;


			foreach($data as $row){
			$hasil_bagi1=$row['perbandingan_ket1']/$jum_kol1;
			$hasil_bagi2=$row['perbandingan_ket2']/$jum_kol2;
			$hasil_bagi3=$row['perbandingan_ket3']/$jum_kol3;
			$hasil_bagi4=$row['perbandingan_ket4']/$jum_kol4;
			$hasil_bagi5=$row['perbandingan_ket5']/$jum_kol5;
			$hasil_bagi6=$row['perbandingan_ket6']/$jum_kol6;

			$bbot=($hasil_bagi1+$hasil_bagi2+$hasil_bagi3+$hasil_bagi4+$hasil_bagi5+$hasil_bagi6)/6;
			$hasil_perbandingan= array( 'n_perbandingan_ket1' => $hasil_bagi1,
										'n_perbandingan_ket2' => $hasil_bagi2,
										'n_perbandingan_ket3' => $hasil_bagi3,
										'n_perbandingan_ket4' => $hasil_bagi4,
										'n_perbandingan_ket5' => $hasil_bagi5,
										'n_perbandingan_ket6' => $hasil_bagi6,
										'bobot' => $bbot);
			$where1 		= array( 'id_kriteria' => $where);
			$this->mspk->EditKriteria('normalisasi_kriteria',$hasil_perbandingan,$where1);
			$where++;



			
		}

		//mengecek konsisten
		$data=$this->mspk->GetKonsisten();
		$i=1;
		foreach ($data as $row) {
			
				$bobot[$i]=$row['bobot'];
				
				$i++;	
			}

		$i=1;
		foreach ($data as $row) {
		
		$kali_matrik[$i]=($row['perbandingan_ket1']*$bobot[1])+($row['perbandingan_ket2']*$bobot[2])+($row['perbandingan_ket3']*$bobot[3])+($row['perbandingan_ket4']*$bobot[4])+($row['perbandingan_ket5']*$bobot[5])+($row['perbandingan_ket6']*$bobot[6]);	
			//echo $kali_matrik[$i],'<br>';
			$i++;
		}	
		
		


		

		$konsisten=($kali_matrik[1]/$bobot[1]+$kali_matrik[2]/$bobot[2]+$kali_matrik[3]/$bobot[3]+$kali_matrik[4]/$bobot[4]+$kali_matrik[5]/$bobot[5]+$kali_matrik[6]/$bobot[6])/6;
		//echo $konsisten,'<br>';


		$ci=($konsisten-6)/5;
		$data['$konsisten']=$ci/1.24;
		


		$data['$normalisasi']=$this->mspk->GetNormalisasi();
		$this->load->view('normalisasi',array('data' =>$data)); 
			
	}
	
		

		

	

	

}
