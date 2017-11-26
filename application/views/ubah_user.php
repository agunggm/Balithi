<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah Data Kelola User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Kelola User
                        </div>

                <div class="card-block">
                    <div class="table-responsive">
                    <?php foreach($user as $value){ ?>
                    <form action="<?php echo base_url(). 'Kelola_user/update'; ?>" method="post">
                         <table style="margin:20px auto;">
                      
                          
                               <input type="hidden" name="id" value="<?php echo $value->id ?>">
                           
                            <tr>
                               <td>Nama Instansi</td>
                               <input type="hidden" name="id" value="<?php echo $value->id ?>">
                               <td><input type="text" name="nama_instansi"  value="<?php echo $value->nama_instansi ?>"  class="form-control"></td>
                             </tr>
                             <tr>
                                <td>username</td>
                                 <td><input type="text" name="username"  value="<?php echo $value->username ?>"  class="form-control"></td>
                             </tr>
                             <tr>
                                <td>password</td>
                                 <td><input type="text" name="password" value="<?php echo $value->password ?>"  class="form-control"></td>
                             </tr>
                             <tr>
                                <td>email</td>
                                 <td><input type="text" name="email" value="<?php echo $value->email ?>"  class="form-control"></td>
                             </tr>
                             <tr>
                                <td>level</td>
                                 <td><input type="text" name="level" value="<?php echo $value->level ?>"  class="form-control"></td>
                             </tr>
                             <tr>
                                <td>status</td>
                                 <td><input type="text" name="status" value="<?php echo $value->status ?>"  class="form-control"></td>
                             </tr>
                           <tr>
                                <td></td>
                                <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
                            </tr>
                        </table>
                 </form>
                 <?php } ?>
                        