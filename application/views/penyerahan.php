<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Perusahaan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Data Perusahaan
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                            <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >

                                <thead>
                            
                                      <a href="<?php echo site_url ('penyerahan/tambah_aksi') ?>"><button type="button" class="btn btn-primary">Tambah</button></a>
                                    <br>
                                    <br>
    
        <tr>
            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">NO</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Tanggal Terbit</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Pemohon</th>
              <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">status</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">jenis tanaman</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">edit</th>
            <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">hapus</th>
        </tr>
        </thead>
        <tbody>
    <?php
$i = 1;
        foreach ($penyerahan as $key => $value) {
?>
        <tr>
                <td><?php echo $value['Id'];?></td>
                <td><?php echo $value['Tanggal'];?></td>
                <td><?php echo $value['Pemohon'];?></td>
                <td><?php echo $value['Status'];?></td>
                <td><?php echo $value['Jenis_Tanaman'];?></td>
               <td><?php echo anchor('penyerahan/tampil_edit/'.$value['Id'],'Edit'); ?></td> 
                 <td><?php echo anchor('penyerahan/hapus/'.$value['Id'],'hapus'); ?></td> 
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
        
    
</body>
</html>