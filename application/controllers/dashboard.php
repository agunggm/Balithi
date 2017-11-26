<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

 public function index()
  {
    $this->load->model('m_login');
    $session = $this->session->userdata('log_in');
    if ($session == TRUE) {
    $user_akun  = $this->m_login->ambilUser($this->session->userdata('username'));
    $data['user'] = $user_akun;
    if ($user_akun['level']==0) {
      redirect(base_url('hal_peneliti'));
    }
    else {
      redirect(base_url('hal_admin'));
    }
   }
   else {
     $this->load->model('m_kelola_user');
     $data = array('kode' => $this->m_kelola_user->buat_kode() );
     $this->load->view('halaman_depan',$data);
   }
  }
  function login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $cek = $this->m_login->cek_user($username, $password);
    if (count($cek)==1) {
      $user_login = array('log_in' => TRUE,
                           'username'=>$username);
     $this->session->set_userdata($user_login);
     redirect (base_url('hal_peneliti'));
    }
    else {
      redirect(base_url()."dashboard?gagal");
    }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('dashboard'));
  }

}
