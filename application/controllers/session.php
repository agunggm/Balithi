<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller {
	
	function do_login()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');

		$cek = $this->login->count_user($username,$password);

		if ($cek == 1){

			$user_login = array(
						'login_in' => TRUE,
						'username' => $username
					);

			$this->session->set_userdata($user_login);redirect('dashboard', 'refresh');
			} else{
					redirect('C_login','refresh');
			}
		}
	}