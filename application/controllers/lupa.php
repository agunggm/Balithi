<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class lupa extends CI_Controller {

	public function index()
	{
	
		$this->load->view('lupa');
	}


	public function verifikasi_email() {

        $this->load->model('m_lupa');
        $verifikasi = $this->m_lupa->verifikasi($this->input->post('username'),$this->input->post('email'));
 
        if ($verifikasi == 1) {
//          ambil detail data
             $row = $this->m_lupa->verifikasi_lagi($this->input->post('username'),$this->input->post('email'),$this->input->post('no_telp'));
 
//          daftarkan session
            $data = array(
                'username' => $row->username,
                'email' => $row ->email
               
            );
            $this->session->set_userdata($data);
 
//            redirect ke halaman sukses
            redirect('lupa/ganti_password','refresh');
        } 
        else {
//            tampilkan pesan error
        	    redirect(base_url()."lupa/?error");
        }
    }

    public function ganti_password(){
		if ($this->input->post('reset'))
		{
			$this->load->model('m_lupa');
			
			if ($this->m_lupa->cek( $this->input->post('username')))
			{
				$this->m_lupa->reset();
				redirect(base_url()."lupa/ganti_password?berhasil");
			}else
			{
				redirect(base_url()."lupa/ganti_password?error");
			}
		}else
		{
			$this->load->view('ganti_password');
		}
	}

}