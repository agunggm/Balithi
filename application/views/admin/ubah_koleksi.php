<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Ubah Data Koleksi Tanaman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Ubah Data Koleksi Tanaman
                        </div>
                        <!-- /.panel-heading -->

                <div class="card-block">
                    <div class="table-responsive">
                    <?php foreach($koleksi as $value){ ?>
                    <form action="<?php echo base_url(). 'Kelola_koleksi/update'; ?>" method="post" novalidate enctype="multipart/form-data">
                         <table style="margin:20px auto;">
                               <input type="hidden" name="id" value="<?php echo $value->id_koleksi ?>" class="form-control" >
                               <td>Genus</td>
                               <td><input type="text" name="genus"  value="<?php echo $value->genus ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Spesies</td>
                                 <td><input type="text" name="spesies"  value="<?php echo $value->spesies ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Pemulia</td>
                                 <td><input type="text" name="kolektor" value="<?php echo $value->kolektor ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Gambar</td>
                                 <td><img src="<?php echo site_url ('assets/img/'.$value->gambar) ?>" width="120px" /></td>
                             </tr>
                             <tr>
                                <td>Ubah Gambar</td>
                                 <td><input type="file" name="gambar" class="form-control" value="<?php echo $value->gambar?>"></td>
                             </tr>
                           <tr>
                                <td></td>
                                <td><br>
                                  <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                                  <button data-dismiss="modal" class="btn btn-primary btn-md">Batal</button>
                                </td>
                            </tr>
                        </table>
                 </form>
                 <?php } ?>
