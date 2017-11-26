<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class hal_peneliti extends CI_Controller {
function __construct()
		{
			parent::__construct();
			$this->load->model('m_peneliti');
			$this->load->model('m_kelola_koleksi');
			$this->load->model('m_permintaan');
			$this->load->model('m_penyerahan');
			$this->load->model('m_login');
		}
	public function index()
	{
		$session = $this->session->userdata('log_in');
		if ($session == TRUE) {
		$user_akun  = $this->m_login->ambilUser($this->session->userdata('username'));
		$data['user'] = $user_akun;
		$id = $user_akun['id_user'];
		if ($user_akun['level']==0) {
			$data = array('kode' => $this->m_permintaan->buat_kode(),
  					 'koleksi' => $this->m_kelola_koleksi->select(),
						 'rincianpermintaan' => $this->m_permintaan->rincianpermintaan($id),
  					 'riwayat' => $this->m_permintaan->riwayat($id),
						 'rincianpenyerahan' => $this->m_penyerahan->rincianpenyerahan($id),
  					 'riwayatserah' => $this->m_penyerahan->riwayat($id),
					 'serah' => $this->m_penyerahan->buat_kode(),
					 'user' => $user_akun);
			$this->load->view('hal_peneliti',$data);
		}
		else {
			redirect(base_url('hal_admin'));
		}
	 }
	 else {
		 redirect(base_url('dashboard'));
	 }
	}
}
