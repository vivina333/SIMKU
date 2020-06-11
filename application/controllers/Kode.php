<?php

class Kode extends CI_Controller {
	
	// dalam method hello disini kita melewatkan segment url kedalamnya
	public function hello($var)
	{
		if (isset($var)) {
			switch (strtolower($var)) {
				case 'php':
					$this->load->view('phpview');
					//url untuk memanggil file phpview
					break;
				case 'pyhton':
					$this->load->view('pyhtonview');
					break;
				case 'cpp':
					$this->load->view('cppview');
					break;
				case 'java':
					$this->load->view('javaview');
					break;
				default:
					echo "Input URL Salah";
					break;
			}
		}
		else {
			echo "Input URL Salah";
		}
	}
}
