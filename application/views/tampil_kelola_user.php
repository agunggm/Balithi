<div class="container">
<h2>Create-Read-Update-Delete</h2>
<hr/>
<button type="button" class="btn btn-link" data-toogle="modal" data-target="tambahkan modal">
<span class="glyphicon glyphicon-plus"></span> Tambah Data
</button>
<table class="table table-hover">
<thead>
		<tr>
				<th>No</th>
				<th>id</th>
				<th>Nama Instansi</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Level</th>
				<th>Status</th>
		</tr>
</thead>
<tbody>
<?php
$i = 1;
		foreach ($user as $key => $value) {
?>
		<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $value['id'];?></td>
				<td><?php echo $value['Nama Instansi'];?></td>
				<td><?php echo $value['Username'];?></td>
				<td><?php echo $value['Password'];?></td>
				<td><?php echo $value['Email'];?></td>
				<td><?php echo $value['Level'];?></td>
				<td><?php echo $value['Status'];?></td>
				<td>
						<button type="button" class="btn btn-success tombol">
								data-toogle="modal" data-target="editModal"
								data-id="<?php echo $value['id'];?>"
								data-nama_instansi="<?php echo $value ['nama_instansi'];?>"
								data-username="<?php echo $value ['username'];?>"
								data-password="<?php echo $value ['password'];?>"
								data-email="<?php echo $value ['email'];?>"
								data-level="<?php echo $value ['level'];?>"
								data-status="<?php echo $value ['status'];?>"
								<span class="glyphicon glyphiconn-pencil"></span></button>
						<button type="button class="btn btb-danger tombol">
								data-toggle="modal" data-target="deleteModal"
								data-id="<?php echo $value['id'];?>"
								data-nama="<?php echo $value['nama'];?>">
								<span class="glyphicon glyphicon-trash"></span></button>
						</td>
					</tr>
<?php
$i++;
}
?>
</tbody>
</table>
</div>