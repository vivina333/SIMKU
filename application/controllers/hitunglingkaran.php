<?php

class hitunglingkaran extends CI_Controller {
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('lingkaran');
	} /* Library disini digunakan untuk membantu kita membuka atau meload fungsi atau class
	   	 perintah library dipanggil di fungsi construct jadi tidak perlu dipaggil lagi di fungsi lain
	     dengan menggunakan library fungsi atau class akan lebih terkoordinir
	  	 disini kita memanggil fungsi atau class lingkaran di library
	  */


	public function index (){
		
		/* meload class lingkaran dalam library dengan method yang dipanggil adalah keliling
		   dan mengirim atau mengisi parameternya dengan 21 (parameter = jari-jari)
		*/
		$this->lingkaran->keliling('21');
		echo "<hr/>";
		
		/* meload class lingkaran dalam library dengan method yang dipanggil adalah luas
		   dan mengirim atau mengisi parameternya dengan 21 (parameter = jari-jari)
		*/
		$this->lingkaran->luas('14');
	}
}
