<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Koleksi Tanaman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Data Koleksi Tanaman
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                            <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >

                                <thead>
                                      <button class="btn btn-success" data-toggle='modal' data-target="#import"><i class="glyphicon glyphicon-plus"></i> Tambah</button>

                                    <br>
                                    <br>

        <tr>
            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">NO</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Genus</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Spesies</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Pemulia</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Status</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Gambar</th>
            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Edit</th>
        </tr>
        </thead>
        <tbody>
                 <?php
                                $i = 1;
                                foreach ($koleksi as $key => $value) {
                                ?>
             <tr>
                <td><?php echo $value['id_koleksi'];?></td>
                <td><?php echo $value['genus'];?></td>
                <td><?php echo $value['spesies'];?></td>
                <td><?php echo $value['kolektor'];?></td>
                <td><?php
                if ($value['status_materi']==0) {?>
                  <form  action="<?php echo base_url()?>kelola_koleksi/ubah_status" method="post">
                      <input type="hidden" name="id" value="<?php echo $value['id_koleksi'];?>">
                      <input type="hidden" name="status" value="1">
                      <button type="submit" class="btn btn-warning">Tidak Tersedia</button>
                  </form>
                <?php }
                else { ?>
                  <form  action="<?php echo base_url()?>kelola_koleksi/ubah_status" method="post">
                      <input type="hidden" name="id" value="<?php echo $value['id_koleksi'];?>">
                      <input type="hidden" name="status" value="0">
                      <button type="submit" class="btn btn-info">Tersedia</button>
                  </form>
                <?php }
                ?>
                </td>
                <td><img src="<?php echo site_url ('assets/img/'.$value['gambar']) ?>" width="120px" /> </td>
                <td>
                <?php echo anchor('Kelola_koleksi/tampil_edit/'.$value['id_koleksi'],'Edit', 'data-toggle= modal data-target="#impor"'); ?>
                ||<?php echo anchor('Kelola_koleksi/hapus/'.$value['id_koleksi'],'hapus'); ?></td>
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


        <!-- Modal import excel -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Koleksi</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'kelola_koleksi/tambah_aksi'; ?>" method="post" novalidate enctype="multipart/form-data">
                         <table style="margin:20px auto;">
                             <tr>
                                <td>ID</td>
                                 <td><input type="text" name="id_koleksi" value="<?php echo $kode ?>" class="form-control" readonly></td>
                             </tr>
                            <tr>
                               <td>Genus</td>
                               <td><input type="text" name="genus" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Spesies</td>
                                 <td><input type="text" name="spesies" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Pemulia</td>
                                 <td><input type="text" name="kolektor" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Gambar</td>
                                 <td> <input class="form-control" input type="file" name="gambar"></td>
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



<div class="modal fade" id="impor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">

        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

      </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
