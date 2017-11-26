<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Pengguna</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kelola Data Pengguna
                        </div>

                  <div class="panel-body">
                            <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >

                                <thead>

                                        <button class="btn btn-success" data-toggle='modal' data-target="#impor"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
                                    <br>
                                    <br>

        <tr>
            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">ID</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Nama</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Alamat</th>
              <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Telepon</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Level</th>
             <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Rincian</th>
            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Aksi</th>
        </tr>
        </thead>
        <tbody>
    <?php
$i = 1;
        foreach ($user as $key => $value) {
?>
        <tr>
                <td><?php echo $value['id_user'];?></td>
                <td><?php echo $value['nama_instansi'];?></td>
                <td><?php echo $value['alamat'];?></td>
                <td><?php echo $value['no_telp'];?></td>
                <td>
                  <?php
                  if ($value['level']==0) {?>
                    <button class="btn btn-success">Peneliti</button>
                  <?php }
                  else { ?>
                    <button class="btn btn-danger">Admin</button>
                  <?php }
                  ?>
                </td>
                <td><button class="btn btn-info" data-toggle='modal' data-target="#rincian<?php echo $value['id_user'];?>">
                  <?php if ($value['status']==0) {
                    echo "Verifikasi";
                  }
                  else {
                    echo "Rincian";
                  } ?></button>
                </td>
                 <td><?php echo anchor('Kelola_user/tampil_edit/'.$value['id_user'],'Edit','data-toggle= modal data-target="#import"'); ?> || <?php echo anchor('Kelola_user/hapus/'.$value['id_user'],'hapus'); ?></td>
                    </tr>
<?php
$i++;
}
?>

               </tbody>

                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>
    <script src="assets/admin/js/jquery.dataTables.min.js"></script>
        <script src="assets/admin/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>


<div class="modal fade" id="impor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
      </div>
      <div class="modal-body">
         <form action="<?php echo base_url().'Kelola_user/tambah_aksi'; ?>" method="post">
                         <table style="margin:20px auto;">
                             <tr>
                                <td>ID</td>
                                 <td><input type="text" name="id" value="<?php echo $kode ?> " class="form-control" disabled></td>
                             </tr>
                             <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama_instansi" class="form-control"></td>
                              </tr>
                               <tr>
                                <td>Alamat</td>
                                <td><textarea type="tex" name="alamat" class="form-control"></textarea></td>
                              </tr>
                                <tr>
                                <td>No Telepon</td>
                                <td><input type="text" name="no_telp" class="form-control"></td>
                              </tr>
                               <tr>
                                 <td>Email</td>
                                  <td><input type="email" name="email" class="form-control"></td>
                              </tr>
                              <tr>
                                 <td>Username</td>
                                  <td><input type="text" name="username" class="form-control"></td>
                              </tr>
                              <tr>
                                 <td>Password</td>
                                  <td><input type="password" name="password" class="form-control"></td>
                              </tr>
                              <tr>
                                 <td>Hak Akses</td>
                                  <td><select class="" name="level">
                                    <option value="0">Peneliti</option>
                                    <option value="0">Admin</option>
                                  </select></td>
                              </tr>
                            <tr>
                                 <td></td>
                                 <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
                             </tr>
                        </table>
                 </form>


        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">

        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

      </div>
      </div>
    </div>
  </div>
</div>
<?php
$i = 1;
    foreach ($user as $key => $value) {
?>
<div class="modal fade" id="rincian<?php echo $value['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Rincian Pengguna</h4>
      </div>
      <div class="modal-body">
                         <table style="margin:20px auto;">
                             <tr>
                                <td>ID</td>
                                 <td>: <?php echo $value['id_user'];?></td>
                             </tr>
                            <tr>
                               <td>Nama</td>
                               <td>: <?php echo $value['nama_instansi'];?></td>
                             </tr>
                             <tr>
                                <td>Alamat</td>
                                 <td>: <?php echo $value['alamat'];?></td>
                             </tr>
                             <tr>
                                <td>Telepon</td>
                                <td>: <?php echo $value['no_telp'];?></td>
                              </tr>
                              <tr>
                                 <td>Email</td>
                                 <td>: <?php echo $value['email'];?></td>
                               </tr>
                               <tr>
                                  <td>Username</td>
                                  <td>: <?php echo $value['username'];?></td>
                                </tr>
                                <tr>
                                   <td>Password</td>
                                   <td>: <?php echo $value['password'];?></td>
                                 </tr>
                                 <tr>
                                    <td>Hak Akses</td>
                                    <td>: <?php if ($value['level']==0) {
                                      echo "Pengguna";
                                    }
                                    else {
                                      echo "Admin";
                                    }?></td>
                                  </tr>
                        </table>
        <div class="modal-footer">
          <?php if ($value['status']==0) {?>
            <form action="<?php echo base_url(). 'kelola_user/ubah_status'; ?>" method="post">
              <input type="hidden" name="id" value="<?php echo $value['id_user']?>">
              <button type="submit" class="btn btn-default">Verifikasi</button>
          <?php }
          ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

      </div>
      </div>
    </div>
  </div>
</div>
<?php
$i++;
}
?>
