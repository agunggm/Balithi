<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_lupa extends CI_Model {
	
	//    untuk mengcek jumlah username dan password yang sesuai
    function verifikasi($username,$email) {
        $this->db->where('username', $username);
        $this->db->where('email', $email);
        
        $query =  $this->db->get('userr');
        return $query->num_rows();
    }
    
//    untuk mengambil data hasil login
    function verifikasi_lagi($username,$email) {
        $this->db->where('username', $username);
        $this->db->where('email', $email);

        return $this->db->get('userr')->row();
    }

    function cek($username)
	{

		$where=array(
			'username'=>$username
		);
		
		$query=$this->db->get_where('userr',$where);
		$result=$query->result();
		$jml_data=0;
		$jml_data=count($result);
		
		$hasil=false;
		if ($jml_data>0)
		{
			$hasil=true;
		}
		return $hasil;
	
	}
	
	function reset()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$data=array(
			'password'=>$password
		);
		
		$where=array(
			'username'=>$username
		);
		$this->db->where($where);
		$this->db->update('userr',$data);
	}

}
