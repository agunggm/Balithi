<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Penyerahan Materi</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Data Penyerahan Materi
        </div>
        <!-- /.panel-heading -->

        <div class="panel-body">
          <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >
            <thead>
              <tr>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Id</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Tanggal</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Pemohon</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Genus</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Spesies</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Verif</th>
                <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($penyerahan as $key => $value) {
                ?>
                <tr>
                  <td><?php echo $value['id_penyerahan'];?></td>
                  <td><?php echo $value['tgl_serah'];?></td>
                  <td><?php echo $value['nama_instansi'];?></td>
                  <td><?php echo $value['genus'];?></td>
                  <td><?php echo $value['spesies'];?></td>
                  <td><button class="btn btn-info" data-toggle='modal' data-target="#rincian<?php echo $i;?>">
                    <?php if ($value['status_serah']==0) {
                      echo "Verifikasi";
                    }
                    else {
                      echo "Rincian";
                    } ?></button></td>
                    <td><a href="<?php echo base_url('penyerahan/hapus/'.$value['id_penyerahan']);?>">Hapus </td>
                    </tr>
                    <?php
                    $i++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  <?php
  $i = 1;
  foreach ($penyerahan as $key => $value) {
    ?>
    <div class="modal fade" id="rincian<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Rincian Penyerahan</h4>
          </div>
          <div class="modal-body">
            <table style="margin:20px auto;">
              <tr>
                <td>Tanggal </td>
                <td>: <?php echo $value['tgl_serah'];?></td>
              </tr>
              <tr>
                <td>Nama / Instansi</td>
                <td>: <?php echo $value['nama_instansi'];?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>: <?php echo $value['email'];?></td>
              </tr>
              <tr>
                <td>Genus</td>
                <td>: <?php echo $value['genus'];?></td>
              </tr>
              <tr>
                <td>Spesies</td>
                <td>: <?php echo $value['spesies'];?></td>
              </tr>
              <tr>
                <td>Pemulia</td>
                <td>: <?php echo $value['email'];?></td>
              </tr>
              <tr>
                <td>Gambar</td>
                <td>: <img src="<?php echo site_url ('assets/img/'.$value['gambar']) ?>" width="120px" /></td>
              </tr>
            </table>
            <div class="modal-footer">
              <?php if ($value['status_serah']==0) {?>
                <form action="<?php echo base_url(). 'penyerahan/ubah_status'; ?>" method="post">
                  <input type="hidden" name="id" value="<?php echo $value['id_penyerahan']?>">
                  <input type="hidden" name="id_koleksi" value="<?php echo $kode?>">
                  <input type="hidden" name="genus" value="<?php echo $value['genus']?>">
                  <input type="hidden" name="spesies" value="<?php echo $value['spesies']?>">
                  <input type="hidden" name="kolektor" value="<?php echo $value['kolektor']?>">
                  <input type="hidden" name="gambar" value="<?php echo $value['gambar']?>">
                  <button type="submit" class="btn btn-info">Verifikasi</button>
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
    </body>
    </html>
