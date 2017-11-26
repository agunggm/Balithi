<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Permintaan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Permintaan
                        </div>

 <a href="<?php echo base_url().'permintaan/tambah_permintaan'?>"><button class="btn-success">Tambah</button></a>
</button>
 <div class="panel-body">
                            <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >
<thead>
        <tr>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">ID</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Tanggal</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Pemohon</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Status</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Jenis Tanaman</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Edt</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Hapus</th>
        </tr>
</thead>
<tbody>
<?php
$i = 1;
        foreach ($permintaan as $key => $value) {
?>
        <tr>
                <td><?php echo $value['Id'];?></td>
                <td><?php echo $value['Tanggal'];?></td>
                <td><?php echo $value['Pemohon'];?></td>
                <td><?php echo $value['Status'];?></td>
                <td><?php echo $value['Jenis_Tanaman'];?></td>
               <td><?php echo anchor('permintaan/tampil_edit/'.$value['Id'],'Edit'); ?></td> 
                 <td><?php echo anchor('permintaaan/hapus/'.$value['Id'],'hapus'); ?></td> 
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
        