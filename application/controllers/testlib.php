<?php

class testlib extends CI_Controller {
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('table');
		$this->load->model('Mahasiswa_model');
	} // Library disini digunakan untuk membantu kita membuka atau meload fungsi atau class
	  // perintah library dipanggil di fungsi construct jadi tidak perlu dipaggil lagi di fungsi lain
	  // dengan menggunakan library fungsi atau class akan lebih terkoordinir


	public function index (){
		
		//memanggil data dari model "Mahasiswa_model" dan menyimpannya di variabel data
		//mengambil data dari "get_data"
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		
		//meload view "view_mahasiswa" dan mengirim variabel data ke "view_mahasiswa"
		$this->load->view('view_testlib',$data);
	}
}
