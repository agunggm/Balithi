<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Ubah Data Permintaan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Ubah Data Permintaan
                        </div>
                
                <div class="card-block">
                    <div class="table-responsive">
                    <?php foreach($permintaan as $value){ ?>
                     <form action="<?php echo base_url(). 'permintaan/update'; ?>" method="post">
                         <table style="margin:20px auto;">
                      
                          
                               <input type="hidden" name="id" value="<?php echo $value->id ?>" class="form-control">
                           
                            <tr>
                               <td>Tanggal</td>
                       
                               <td><input type="date" name="tanggal"  value="<?php echo $value->tanggal ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Pemohon</td>
                                 <td><input type="text" name="nama_instansi"  value="<?php echo $value->nama_instansi ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Alamat</td>
                                 <td><input type="text" name="alamat" value="<?php echo $value->alamat ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>No Telp</td>
                                 <td><input type="text" name="no_telp" value="<?php echo $value->no_telp ?>" class="form-control"></td>
                             </tr>
                              <tr>
                                <td>Email</td>
                                 <td><input type="text" name="email"  value="<?php echo $value->email ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Genus</td>
                                 <td><input type="text" name="genus" value="<?php echo $value->genus ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Spesies</td>
                                 <td><input type="text" name="spesies" value="<?php echo $value->spesies ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Keterangan</td>
                                 <td><input type="text" name="keterangan" value="<?php echo $value->keterangan ?>" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Status</td>
                                 <td><select name="status" class="form-control">
                                      <option value=""><?php echo $value->status ?></option>
                                     <option value="setuju">setuju</option>
                                     <option value="tidak">tidak</option>
                                 </select>
                                 </td>
                             </tr>

                           <tr>
                                <td></td>
                                <td><input type="submit" value="Simpan"></td>
                            </tr>
                        </table>
                 </form>
                 <?php } ?>
                        
