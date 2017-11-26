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
                      
                          
                               <input type="hidden" name="Id" value="<?php echo $value->Id ?>">
                           
                            <tr>
                               <td>Tanggal</td>
                               <input type="hidden" name="id" value="<?php echo $value->Id ?>">
                               <td><input type="date" name="Tanggal"  value="<?php echo $value->Tanggal ?>"></td>
                             </tr>
                             <tr>
                                <td>Pemohon</td>
                                 <td><input type="text" name="Pemohon"  value="<?php echo $value->Pemohon ?>"></td>
                             </tr>
                             <tr>
                                <td>Status</td>
                                 <td><input type="text" name="Status" value="<?php echo $value->Status ?>"></td>
                             </tr>
                             <tr>
                                <td>Jenis Tanaman</td>
                                 <td><input type="text" name="Jenis_Tanaman" value="<?php echo $value->Jenis_Tanaman ?>"></td>
                             </tr>
                           <tr>
                                <td></td>
                                <td><input type="submit" value="Simpan"></td>
                            </tr>
                        </table>
                 </form>
                 <?php } ?>
                        
