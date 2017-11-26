<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class penyerahan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_penyerahan');
		$this->load->model('m_kelola_user');
		$this->load->model('m_kelola_koleksi');
		$this->load->library('MyPHPMailer');
	}
	function index()
	{
		$data['penyerahan'] = $this->m_penyerahan->select();
		$data['kode'] = $this->m_kelola_koleksi->buat_kode();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('admin/penyerahan', $data);
		$this->load->view('footer');
	}

	function tambah_penyerahan()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('admin/tambah_penyerahan');
		$this->load->view('footer');
	}

	function tampil_edit($Id)
	{
		$where = array('Id' => $Id);
		$data['penyerahan'] = $this->m_penyerahan->edit_data($where)->result();
		$this->load->view('template/header');

		$this->load->view('admin/ubah_penyerahan',$data);
		$this->load->view('footer');
	}

	function tambah_aksi(){
		$data = array (
			'Id' => $this->input->post('Id'),
			'Tanggal' => $this->input->post('Tanggal'),
			'Pemohon' => $this->input->post('Pemohon'),
			'Status' => $this->input->post('Status'),
			'Jenis_tanaman' => $this->input->post('Jenis_Tanaman'),
		);
		$this->m_penyerahan->insert($data);
		redirect('penyerahan', 'refresh');
	}
	function batal(){
	$id = $this->input->post('id');
	$data = array(
			'status_serah' =>  "2"
			);
	$where =array('id_penyerahan' => $id);
	$this->m_penyerahan->update($data,$where);
	redirect('hal_peneliti','refresh');
	}
	function hapus($id){
		$where = array('id_penyerahan' => $id);
		$this->m_penyerahan->delete($where);
		redirect('penyerahan/index');
	}

	function ubah_status(){
		$id = $this->input->post('id');
		$id_koleksi = $this->input->post('id_koleksi');
		$genus = $this->input->post('genus');
		$spesies = $this->input->post('spesies');
		$kolektor = $this->input->post('kolektor');
		$gambar = $this->input->post('gambar');
		$data = array(
			'status_serah' =>  "1"
		);
		$mana = array(
			'id_koleksi' =>  $id_koleksi,
			'genus' =>  $genus,
			'spesies' =>  $spesies,
			'kolektor' =>  $kolektor,
			'status_materi' =>  "0",
			'gambar' =>  $gambar
		);
		$where =array('id_penyerahan' => $id);
		$this->m_penyerahan->update($data,$where);
		$this->m_kelola_koleksi->insert($mana);
		redirect('penyerahan','refresh');
	}
	function serah_materi(){
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
		$data = array (
			'id_penyerahan' => $this->input->post('id_penyerahan'),
			'tgl_serah' => $this->input->post('tgl_serah'),
			'id_user' => $this->input->post('id_user'),
			'genus' => $this->input->post('genus'),
			'spesies' => $this->input->post('spesies'),
			'kolektor' => $this->input->post('kolektor'),
			'gambar' => $gambar,
			'keterangan_serah' => $this->input->post('keterangan'),
			'status_serah' => "0"
		);
		$this->m_penyerahan->insert($data);
		redirect(base_url()."hal_peneliti?serah");
	}
}
