<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class kelola_koleksi extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_kelola_koleksi');
		}
		function index()
		{
				$data['kode'] = $this->m_kelola_koleksi->buat_kode();
				$data['koleksi'] = $this->m_kelola_koleksi->select();
				$this->load->view('template/header');
				$this->load->view('template/navbar');
				$this->load->view('admin/v_koleksi', $data);
				$this->load->view('footer');
		}

		function tambah_koleksi()
		{
				$data['kode'] = $this->m_kelola_koleksi->buat_kode();
				$this->load->helper('url');
				$this->load->view('template/header');
				$this->load->view('template/navbar');
				$this->load->view('admin/tambah_koleksi',$data);
				$this->load->view('footer');
		}

		function tampil_edit($id)
		{
				$where = array('id_koleksi' => $id);
				$data['koleksi'] = $this->m_kelola_koleksi->edit_data($where)->result();
				$this->load->helper('url');
				$this->load->view('template/header');
				$this->load->view('admin/ubah_koleksi',$data);
				$this->load->view('footer');
		}

	function tambah_aksi(){
		$id_koleksi = $this->input->post('id_koleksi');
		$genus = $this->input->post('genus');
		$spesies = $this->input->post('spesies');
		$kolektor = $this->input->post('kolektor');
		$nmfile = "file_".time();
		$config ['upload_path'] = './assets/img/';
		$config ['allowed_types'] = 'jpg|png|jpeg|bmp';
		$config ['max_size'] = '5000';
		$config ['file_name'] = $nmfile;
		$this->upload->initialize($config);
		if ($_FILES['gambar']['name']) {
			if($this->upload->do_upload('gambar')) {
				$gbr = $this->upload->data();
			}
			else{
				print_r($this->upload->display_errors());
			}
		}
		$gambar = $gbr['file_name'];
		$data = array(
			'id_koleksi' =>  $id_koleksi,
			'genus' => $genus,
			'spesies' => $spesies,
			'kolektor' => $kolektor,
			'status_materi' => "0",
			'gambar' => $gambar
			);
		$this->m_kelola_koleksi->insert($data);
		redirect('kelola_koleksi', 'refresh');
	}


	function hapus($id){
		$where = array('id_koleksi' => $id);
		$this->m_kelola_koleksi->delete($where);
		redirect('kelola_koleksi/index');
	}
	function ubah_status(){
	$id = $this->input->post('id');
	$status = $this->input->post('status');
	$data = array(
			'status_materi' =>  $status
			);
	$where =array('id_koleksi' => $id);
	$this->m_kelola_koleksi->update($data,$where);
	redirect('kelola_koleksi','refresh');
}
	function update(){
	$id = $this->input->post('id');
		$genus = $this->input->post('genus');
		$spesies = $this->input->post('spesies');
		$kolektor = $this->input->post('kolektor');
		$nmfile = "file_".time();
		$config ['upload_path'] = './assets/img/';
		$config ['allowed_types'] = 'jpg|png|jpeg|bmp';
		$config ['max_size'] = '5000';
		$config ['file_name'] = $nmfile;
		$this->upload->initialize($config);
		if ($_FILES['gambar']['name']) {
			if($this->upload->do_upload('gambar')) {
				$gbr = $this->upload->data();
			}
			else{
				print_r($this->upload->display_errors());
			}
		}
		$gambar = $gbr['file_name'];


		$data = array(
			'id_koleksi' =>  $id,
			'genus' => $genus,
			'spesies' => $spesies,
			'kolektor' => $kolektor,
			'gambar' => $gambar
			);

	$where =array('id_koleksi' => $id);

	$this->m_kelola_koleksi->update($data,$where);
	redirect('kelola_koleksi','refresh');
}
}
