<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function jurusan()
	{
		echo 'D3 SISTEM INFORMASI';
	}

	public function lain()
	{
		echo 'METHOD DALAM KELAS LAIN (Mahasiswa)';
	}

	public function index()
	{
		$this->load->view('mahasiswa/v_index');
	}
}