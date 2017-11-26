<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class lihat_koleksi extends CI_Controller {
	public function index()
	{
		$this->load->view('header2');
		$this->load->view('lihat_koleksi');
		$this->load->view('footer');

	}
}