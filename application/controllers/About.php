<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{

		$data = array(
			'lab1' => "NIM",
			'lab2' => "Nama",
			'lab3' => "Jurusan",
			'lab4' => "Program Studi",
			'lab5' => "Alamat",
			'lab6' => "No. Telp",
			'lab7' => "E-mail",
			'lab8' => "Hobi",
			'nim' => "1541180133",
			'nama' => "Nabilla Aqmarina Ariditya",
		 	'jurusan' => "Teknologi Informasi",
		 	'prodi' => "DIV Teknik Informatika",
		 	'alamat' => "Jln. Kesumba Dalam No.16, Malang",
		 	'notelp' => "085717176902",
		 	'email' => "nabilla.aqmarina@gmail.com",
		 	'hobi' => "Melukis",
			
		 );
		$this->load->view('about', $data);	
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
 