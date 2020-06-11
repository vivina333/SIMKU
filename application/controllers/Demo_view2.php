<?php

class Demo_view2 extends CI_Controller {
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
	} // Helper disini digunakan untuk membantu kita membuka atau meload file css di demoview
	  //perintah helper dipanggil di fungsi construct jadi tidak perlu dipaggil lagi di fungsi lain

	public function index()
	{
		$this->load->view('demoview');
	} // meload view "demoview" 
}
