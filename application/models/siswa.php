<?php
	 function select_perlengkapan(){
        $this->db->from($this->table);
		$this->db->where('status','ya');
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


function index()
        {
                $data['user'] = $this->m_siswa->select_perlengkapan();
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('admin/kelola_user',$data);
                $this->load->view('footer');
        }





        foreach ($user as $key => $value) {
?>
        <tr>
                <td><?php echo $value['id'];?></td>
                <td><?php echo $value['nama_instansi'];?></td>
                <td><?php echo $value['username'];?></td>
                <td><?php echo $value['password'];?></td>
                <td><?php echo $value['email'];?></td>
                <td><?php echo anchor('Kelola_user/tampil_edit/'.$value['id'],'Edit','data-toggle= modal data-target="#import"'); ?></td> 
                 <td><?php echo anchor('Kelola_user/hapus/'.$value['id'],'hapus'); ?></td>  
                    </tr>
<?php
$i++;
}
?>