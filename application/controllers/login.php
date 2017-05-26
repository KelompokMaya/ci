<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//load Login_model.php	
		$this->load->model('m_login');
		//check the username is already set up or not
		if ($this->session->userdata('username')) {
			//if username is already set up, then check the level of username is admin or member
			if($this->session->userdata('level') == '1'){
				redirect('spk/index');
			}elseif($this->session->userdata('level') == '2'){
				redirect('spk_alternatif/index');
			}
		}
	}

	public function index(){
		$data = array('error' => ''
					);
		$this->load->view('v_login', $data);
	}

	//function for processing login form
	public function login_process(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
					//calling chech_user() function in Login_model.php
		$result = $this->m_login->check_user($username, $password); 

		if($result->num_rows() > 0){
			foreach ($result->result() as $row) {
				
				$username = $row->username;
				$level = $row->level;
			}

			$newdata = array(
			    
			        'username' => $username,
			        'level' => $level,
			        'logged_in' => TRUE
			);
			
			//set up session data
			$this->session->set_userdata($newdata);
			if($this->session->userdata('level')=='1') {
				redirect('spk/index');
			}elseif ($this->session->userdata('level')=='2') {
				redirect('spk_alternatif/index');
			}
		}
		else{
			echo "<script>
				alert('username dan password salah!!');
				window.location.href='index';
				</script>";

		}
	}
	
	
}