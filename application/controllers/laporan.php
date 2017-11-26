<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    $this->load->model('m_permintaan');
		$this->load->model('m_penyerahan');
		$this->load->model('m_kelola_user');
		$this->load->model('m_kelola_koleksi');
		$this->load->library('MyPHPMailer');
	}
	function index()
	{
    $data['laporan']=0;
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('admin/laporan', $data);
		$this->load->view('footer');
	}

	function filter()
	{
    $aw = $this->input->post('awal');
    $ak = $this->input->post('akhir');
    $newaw = DateTime::createFromFormat('m/d/Y', $aw);;
    $newak = DateTime::createFromFormat('m/d/Y', $ak);;
    $awal  = date('Y-m-d',$newaw->getTimestamp());
    $akhir  = date('Y-m-d',$newak->getTimestamp());
    $data['penyerahan'] = count($this->m_penyerahan->filter($awal, $akhir));
    $data['permintaan'] = count($this->m_permintaan->filter($awal, $akhir));
    $data['materi'] = count($this->m_kelola_koleksi->select());
    $where = array('status_materi' => "1" );
    $data['materisedia'] = count($this->m_kelola_koleksi->select($where));
    $where = array('status_materi' => "0" );
    $data['materitak'] = count($this->m_kelola_koleksi->select($where));
    $data['user'] = count($this->m_kelola_user->select());
    $where = array('status' => "1" );
    $data['usersedia'] = count($this->m_kelola_user->select($where));
    $where = array('status' => "0" );
    $data['usertak'] = count($this->m_kelola_user->select($where));
    $data['awal'] = $awal;
    $data['akhir'] = $akhir;
    $data['laporan']=1;
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('admin/laporan',$data);
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
		redirect('permintaan','refresh');
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
