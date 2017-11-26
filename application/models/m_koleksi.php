<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_koleksi extends CI_Model {

	var $table = 'koleksi';
	var $column_order = array('id_koleksi','genus','spesies','kolektor','gambar',null); //set column field database for datatable orderable
	var $column_search = array('id_koleksi','genus','spesies','kolektor','gambar'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id_koleksi' => 'desc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{

		$this->db->from($this->table);

		$i = 0;

		foreach ($this->column_search as $item) // loop column
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{

				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->

			($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_koleksi',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_koleksi', $id);
		$this->db->delete($this->table);
	}

	function select($where=null)
	{
		if ($where !=null) {
			$this->db->where($where);
		}
		$query=$this->db->get($this->table);
		return $query->result_array();

	}

	 function select_perlengkapan($kode){
        $this->db->from($this->table);
		$this->db->where('id_koleksi',$kode);
		    $query = $this->db->get();

    if($query->num_rows() == 1)
    {
        $results = $query->result();
        return $results;
    }
    else
    {
        return FALSE;
    }

}
	function updatee($data,$where){
        $this->db->where($where);
        $this->db->update($this->table,$data);
	}

function buat_kode()
	{
		$this->db->select('RIGHT(pendaftaran.id_koleksi,6) as kode', FALSE);
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
		$kodejadi = "JMH".$kodemax;
		return $kodejadi;
}


function laporan($from, $to)
	{
		$sql = "
			SELECT
				DISTINCT(SUBSTR(a.`tanggal_keberangkatan`, 1, 10)) AS tanggal,id,nama

			FROM
				`pendaftaran` AS a
			WHERE
				SUBSTR(a.`tanggal_keberangkatan`, 1, 10) >= '".$from."'
				AND SUBSTR(a.`tanggal_keberangkatan`, 1, 10) <= '".$to."'
			ORDER BY
				a.`tanggal` ASC
		";

		return $this->db->query($sql);
	}
}
