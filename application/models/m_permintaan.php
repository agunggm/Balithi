<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class m_permintaan extends CI_Model{

		function __construct()
		{
				parent::__construct();
				$this->table = "permintaan_materi";
		}

		function select ($where = null)
		{
					$sql="SELECT * FROM permintaan_materi INNER JOIN pengguna INNER JOIN koleksi ON(permintaan_materi.id_koleksi=koleksi.id_koleksi AND permintaan_materi.id_user=pengguna.id_user)";
					$query = $this->db->query($sql);
					return $query->result_array();
		}
		function riwayat ($id)
		{
					$sql="SELECT * FROM permintaan_materi INNER JOIN pengguna INNER JOIN koleksi ON(permintaan_materi.id_koleksi=koleksi.id_koleksi AND permintaan_materi.id_user=pengguna.id_user) WHERE permintaan_materi.id_user ='".$id."' AND status_minta !='0'";
					$query = $this->db->query($sql);
					return $query->result_array();
		}
		function rincianpermintaan ($id)
		{
					$sql="SELECT * FROM permintaan_materi INNER JOIN pengguna INNER JOIN koleksi ON(permintaan_materi.id_koleksi=koleksi.id_koleksi AND permintaan_materi.id_user=pengguna.id_user) WHERE permintaan_materi.id_user ='".$id."' AND status_minta ='0'";
					$query = $this->db->query($sql);
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
		$this->db->select('RIGHT(permintaan_materi.id_permintaan,6) as kode', FALSE);
		$this->db->order_by('id_permintaan','DESC');
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
		$kodejadi = $kodemax;
		return $kodejadi;

	}
	function filter($awal, $akhir){
		$sql = "SELECT * FROM permintaan_materi WHERE tanggal >= '".$awal."' AND tanggal <= '".$akhir."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	public function validasi($data){

	$query = $this->db->get_where($this->table, $data);
			return $query;
	}
}
