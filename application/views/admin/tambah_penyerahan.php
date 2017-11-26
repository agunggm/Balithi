     <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Tambah Penyerahan
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Tambah Penyerahan
                            </li>
                        </ol>
                    </div>
                </div>
              
                <div class="card-block">
                    <div class="table-responsive">
                    <form action="<?php echo base_url(). 'Penyerahan/tambah_aksi'; ?>" method="post">
                         <table style="margin:20px auto;">
                             <tr>
                                <td>ID</td>
                                 <td><input type="text" name="Id" class="form-control"></td>
                             </tr>
                            <tr>
                               <td>Tanggal</td>
                               <td><input type="date" name="Tanggal" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Pemohon</td>
                                 <td><input type="text" name="Pemohon" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Status</td>
                                 <td><input type="text" name="Status" class="form-control"></td>
                             </tr>
                             <tr>
                                <td>Jenis Tanaman</td>
                                 <td><input type="text" name="Jenis_Tanaman" class="form-control"></td>
                             </tr>
                           <tr>
                                <td></td>
                                <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
                            </tr>
                        </table>
                 </form>
                        