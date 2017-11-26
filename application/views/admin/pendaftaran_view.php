<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Pendaftar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Kelola Data Pendaftar
                        </div>
                           <?PHP
                    if (isset($_GET['error']))
                        {
                            print "<div class=\"alert alert-danger\" role=\"alert\">maaf email tidak  terkirim </div>";
                        }
                        if (isset($_GET['berhasil']))
                        {
                            print "<div class=\"alert alert-success\" role=\"alert\">berhasil mengirim email</div>";
                        }
                    ?>
                     <button class="btn btn-success" data-toggle='modal' data-target="#impor"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
                  <div class="panel-body">
                            <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >

    
        <tr>
            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">No</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Nama Instansi</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Alamat</th>
              <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">No_Telp</th>
             <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Email</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Username</th>
              <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Password</th>
               <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Verifikasi</th>
             <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Edit</th>
            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Hapus</th>
        </tr>
        </thead>
        <tbody>
    <?php
$i = 1;
        foreach ($daftar as $key => $value) {
?>
        <tr>
                <td><?php echo $value['id'];?></td>
                <td><?php echo $value['nama_instansi'];?></td>
                <td><?php echo $value['alamat'];?></td>
                <td><?php echo $value['no_telp'];?></td>
                <td><?php echo $value['email'];?></td>
                <td><?php echo $value['username'];?></td>
                <td><?php echo $value['password'];?></td>
                <td> <button class="btn btn-success" > <a href="pendaftaran/sentemail?email=<?php echo $value['email'];?>" style="color: white ; text-decoration: none;">Kirim</button></a></td>
                <td><?php echo anchor('pendaftaran/tampil_edit/'.$value['id'],'Edit','data-toggle= modal data-target="#import"'); ?></td> 
                 <td><?php echo anchor('pendaftaran/hapus/'.$value['id'],'hapus'); ?></td>  
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

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->


    <!-- Morris Charts JavaScript -->


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>
    <script src="assets/admin/js/jquery.dataTables.min.js"></script>
        <script src="assets/admin/js/dataTables.bootstrap.js"></script>  
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
        



<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="impor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'pendaftaran/daftar'; ?>" method="post">
                         <table style="margin:20px auto;">
                             <tr>
                                <td>Id</td>
                                 <td><input type="text" name="id" value="<?php echo $kode ?>" class="form-control"></td>
                             </tr>
                            <tr>
                               <td>Nama / Instansi</td>
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
                                <td></td>
                                <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
                            </tr>
                        </table>
                 </form>
       
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
      </div>
    </div>
  </div>
</div>