<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Tambah Data Koleksi Tanaman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Tambah Koleksi
                        </div>
                        <!-- /.panel-heading -->
                <div class="card-header">
                    <i class="fa fa-table"></i> 
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                    <form action="<?php echo base_url(). 'Kelola_koleksi/tambah_aksi'; ?>" method="post" novalidate enctype="multipart/form-data">
                         <table style="margin:20px auto;">
                             <tr>
                                <td>ID</td>
                                 <td><input type="text" name="id" value="<?php echo $kode ?> " class="form-control"></td>
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
                        