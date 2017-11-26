<style media="screen">
    .invoice-title h2, .invoice-title h3 {
      display: inline-block;
    }

    .table > tbody > tr > .no-line {
      border-top: none;
    }

    .table > thead > tr > .no-line {
      border-bottom: none;
    }

    .table > tbody > tr > .thick-line {
      border-top: 2px solid;
    }
</style>
<div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Laporan</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?php if (!$laporan) {?>
        <form action="<?php echo base_url(); ?>laporan/filter" method="post">
          <div class="row">
            <div class="col-md-4">
              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-12 xdisplay_inputx form-group has-feedback">
                      <input type="text" name="awal" class="form-control has-feedback-left" id="single_cal2" placeholder="m/d/Y" aria-describedby="inputSuccess2Status2">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="col-md-1" style="margin-top:8px"><span style="text-align:center;">Sampai</span></div>
            <div class="col-md-4">
              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-12 xdisplay_inputx form-group has-feedback">
                      <input type="text" name="akhir" class="form-control has-feedback-left" id="single_cal1" placeholder="m/d/Y" aria-describedby="inputSuccess2Status2">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="col-md-3"><span style="text-align:center;"><button type="submit" class="btn btn-success">Filter</button></span></div>
          </div>
        </form>
        <?php } ?>
        <?php if ($laporan) {?>
        <div class="panel panel-default">
          <div class="panel-heading">
            Laporan Berkala
          </div>
          <div class="page-title">
          </div>
          <div class="panel-body">
              <div class="">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="invoice-title">
                      <h2>UPSDG Balithi</h2>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-xs-6">
                        <address>
                          <strong>Dari:</strong><br>
                          Admin Sistem Unit Pengelola Sumber Daya Genetik<br>
                          Arlan Hernawan<br>
                          43253<br>
                          Jl. Raya Ciherang, Segunung Pacet
                        </address>
                      </div>
                      <div class="col-xs-6 text-right">
                        <address>
                          <strong>Kepada:</strong><br>
                          Kepala Balai Penelitian Tanaman Hias<br>
                          Dr. Ir. Rudy Soehendi, MP. <br>
                          Telp : 0263-512607<br>
                          Cianjur, Jawa Barat
                        </address>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <address>
                          <strong>Laporan:</strong><br>
                          Dari : <?php echo date("d-M-Y",strtotime($awal));  ?><br> sampai <?php echo date("d-M-Y",strtotime($akhir));  ?>
                        </address>
                      </div>
                      <div class="col-xs-6 text-right">
                        <address>
                          <strong>Tanggal Laporan:<?php echo date("d-M-Y");?></strong><br>
                          <br><br>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title"><strong>Rangkuman Sistem</strong></h3>
                      </div>
                      <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table table-condensed">
                            <thead>
                              <tr>
                                <td><strong>Nama</strong></td>
                                <td class="text-center"><strong>Keterangan</strong></td>
                                <td class="text-right"><strong>Jumlah</strong></td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Koleksi</td>
                                <td class="text-center">Jumlah semua materi yang terdaftar di sistem</td>
                                <td class="text-center"><?php echo $materi;?></td>
                              </tr>
                              <tr>
                                <td>Koleksi Tersedia</td>
                                <td class="text-center">Jumlah koleksi yang tersedia</td>
                                <td class="text-center"><?php echo $materisedia;?></td>
                              </tr>
                              <tr>
                                <td>Koleksi Habis</td>
                                <td class="text-center">Jumlah koleksi yang tidak tersedia</td>
                                <td class="text-center"><?php echo $materitak;?></td>
                              </tr>
                              <tr>
                                <td>Pengguna</td>
                                <td class="text-center">Jumlah pengguna yang terdaftar pada sistem</td>
                                <td class="text-center"><?php echo $user;?></td>
                              </tr>
                              <tr>
                                <td>Pengguna Valid</td>
                                <td class="text-center">Jumlah pengguna yang telah diverifikasi</td>
                                <td class="text-center"><?php echo $usersedia;?></td>
                              </tr>
                              <tr>
                                <td>Pengguna Invalid</td>
                                <td class="text-center">Jumlah pengguna yang belum diverifikasi</td>
                                <td class="text-center"><?php echo $usertak;?></td>
                              </tr>
                              <tr>
                                <td>Permintaan</td>
                                <td class="text-center">Jumlah permintaan yang dilakukan dalam kurun waktu laporan</td>
                                <td class="text-center"><?php echo $permintaan;?></td>
                              </tr>
                              <tr>
                                <td>Penyerahan</td>
                                <td class="text-center">Jumlah penyerahan yang dilakukan dalam kurun waktu laporan</td>
                                <td class="text-center"><?php echo $penyerahan;?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Cetak</button>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
</div>
<script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>
<script src="assets/admin/js/jquery.dataTables.min.js"></script>
<script src="assets/admin/js/dataTables.bootstrap.js"></script>

  </body>
  </html>
