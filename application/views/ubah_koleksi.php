<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Ubah Data Kelola Koleksi Tanaman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Ubah Data Kelola Koleksi Tanaman
                        </div>
                        <!-- /.panel-heading -->
      
                <div class="card-block">
                    <div class="table-responsive">
                    <?php foreach($koleksi as $value){ ?>
                    <form action="<?php echo base_url(). 'Kelola_koleksi/update'; ?>" method="post">
                         <table style="margin:20px auto;">
                      
                          
                               <input type="hidden" name="id" value="<?php echo $value->id ?>" class="form-control">
                           
                            <tr>
                               <td>Genus</td>
                               <input type="hidden" name="id" value="<?php echo $value->id ?>">
                               <td><input type="text" name="genus"  value="<?php echo $value->genus ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Spesies</td>
                                 <td><input type="text" name="spesies"  value="<?php echo $value->spesies ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Kolektor</td>
                                 <td><input type="text" name="kolektor" value="<?php echo $value->kolektor ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Gambar</td>
                                 <td><input type="text" name="gambar" value="<?php echo $value->gambar ?>" class="form-control"></td>
                             </tr>
                           <tr>
                                <td></td>
                                <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
                            </tr>
                        </table>
                 </form>
                 <?php } ?>
                        