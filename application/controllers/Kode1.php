<?php

class Kode1 extends CI_Controller {
	
	public function index()
	{
		$this->load->view('phpview');
	}

	public function hello_pyhton()
	{
		$this->load->view('pyhtonview');
	}

	//disini method hello_cpp digunakan untuk memanggil file cppview
	public function hello_cpp()
	{
		$this->load->view('cppview');
	}

	public function hello_java()
	{
		$this->load->view('javaview');
	}

	//disini kita akan memetakan metode yang akan dipanggil nantinya
	public function _remap($var)
	{
		if (isset($var)) {
			switch (strtolower($var)) {
				case 'pyhton':
					$this->hello_pyhton();
					break;
				case 'cpp':
					$this->hello_cpp();
					break;
				case 'java':
					$this->hello_java();
					break;
				default:
					$this->index();
					break;
			}
		}
		else {
			$this->index();
		}
	}
}
