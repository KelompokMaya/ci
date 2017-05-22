<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk_alternatif extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mspk_alternatif');     
    }  

	public function hapus_alternatif($id_alternatif)
	{
		$dimana = array('id_alternatif'=> $id_alternatif);
		$hps = $this->mspk_alternatif->HapusAlternatif('alternatif',$dimana);
		if($hps>=1){
			echo "<script>
				alert('data berhasil dihapus');
				</script>";
				redirect('Spk/alternatif');

		}

	}

	
}
	
