<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class c_koleksi extends CI_Controller {

		public function __construct() {
		parent::__construct();
		$this->load->model('m_koleksi','koleksi');
		if ($this->session->userdata('username')=="") {
			redirect('halaman_utama');
		}
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('v_koleksi');
	}

	public function tampil_koleksi()
	{
		$list = $this->koleksi->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $koleksi) {
			$no++;
			$row = array();
			$row[] = $koleksi->id;
			$row[] = $koleksi->genus;
			$row[] = $koleksi->spesies;
			$row[] = $koleksi->kolektor;
			$row[] = $koleksi->gambar;
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_koleksi('."'".$koleksi->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="hapus_koleksi('."'".$koleksi->id."'".')"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->koleksi->count_all(),
						"recordsFiltered" => $this->koleksi->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output); // json_encode : untuk merubah array ke bentuk json.
	}

	public function edit_koleksi($id)
	{
		$data = $this->koleksi->get_by_id($id);
		echo json_encode($data);
	}

	public function tambah_koleksi()
	{
		     $data = array(
	                			'id' => $this->input->post('id'),
								'genus' => $this->input->post('genus'),
								'spesies' => $this->input->post('spesies'), 
								'kolektor' => $this->input->post('kolektor'));

				$insert = $this->koleksi->save($data);
				echo json_encode(array("status" => TRUE));
	}
	public function update_koleksi()
	{
		 $data = array(
	                			'id' => $this->input->post('id'),
								'genus' => $this->input->post('genus'),
								'spesies' => $this->input->post('spesies'), 
								'kolektor' => $this->input->post('kolektor'));
		$this->koleksi->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function hapus_koleksi($id)
	{
		$this->koleksi->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
