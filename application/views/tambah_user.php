<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Kelola User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Kelola User
                        </div>
   
                <div class="card-block">
                    <div class="table-responsive">
                    <form action="<?php echo base_url(). 'Kelola_user/tambah_aksi'; ?>" method="post">
                         <table style="margin:20px auto;">
                             <tr>
                                <td>ID</td>
                                 <td><input type="text" name="id" class="form-control"></td>
                             </tr>
                            <tr>
                               <td>Nama Instansi</td>
                               <td><input type="text" name="nama_instansi" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Username</td>
                                 <td><input type="text" name="username" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Password</td>
                                 <td><input type="text" name="password" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Email</td>
                                 <td><input type="text" name="email" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" name="status" class="form-control"></td>
                             </tr>
                           <tr>
       
                                <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
                            </tr>
                        </table>
                 </form>
                        