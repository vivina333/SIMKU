<?php

class testhelper extends CI_Controller {
	
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('html');
	} // Helper disini digunakan untuk membantu kita membuka atau meload file 
	  //perintah helper dipanggil di fungsi construct jadi tidak perlu dipaggil lagi di fungsi lain

	public function index()
	{
		$this->load->view('praktikum8');
	} // meload view "view_helper" 
}
