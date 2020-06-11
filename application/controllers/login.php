<?php
class login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index(){
		$this->load->view('crud/login');
	}

	public function cek_log(){	
		$username = $this->input->post('txt_user');
		$password = $this->input->post('txt_pass');
		$cek = $this->Mahasiswa_model->login($username,$password,'tb_login')->result();
		if ($cek != FALSE) {
			foreach ($cek as $row) {
				$level = $row->username;
				
			}
			$this->session->set_userdata('session_user', $level);
			//$this->session->set_userdata('session_user', $grup);
			redirect('Mahasiswa');
		}else{
			$this->load->view('crud/login');
		}
	}
	function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
  
}