<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class permintaan extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('m_permintaan');
			$this->load->model('m_kelola_user');
			$this->load->model('m_kelola_koleksi');
			$this->load->library('MyPHPMailer');
		}
		function index()
		{
				$data['permintaan'] = $this->m_permintaan->select();
				$this->load->view('template/header');
				$this->load->view('template/navbar');
				$this->load->view('admin/permintaan', $data);
				$this->load->view('footer');
		}
		function ubah_status(){
		$id = $this->input->post('id');
		$data = array(
				'status_minta' =>  "1"
				);
		$where =array('id_permintaan' => $id);
		$this->m_permintaan->update($data,$where);
		redirect('permintaan','refresh');
		}
		function batal(){
		$id = $this->input->post('id');
		$data = array(
				'status_minta' =>  "2"
				);
		$where =array('id_permintaan' => $id);
		$this->m_permintaan->update($data,$where);
		redirect('hal_peneliti','refresh');
		}
		function tambah_permintaan()
		{
				$this->load->view('template/header');
				$this->load->view('template/navbar');
				$this->load->view('admin/tambah_permintaan');
				$this->load->view('footer');
		}

		function tampil_edit($id)
		{
				$where = array('id' => $id);
				$data['permintaan'] = $this->m_permintaan->edit_data($where)->result();
				$this->load->view('template/header');

				$this->load->view('admin/ubah_permintaan',$data);
				$this->load->view('footer');
		}

		function tambah_aksi(){
		$data = array (
						'id' => $this->input->post('id'),
						'tanggal' => $this->input->post('tanggal'),
						'nama_instansi' => $this->input->post('nama_instansi'),
						'alamat' => $this->input->post('alamat'),
						'no_telp' => $this->input->post('no_telp'),
						'email' => $this->input->post('email'),
						'genus' => $this->input->post('genus'),
						'spesies' => $this->input->post('spesies'),
						'keterangan' => $this->input->post('keterangan'),
						'status' => $this->input->post('status'),
					);
		$this->m_permintaan->insert($data);
		redirect('permintaan', 'refresh');
	}
	function minta_materi(){
		$data = array (
						'id_permintaan' => $this->input->post('id_permintaan'),
						'tanggal' => $this->input->post('tanggal'),
						'id_user' => $this->input->post('id_user'),
						'id_koleksi' => $this->input->post('id_koleksi'),
						'keterangan' => $this->input->post('keterangan'),
						'status_minta' => $this->input->post('status_minta'),
					);
		$this->m_permintaan->insert($data);
		redirect(base_url()."hal_peneliti?berhasil");
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_permintaan->delete($where);
		redirect('permintaan/index');
	}

	function update(){
	$id=$this->input->post('id');
	$status=$this->input->post('status');
		$data = array (
						'id' => $this->input->post('id'),
						'tanggal' => $this->input->post('tanggal'),
						'nama_instansi' => $this->input->post('nama_instansi'),
						'alamat' => $this->input->post('alamat'),
						'no_telp' => $this->input->post('no_telp'),
						'email' => $this->input->post('email'),
						'genus' => $this->input->post('genus'),
						'spesies' => $this->input->post('spesies'),
						'keterangan' => $this->input->post('keterangan'),
						'status' => $this->input->post('status'));

	$where =array('id' => $id);

 	if ($status=='setuju') {
 		$data2 = array (
						'id' => $this->input->post('id'),
						'tanggal' => date('y/m/d'),
						'nama_instansi' => $this->input->post('nama_instansi'),
						'alamat' => $this->input->post('alamat'),
						'no_telp' => $this->input->post('no_telp'),
						'email' => $this->input->post('email'),
						'genus' => $this->input->post('genus'),
						'spesies' => $this->input->post('spesies'),
						'keterangan' => $this->input->post('keterangan'),
						'status' => $this->input->post('status'));
 		$this->m_penyerahan->insert($data2);
 	}elseif ($status=='tidak') {
 		$this->m_penyerahan->delete($where);
 	}
 		$this->m_permintaan->update($data,$where);
	redirect('permintaan','refresh');

}
function sentemail($email){


	 date_default_timezone_set('Etc/UTC');
 //Membuat instance PHPMailer baru
 $mail = new PHPMailer;
 //Memberi tahu PHPMailer untuk menggunakan SMTP
 $mail->isSMTP();
 //Mengaktifkan SMTP debugging
 // 0 = off (digunakan untuk production)
 // 1 = pesan client
 // 2 = pesan client dan server
 $mail->SMTPDebug = 2;
 //HTML-friendly debug output
 $mail->Debugoutput = 'html';
 //hostname dari mail server
 $mail->Host = 'smtp.gmail.com';
 // gunakan
 // $mail->Host = gethostbyname('smtp.gmail.com');
 // jika jaringan Anda tidak mendukung SMTP melalui IPv6
 //Atur SMTP port - 587 untuk dikonfirmasi TLS, a.k.a. RFC4409 SMTP submission
 $mail->Port = 220;
 //Set sistem enkripsi untuk menggunakan - ssl (deprecated) atau tls
 $mail->SMTPSecure = 'tls';
 //SMTP authentication
 $mail->SMTPAuth = true;
 //Username yang digunakan untuk SMTP authentication - gunakan email gmail
 $mail->Username = "alfanwira@gmail.com";
 //Password yang digunakan untuk SMTP authentication
 $mail->Password = "passwordanda";
 //Email pengirim
 $mail->setFrom('alfanwira@gmail.com', 'dzikri');
 //Alamat email alternatif balasan
 $to  = $this->input->get('email');
 $mail->addReplyTo("'".$to."'");
 //Email tujuan
 $mail->addAddress("'".$to."'");
 //Subject email
 $mail->Subject = 'PHPMailer GMail SMTP test';
 //Membaca isi pesan HTML dari file eksternal, mengkonversi gambar yang di embed,
 //Mengubah HTML menjadi basic plain-text
 $mail->Body = 'Hello, this is my message.';
 //Replace plain text body dengan cara manual
 $mail->AltBody = 'This is a plain-text message body';
 //Attach file gambar
 //mengirim pesan, mengecek error
 if (!$mail->send()) {
redirect(base_url()."pendaftaran?berhasil");
 } else {
 redirect(base_url()."pendaftaran?error");
 }
}
}
