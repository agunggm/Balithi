
<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class halaman_utama extends CI_Controller {

        function __construct()
        {
        		parent ::__construct();
                $this->load->model('m_login');
        }
        public function index(){

        	$this->load->view('form-login');
        }
        function login()
        {
        	$data = array(
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'));
        $hasil = $this->m_login->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['username'] = $sess->username;
                $sess_data['password'] = $sess->password;
                $sess_data['level'] = $sess->level;
                $sess_data['status'] = $sess->status;
                $this->session->set_userdata($sess_data);
            }
                    
                if($this->session->userdata('level')=='admin'){
                    redirect('hal_admin');
                }
                elseif ($this->session->userdata('level')=='peneliti') {
                    redirect('hal_peneliti');
                }
        }   
                else {
                        redirect('halaman_utama');
                    }  
        
        }

        public function logout()
        {
        	if ($this->session->has_userdata('username')) {
        		$this->session->sess_destroy();
        		redirect(base_url());
        	}
        	
        }
}