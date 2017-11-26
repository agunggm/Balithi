<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah Data User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data User
                        </div>

                <div class="card-block">
                    <div class="table-responsive">
                    <?php foreach($user as $value){ ?>
                    <form action="<?php echo base_url(). 'Kelola_user/update'; ?>" method="post">
                         <table style="margin:20px auto;">
                               <input type="hidden" name="id" value="<?php echo $value->id_user ?>">
                               <tr>
                                  <td>Nama Instansi</td>
                                  <td><input type="text" name="nama_instansi"  value="<?php echo $value->nama_instansi ?>"  class="form-control"required></td>
                                </tr>
                                <tr>
                                   <td>Alamat</td>
                                    <td><input type="text" name="alamat"  value="<?php echo $value->alamat ?>"  class="form-control"required></td>
                                </tr>
                                <tr>
                                   <td>No_Telp</td>
                                    <td><input type="text" name="no_telp" value="<?php echo $value->no_telp ?>"  class="form-control" required></td>
                                </tr>
                                <tr>
                                   <td>Email</td>
                                    <td><input type="text" name="email" value="<?php echo $value->email ?>"  class="form-control" required></td>
                                </tr>
                                <tr>
                                   <td>Username</td>
                                    <td><input type="text" name="username"  value="<?php echo $value->username ?>"  class="form-control"  required></td>
                                </tr>
                                <tr>
                                   <td>Password</td>
                                    <td><input type="text" name="password" value="<?php echo $value->password ?>"  class="form-control" required></td>
                                </tr>
                                <tr>
                                   <td>Status</td>
                                   <td>
                                       <select name="level" class="form-control">
                                           <option value="<?php echo $value->level ?>">-- Pilih Level --</option>
                                           <option value="0">Peneliti</option>
                                           <option value="1">Admin</option>
                                       </select>
                                   </td>
                                </tr>
                              <tr>
                                   <td></td>
                                   <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
                               </tr>
                        </table>
                 </form>
                 <?php } ?>
