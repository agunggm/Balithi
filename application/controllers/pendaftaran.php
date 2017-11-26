<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class pendaftaran extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_peneliti');
			$this->load->library('MyPHPMailer');

		}
		function index()
		{
				$data = array('kode' => $this->m_peneliti->buat_kode(),
								'daftar' => $this->m_peneliti->select() );

				$this->load->view('template/header');
				$this->load->view('template/navbar');
				$this->load->view('admin/pendaftaran_view',$data);
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
				$where = array('id' => $id);
				$data['user'] = $this->m_peneliti->edit_data($where)->result();
				$this->load->view('template/header');

				$this->load->view('admin/ubah_pendaftaran',$data);
				$this->load->view('footer');
		}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_peneliti->delete($where);
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
						'status' => $this->input->post('status')
					);

	$where =array('id' => $id);

	$this->m_peneliti->update($data,$where);
	redirect('pendaftaran','refresh');
}
	function emailq($email){

	    $from = "alfanwra@gmail.com";
	    $to  = $this->input->get('email');
	    $subject = "Checking PHP mail";
	    $message = "PHP mail berjalan dengan baik";
	    $headers = "From:" . $from;
	    mail($to,$subject,$message, $headers);
	  	redirect(base_url()."pendaftaran?berhasil");
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
