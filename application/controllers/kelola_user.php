<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class kelola_user extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_kelola_user');
		}
		function index()
		{
				$data['user'] = $this->m_kelola_user->select();
				$data['kode'] = $this->m_kelola_user->buat_kode();
				$this->load->view('template/header');
				$this->load->view('template/navbar');
				$this->load->view('admin/kelola_user',$data);
				$this->load->view('footer');
		}

		function tambah_user()
		{
				$this->load->view('template/header');
				$this->load->view('template/navbar');
				$this->load->view('admin/tambah_user');
				$this->load->view('footer');
		}

		function tampil_edit($id)
		{
				$where = array('id_user' => $id);
				$data['user'] = $this->m_kelola_user->edit_data($where)->result();
				$this->load->view('template/header');

				$this->load->view('admin/ubah_user',$data);
				$this->load->view('footer');
		}
		function daftar(){
	$data = array (
		'id_user' => $this->input->post('id'),
		'nama_instansi' => $this->input->post('nama_instansi'),
		'alamat' => $this->input->post('alamat'),
		'no_telp' => $this->input->post('no_telp'),
		'email' => $this->input->post('email'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'level' => "0",
		'status' => "0"
				);
				$this->m_kelola_user->insert($data);
				redirect(base_url()."dashboard?berhasil");
}

		function tambah_aksi(){
		$data = array (
			'id_user' => $this->input->post('id'),
			'nama_instansi' => $this->input->post('nama_instansi'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level'),
			'status' => "0"
					);
		$this->m_kelola_user->insert($data);
		redirect('kelola_user', 'refresh');
	}
	function ubah_status(){
	$id = $this->input->post('id');
	$data = array(
			'status' =>  "1"
			);
	$where =array('id_user' => $id);
	$this->m_kelola_user->update($data,$where);
	redirect('kelola_user','refresh');
	}
	function hapus($id){
		$where = array('id_user' => $id);
		$this->m_kelola_user->delete($where);
		redirect('kelola_user/index');
	}

	function update(){
	$id=$this->input->post('id');
	$data = array (
				'nama_instansi' => $this->input->post('nama_instansi'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'level' => $this->input->post('level')
					);
	$where =array('id_user' => $id);
	$this->m_kelola_user->update($data,$where);
	redirect('kelola_user','refresh');
}
function lupa_pass(){
	$username =$this->input->post('username');
	$email =$this->input->post('email');
	$data = array (
		'password' => $this->input->post('pass_baru')
	);
	$where =array('username' => $username, 'email'=> $email, 'status'=>"1");
	$this->m_kelola_user->update($data,$where);
	$password = $this->input->post('pass_baru');
	$status = "1";
	$cek = $this->m_login->cek_user($username, $password,$status);
	if (count($cek)==1) {
		$user_login = array('log_in' => TRUE,
		'username'=>$username);
		$this->session->set_userdata($user_login);
		redirect (base_url('hal_peneliti?lupa_pass'));
	}
	else {
		redirect(base_url()."dashboard?salah");
	}
}
}
