<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class m_kelola_koleksi extends CI_Model{

	var $table = 'koleksi';

		function __construct()
		{
				parent::__construct();
				$this->table = "koleksi";
		}

		function select ($where = null)
		{
					if($where !=null) {
							$this->db->where($where);
					}

					$query = $this->db->get($this->table);

					return $query->result_array();
		}

		function insert ($data)
		{
				$this->db->insert($this->table, $data);
		}

		function edit_data($where){
		return $this->db->get_where($this->table,$where);
		}

		function update($data, $where)
		{
				$this->db->where($where);
				$this->db->update($this->table, $data);
		}

		function delete($where)
		{
				$this->db->where($where);
				$this->db->delete($this->table);
		}
		function buat_kode()
	{
		$this->db->select('RIGHT(koleksi.id_koleksi,6) as kode', FALSE);
		$this->db->order_by('id_koleksi','DESC');
		$this->db->limit(1);
		$query = $this->db->get($this->table);
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
		//jika kode ternyata sudah ada.
		$data = $query->row();
		$kode = intval($data->kode) + 1;
		}else{
		//jika kode belum ada
		$kode = 1;
		}
		$kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT);
		$kodejadi = "KSI".$kodemax;
		return $kodejadi;
	}
}
