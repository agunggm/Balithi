<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPSDG Balithi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themes.css" rel="stylesheet">
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/spring.css" rel="stylesheet">
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet">

  <script src=" <?php echo base_url();?>assets/jquery3-3-1.min.js"></script>
  <script src=" <?php echo base_url();?>assets/boots.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="push-top-bottom">
                <i class="gi gi-leaf text-success"></i> <strong class="text-warning">UPSDG Flori</strong><br>
                <small class="text-light">Unit Pengelola Sumber Daya Genetik Tanaman Hias</small>
            </h1>
    </div>
    </div>

     <?php

if (isset($_GET['berhasil']))
{ ?>
  <div class="alert alert-success" role="alert">Berhasil Daftar Harap Tunggu Konfirmasi untuk Melakukan login</div>

<?php
}
?>
<?php if (isset($_GET['gagal']))
{ ?>
  <div class="alert alert-danger" role="alert">Username atau Password yang Anda Masukan Salah</div>

<?php
}
?>
<?php if (isset($_GET['salah']))
{ ?>
  <div class="alert alert-warning" role="alert">Proses lupa password tidak berhasil dilaksanakan, silahkan coba kembali</div>

<?php
}
?>



  <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs pull center" data-toggle="tabs">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#beranda"<strong>HOME</strong></a></li>
    <li><a data-toggle="tab" class="btn btn-xs btn-success" href="#profil"><strong>Profile UPSDG</strong></a></li>
    <li><a data-toggle="tab"  class="btn btn-xs btn-success" href="#prosedur"><strong>Prosedur Pelayanan</strong></a></li>
      <li><a data-toggle="tab"  class="btn btn-xs btn-success" href="#login"><strong>Login</strong></a></li>
  </ul>



 <div class="block">
        <div class="tab-content">
            <div class="tab-pane active" id="beranda">

            <h3>HOME</h3>
            <p class="text-justify">Indonesia termasuk salah satu negara yang memiliki keanekaragaman tanaman yang sangat besar dengan penyebaran wilayah geografis yang luas. Keanekaragaman tanaman tersebut menjadi kekayaan alam yang setiap saat dapat dimanfaatkan untuk kepentingan nasional. Sebagian besar dari tumbuhan tersebut berada di berbagai daerah yang hingga kini belum dimanfaatkan.<br><br>
                    Keberadaan beberapa jenis plasma nutfah menjadi rawan dan langka, bahkan ada yang telah punah, sebagai akibat konversi lahan oleh tindakan manusia dan kebijakan pembangunan yang kurang memperhatikan kelestarian lingkungan. Oleh karena itu perlu konservasi plasma nutfah terutama mencegah kepunahannya di daerah-daerah rawan erosi.<br><br>
                    Sumberdaya hayati Indonesia melimpah, namun potensi tersebut belum digali secara optimal sehingga belum dapat dikembangkan secara ekonomis.  Indonesia masih tergantung pada varietas impor yang dilindungi secara hukum sehingga varietas tersebut tidak dapat diperbanyak tanpa persetujuan atau lisensi dari pemiliknya.  Mengingat berlimpahnya flora asli indonesia, maka perlu upaya perakitan varietas baru dengan menggunakan sumberdaya genetik asli Indonesia.<br><br>
                    Tanaman hortikultura komersial khususnya tanaman hias yang banyak dibudidayakan di Indonesia pada umumnya tanaman subtropis. Komoditas tersebut sudah diintroduksikan sejak zaman kolonial, yang saat ini berkembang menjadi varietas lokal. Sehubungan dengan preferensi konsumen yang terus menerus berubah, varietas-varietas tersebut menjadi kurang diminati lagi. Konsumen mulai menyukai varietas baru yang lebih memenuhi selera. Namun dengan tingginya nilai valuta asing belakangan ini, maka impor benih varietas baru tidak ekonomis lagi. OLeh karena itu upaya merakit varietas subtropis di dalam negeri perlu digalakkan mengingat cukup banyak sumber genetik tanaman subtropis yang tersedia.<br><br>
                    Dalam merakit varietas baru diperlukan sumberdaya genetik berupa plasma nutfah tanaman hias tropis maupun introduksi yang tersedia setiap saat diperlukan. Untuk menjamin terselenggaranya plasma nutfah tersebut diperlukan kegiatan berupa koleksi dan pelestarian ex situ sumber genetik yang dikelola dengan baik, termasuk konservasi in vitro, Koleksi tersebut dikarakterisasi sifat fenotipe dan genotipenya serta dievaluasi untuk mengetahui sifat-sifat unggul. Data karakterisasi dan evaluasi didokumentasikan dengan mengikuti pedoman baku.<br><br>
                    Dari rangkaian kegiatan tersebut akan dihasilkan tambahan koleksi ex situ plasma nutfah tanaman hias yang sebagian dikelola dan dikonservasi secara in vitro. Kegiatan karakterisasi dan pra-evaluasi akan menghasilkan data karakter yang lengkap mengenai plasma nutfah terkoleksi. Koleksi dan deskripsi karakter didokumentasikan dalam bentuk katalog yang terekam di dalam compact disc (CD) dan hard copy, sehingga memudahkan pemanfaatannya oleh pengguna.<br><br>
                    Koleksi plasma nutfah tanaman hias di luar komoditas prioritas yang merupakan kelompok tanaman tropis atau asli Indonesia dan belum ada negara lain yang membudidayakannya secara komersial, akan diidentifikasi dan dievaluasi potensinya untuk dijadikan sebagai komoditas unggulan guna pengembangan dan pemanfaatannya lebih lanjut dalam agribisnis.<br><br>Pengembangan komunikasi dalam penyebaran informasi mengenai plasma nutfah telah terbentuk. Pemerintah telah membentuk jaringan kerja informasi melalui kegiatan kelembagaan yang ada, misalnya National Biodiversity Information Network (NBIN), Pusat Informasi Konservasi Alam (PIKA) dan Komisi Nasional tentang Sumber Daya Genetik.</p>
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
                  <div id="login" class="tab-pane fade">
                   <h4><strong>Login</strong></h4><hr>
                   <form action="dashboard/login" method="post">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" placehoder="username" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="password" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
                  <button class="btn btn-success" data-toggle='modal' data-target="#cari">Daftar</button>
                  <button class="btn btn-warning" data-toggle='modal' data-target="#lupa">Lupa</button>
                </form>

    </div>
</div>
<div class="modal fade" id="cari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Daftar</h4>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url(). 'kelola_user/daftar'; ?>" method="post">
                         <table style="margin:20px auto;">
                             <tr>
                                <td>ID</td>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

      </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="lupa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Lupa Password</h4>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url(). 'kelola_user/lupa_pass'; ?>" method="post">
                         <table style="margin:20px auto;">
                           <tr>
                              <td>Username</td>
                               <td><input type="text" name="username" class="form-control"></td>
                           </tr>
                             <tr>
                                <td>Email</td>
                                 <td><input type="text" name="email" class="form-control"></td>
                             </tr>
                            <tr>
                               <td>Sandi Baru</td>
                               <td><input type="password" name="pass_baru" class="form-control"></td>
                            </tr>
                           <tr>
                                <td></td>
                                <td><input type="submit" value="Ubah Sandi" class="btn btn-primary"></td>
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
</body>
</html>
