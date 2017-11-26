<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	 function __construct()
        {
        		parent ::__construct();
                $this->load->model('m_login');
        }
 
 public function index()
  {
    $this->load->view('form-login');
  }
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_user($where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect("hal_admin");
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}
