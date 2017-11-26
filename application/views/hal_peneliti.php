<!DOCTYPE html>
<html lang="en">
<head>
  <title>Selamat datang </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themes.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/spring.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet">

  <script src=" <?php echo base_url();?>assets/jquery3-3-1.min.js"></script>
  <script src=" <?php echo base_url();?>assets/boots.min.js"></script>
   <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <link href="<?php echo base_url();?>assets/js/jquery-1.11.1.js" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="assets/admin/css/dataTables.bootstrap.css">
    <script src="<?php echo base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>
    <script src="assets/admin/js/jquery.dataTables.min.js"></script>
        <script src="assets/admin/js/dataTables.bootstrap.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="push-top-bottom">
                <i class="glyphicon glyphicon-leaf text-success"></i> <strong class="text-warning">Flori</strong><br>
                <small class="text-light"> Pengelola Sumber Daya Genetik Tanaman Hias</small>
            </h1>
    </div>
    </div>
    <?php

if (isset($_GET['lupa_pass']))
{ ?>
 <div class="alert alert-success" role="alert"><a class="close" data-dismiss="alert" href="#">×</a>Password anda berhasil dirubah</div>

<?php
}
?>
<?php
if (isset($_GET['berhasil']))
{ ?>
  <div class="alert alert-success" role="alert"><a class="close" data-dismiss="alert" href="#">×</a>Berhasil mengirim permintaan harap tunggu telepon untuk menerima persetujuan</div>
<?php
}
?>
<?php
if (isset($_GET['serah']))
{ ?>
  <div class="alert alert-success" role="alert"><a class="close" data-dismiss="alert" href="#">×</a>Berhasil mengirim  penyerahan materi harap tunggu telepon untuk menerima persetujuan</div>
<?php
}
?>
<?php
if (!$user['status'])
{ ?>
  <div class="alert alert-danger" role="alert"><a class="close" data-dismiss="alert" href="#">×</a>Akun anda belum diverifikasi, hubungi admin jika dalam 3 hari masih belum diverifikasi.</div>
<?php
}
?>


  <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs pull center" data-toggle="tabs">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" class="btn btn-xs btn-success" href="#koleksi"><strong>Koleksi</strong></a></li>
                <li><a data-toggle="tab" class="btn btn-xs btn-success" href="#profil"><strong>Profil UPSDG</strong></a></li>
                <li><a data-toggle="tab"  class="btn btn-xs btn-success" href="#prosedur"><strong>Prosedur Pelayanan</strong></a></li>
                <li><a data-toggle="tab"  class="btn btn-xs btn-success" href="#permintaan"><strong>Permintaan Materi</strong></a></li>
                <li><a data-toggle="tab"  class="btn btn-xs btn-success" href="#penyerahan"><strong>Penyerahan Materi</strong></a></li>
                <li><a  class="btn btn-xs btn-danger" href="<?php echo base_url('dashboard/logout') ?>"><strong>Logout</strong></a></li>
              </ul>
 <div class="block">
    <div class="tab-content">
      <div class="tab-pane active" id="koleksi">
              <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >
                <thead>
                    <br>
                    <br>
                    <tr>
                      <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">NO</th>
                      <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Genus</th>
                      <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Spesies</th>
                      <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Pemulia</th>
                      <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Status</th>
                      <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Gambar</th>
                      <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    foreach ($koleksi as $key => $value) {
                  ?>
                 <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $value['genus'];?></td>
                    <td><?php echo $value['spesies'];?></td>
                    <td><?php echo $value['kolektor'];?></td>
                    <td>
                      <?php if ($value['status_materi']==0) {?>
                        <button class="btn btn-warning">Tidak Tersedia</button>
                      <?php }
                      else {?>
                        <button class="btn btn-success">Tersedia</button>
                      <?php }
                      ?></td>
                    <td><img src="<?php echo site_url ('assets/img/'.$value['gambar']) ?>" width="120px" /> </td>
                    <td>
                      <?php if ($user['status']) {?>
                        <?php if (!$rincianpermintaan) {?>
                                  <?php if ($value['status_materi']==0) {?>
                                    <button class="btn btn-warning">Tidak Tersedia</button>
                                  <?php }
                                  else {?>
                                    <button class="btn btn-info" data-toggle='modal' data-target="#konfir<?php echo $i?>" >Minta Materi</button>
                                  <?php }
                                  ?>
                        <?php }
                        else {
                          echo '<button class="btn btn-warning">Tidak Bisa Meminjam</button>';
                        }
                      }
                      else {?>
                        <button class="btn btn-warning">Tidak Bisa Meminjam</button>
                      <?php }?>
                    </td>
                </tr>
                <?php
                    $i++;
                    }
                 ?>
              </tbody>
              </table>
          </div>
      <div id="profil" class="tab-pane fade">
           <h4><strong>Profil</strong></h4><hr>
                    <p class="text-justify">Unit Pengelola Sumber Daya Genetik (UPSDG) ialah unit pelaksana pengelolaan dan pemanfaatan sumber daya genetik tanaman hias di dalam lingkup Balai Penelitian Tanaman Hias di bawah koordinasi Pusat Penelitian dan Pengembangan Hortikultura, Badan Penelitian dan Pengembangan Pertanian.<br><br>Fungsi UPSDG ialah sebagai berikut:
                    <ol>
                      <li>Penyusunan tatacara pengeluaran/pemasukan sumber daya genetik tanaman hias</li>
                      <li>Pengelolaan asesi sumber daya genetik tanaman hias melalui kegiatan konservasi (koleksi in vivo dan in vitro), karakterisasi, praevaluasi, regenerasi/rejuvinasi dan dokumentasi</li>
                      <li>Dokumentasi (Penyusunan descriptor list, prosedur-prosedur setiap kegiatan pengelolaan sumberdaya genetik</li>
                      <li>Pengembangan  pemanfaatan sumber daya genetik dari jenis-jenis yang memiliki potensi atau nilai ekonomi</li>
                      <li>Pendataan varietas lokal</li>
                      <li>Pengalihan/tukar menukar materi sumber daya genetik</li>
                      <li>Monitoring, evaluasi dan kontrol kualitas koleksi</li>
                    </ol>
                    Tugas pokok dan fungsi dapat diperluas dengan melakukan koordinasi dan membangun jejaring kerja diantara UPSDGF lingkup Puslitbanghorti, Komnas SDG dan dengan Komda-Komda sumber daya genetik.
                    </p><hr>
                    <h4><strong>Struktur Organisasi</strong></h4><hr>
                    <p class="text-justify">Struktur organisasi Unit Pengelolaan Sumberdaya genetik Balithi terdiri atas tim pengarah yaitu manajer puncak dan pelaksana harian terdiri atas kelompok/unit pengelola yang menangani konservasi, dokumenasi, utilisasi (pemanfaatan) sumberdaya genetik. Tim Pengarah beranggotakan ex officio yang merupakan pejabat-pejabat struktural dalam lingkup Balai Penelitian Tanaman Hias diketuai oleh Kepala Balai Penelitian Tanaman Hias. Pelaksana Harian diketuai oleh seorang peneliti perplasmanutfahan, dan anggota-anggota terdiri dari para peneliti dan teknisi dalam bidang perplasmanutfahan sesuai dengan bidang keahlian.<br><br>Setiap unit terdapat devisi yang menangani masing-masing kegiatan yang lebih spesifik. Unit pengelola konservasi menangani kegiatan konservasi in vivo dan in vitro, karakterisasi, regenerasi/rejuvenasi, dan evaluasi. Unit konservasi ini di bagi dalam sub devisi setiap komoditas yang dipegang oleh pemulia komoditas dan kelompok HPT untuk koleksi mikroba. Unit pengelola dokumentasi dipegang oleh staf yang memiliki keahlian khusus dibidang penanganan sistem informasi, web dan data base. Sedang unit pengelola utilisasi dibagi ke dalam kegiatan administrasi, publikasi, distribusi dan kolaborasi (riset, tukar-menukar materi) dengan staf pengelola dapat dirangkap oleh pengelola konservasi. Seluruh kegiatan dalam pengelolaan sumberdaya genetik tersebut terdapat satu kegiatan khusus yang mencakup kegiatan monitoring dan evaluasi.</p>
          </div>
      <div id="prosedur" class="tab-pane fade">
        <div class="timeline block-content-full">
                    <h3 class="timeline-header">Prosedur Pelayanan Pemanfaatan Materi</h3>
                    <ul class="timeline-list timeline-hover">
                      <li class="active">
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-content"><p class="push-bit">Pemohon mengajukan permintaan pemanfaatan materi</p></div>
                      </li>
                      <li class="active">
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-content"><p class="push-bit">Manajer Refresentatif mendisposisi permohonan kepada Manajer Utilisasi</p></div>
                      </li>
                      <li class="active">
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-content"><p class="push-bit">Manajer Utilisasi melakukan koordinasi dengan Manajer Teknis terkait ketersediaan materi yang diminta</p></div>
                      </li>
                      <li class="active">
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-content"><p class="push-bit">Manajer Teknis mengkonfirmasikan ketersediaan materi</p></div>
                      </li>
                      <li class="active">
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-content"><p class="push-bit">Manajer Utilisasi meneruskan informasi ketersediaan materi ke Manajer Refresentatif</p></div>
                      </li>
                      <li class="active">
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-content"><p class="push-bit">Manajer Refresentatif memberikan persetujuan pengeluaran materi</p></div>
                      </li>
                      <li class="active">
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-content"><p class="push-bit">Manajer Utilisasi menerbitkan berita acara penyerahan materi dan menyerahkan materi kepada Pemohon</p></div>
                      </li>
                      <li class="active">
                        <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                        <div class="timeline-content"><p class="push-bit">Pemohon menerima materi</p></div>
                      </li>
                    </ul>
        </div>
      </div>
      <div id="permintaan" class="tab-pane fade">
        <h4><strong>Permintaan</strong></h4><hr>
            <?php if ($user['status']) {?>
               <ul class="nav nav-pills">
               		<li role="presentation" class="active"><a data-toggle="tab" href="#datapermintaan">Permintaan</a></li>
               		<li role="presentation"> <a data-toggle="tab" href="#riwayatpermintaan">Riwayat Permintaan</a></li>
               </ul>
            <div class="block">
    				<div class="tab-content">
	          <div class="tab-pane active" id="datapermintaan">
	              <div class="row">
                  <?php if ($rincianpermintaan) {?>
                    <?php
                      $i = 1;
                      foreach ($rincianpermintaan as $key => $value) {
                    ?>
                    <div class="col-md-4">
                      <img src="<?php echo site_url ('assets/img/'.$value['gambar']) ?>" style="width:100%">
                    </div>
                    <div class="col-md-8">
                      <table style="font-size:20px">
                         <tr>
                            <td>Tanggal</td>
                            <td>: <?php echo $value['tanggal'];?></td>
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
                               <td>: <?php echo $value['kolektor'];?></td>
                           </tr>
                          <tr>
                             <td>Keterangan</td>
                              <td>: <?php echo $value['keterangan'];?></td>
                          </tr>
                          <tr>
                             <td>Status</td>
                              <td>: <?php if ($value['status_minta']==0) {?>
                                <button class="btn btn-info">Belum diproses</button>
                              <?php }
                              else {?>
                                <?php }
                              ?>
                              </td>
                          </tr>
                        <tr>
                          <form action="<?php echo base_url(). 'permintaan/batal'; ?>" method="post" novalidate enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $value['id_permintaan'];?>" name="id">
                            <td colspan="2" style="text-align:center;padding-top:20px"><button class="btn btn-warning" type="submit">Batalkan</button></td>
                          </form>
                         </tr>
                     </table>
                    </div>
                    <?php
                        $i++;
                        }
                     ?>
                  <?php }
                  else {?>
                    <div class="alert alert-info" role="alert">Anda tidak dalam proses permintaan materi, silahkan lakukan permintaan di halaman <a data-toggle="tab" href="#koleksi">koleksi</a>.</div>
                  <?php } ?>
                </div>
	          </div>
	          <div class="tab-pane fade" id="riwayatpermintaan">
              <div class="row">
                <?php if ($riwayat) {?>
                  <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >
                    <thead>
                      <br>
                      <br>
                      <tr>
                        <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">NO</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Genus</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Spesies</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Pemulia</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Tanggal</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Gambar</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Keterangan</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($riwayat as $key => $value) {
                        ?>
                        <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $value['genus'];?></td>
                          <td><?php echo $value['spesies'];?></td>
                          <td><?php echo $value['kolektor'];?></td>
                          <td><?php echo $value['tanggal'];?></td>
                          <td><img src="<?php echo site_url ('assets/img/'.$value['gambar']) ?>" width="120px" /> </td>
                          <td><?php echo $value['keterangan'];?></td>
                          <td><?php if ($value['status_minta']==1) {?>
                            <button class="btn btn-info">Terproses</button>
                          <?php }
                          else {?>
                            <button class="btn btn-danger">Dibatalkan</button>
                            <?php }
                          ?></td>
                        </tr>
                        <?php
                        $i++;
                      }
                      ?>
                    </tbody>
                  </table>
                <?php }
                else {?>
                  <div class="alert alert-info" role="alert">Tidak ada data riwayat permintaan yang dilakukan oleh akun anda.</div>
                <?php } ?>
              </div>
	          </div>
	          </div>
	          </div>
            <?php }
            else {?>
              <div class="alert alert-warning" role="alert"><a class="close" data-dismiss="alert" href="#">×</a>Akun anda belum diverifikasi, hubungi admin jika dalam 3 hari masih belum diverifikasi.</div>
            <?php }?>
      </div>
      <div id="penyerahan" class="tab-pane fade">
        <h4><strong>Penyerahan</strong></h4><hr>
            <?php if ($user['status']) {?>
               <ul class="nav nav-pills">
                  <li role="presentation" class="active"><a data-toggle="tab" href="#datapenyerahan">Permintaan</a></li>
                  <li role="presentation"> <a data-toggle="tab" href="#riwayatpenyerahan">Riwayat Permintaan</a></li>
               </ul>
            <div class="block">
            <div class="tab-content">
            <div class="tab-pane active" id="datapenyerahan">
                <div class="row">
                  <?php if ($rincianpenyerahan) {?>
                    <?php
                      $i = 1;
                      foreach ($rincianpenyerahan as $key => $value) {
                    ?>
                    <div class="col-md-4">
                      <img src="<?php echo site_url ('assets/img/'.$value['gambar']) ?>" style="width:100%">
                    </div>
                    <div class="col-md-8">
                      <table style="font-size:20px">
                         <tr>
                            <td>Tanggal</td>
                            <td>: <?php echo $value['tgl_serah'];?></td>
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
                               <td>: <?php echo $value['kolektor'];?></td>
                           </tr>
                          <tr>
                             <td>Keterangan</td>
                              <td>: <?php echo $value['keterangan_serah'];?></td>
                          </tr>
                          <tr>
                             <td>Status</td>
                              <td>: <?php if ($value['status_serah']==0) {?>
                                <button class="btn btn-info">Belum diproses</button>
                              <?php }
                              else {?>
                                <?php }
                              ?>
                              </td>
                          </tr>
                        <tr>
                          <form action="<?php echo base_url(). 'penyerahan/batal'; ?>" method="post" novalidate enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $value['id_penyerahan'];?>" name="id">
                            <td colspan="2" style="text-align:center;padding-top:20px"><button class="btn btn-warning" type="submit">Batalkan</button></td>
                          </form>
                         </tr>
                     </table>
                    </div>
                    <?php
                        $i++;
                        }
                     ?>
                  <?php }
                  else {?>
                    <form action="<?php echo base_url(). 'penyerahan/serah_materi'; ?>" method="post" novalidate enctype="multipart/form-data">
                              <table style="margin:20px auto;">
                                 <input type="hidden" name="id_penyerahan" value="<?php echo $serah ?>" >
                                  <tr>
                                    <td>Tanggal</td>
                                    <td><input type="text" name="tgl_serah" value="<?php echo date('y-m-d') ?>" class="form-control" readonly required></td>
                                  </tr>
                                  <input type="hidden" value="<?php echo $user['id_user'];?>" name="id_user">
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
                                     <td>Keterangan</td>
                                      <td><textarea name="keterangan" class="form-control"></textarea></td>
                                  </tr>
                                <tr>
                                     <td></td>
                                     <td><button type="submit" value="Kirim" class="btn btn-success">Kirim</button>
                                   </td>
                                 </tr>
                             </table>
                      </form>
                  <?php } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="riwayatpenyerahan">
              <div class="row">
                <?php if ($riwayatserah) {?>
                  <table id="example1" width="100%" class="table table-striped table-bordered table-hover" >
                    <thead>
                      <br>
                      <br>
                      <tr>
                        <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">NO</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Genus</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Spesies</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Pemulia</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Tanggal</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Gambar</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Keterangan</th>
                        <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($riwayatserah as $key => $value) {
                        ?>
                        <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $value['genus'];?></td>
                          <td><?php echo $value['spesies'];?></td>
                          <td><?php echo $value['kolektor'];?></td>
                          <td><?php echo $value['tgl_serah'];?></td>
                          <td><img src="<?php echo site_url ('assets/img/'.$value['gambar']) ?>" width="120px" /> </td>
                          <td><?php echo $value['keterangan_serah'];?></td>
                          <td><?php if ($value['status_serah']==1) {?>
                            <button class="btn btn-info">Terproses</button>
                          <?php }
                          else {?>
                            <button class="btn btn-danger">Dibatalkan</button>
                            <?php }
                          ?></td>
                        </tr>
                        <?php
                        $i++;
                      }
                      ?>
                    </tbody>
                  </table>
                <?php }
                else {?>
                  <div class="alert alert-info" role="alert">Tidak ada data riwayat penyerahan yang dilakukan oleh akun anda.</div>
                <?php } ?>
              </div>
            </div>
            </div>
            </div>
            <?php }
            else {?>
              <div class="alert alert-warning" role="alert"><a class="close" data-dismiss="alert" href="#">×</a>Akun anda belum diverifikasi, hubungi admin jika dalam 3 hari masih belum diverifikasi.</div>
            <?php }?>

    </div>
</div>

  </div>
</div>
<?php
$i = 1;
    foreach ($koleksi as $key => $value) {
?>
<div class="modal fade" id="konfir<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Konfirmasi Permintaan</h4>
      </div>
      <div class="modal-body">
         <form action="<?php echo base_url()?>permintaan/minta_materi" method="post">
          <input type="hidden" name="id_permintaan" value="<?php echo $kode ?> " >
          <input type="hidden" name="tanggal" value="<?php echo date('y-m-d') ?>">
          <input type="hidden" name="id_user" value="<?php echo $user['id_user'] ?>">
          <input type="hidden" name="id_koleksi" value="<?php echo $value['id_koleksi'] ?>">
          <input type="hidden" name="status_minta" value="0">
          <h2>Masukkan keterangan permintaan</h2>
          <textarea name="keterangan" class="form-control"></textarea>
          <h3>Anda Yakin Ingin Melakukan Permintaan Materi Ini?</h2>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Ya</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      </form>
      </div>
      </div>
    </div>
  </div>
</div>
<?php
$i++;
}
?>
<script src="assets/admin/js/jquery.dataTables.min.js"></script>
    <script src="assets/admin/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(function() {
        $('#example1').dataTable();
    });
</script>
</body>
</html>
