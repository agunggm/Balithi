<div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Data Kelola Koleksi Tanaman
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                    <a href="<?php echo base_url().'Kelola_koleksi/tambah_koleksi'?>"><button class="btn-success">Tambah</button></a>
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Genus</th>
                                    <th>Spesies</th>
                                    <th>Pemulia</th>
                                    <center><th>Aksi</th></center>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                $i = 1;
                                foreach ($koleksi as $key => $value) {
                                ?>
             <tr>
                <td><?php echo $value['Id'];?></td>
                <td><?php echo $value['Genus'];?></td>
                <td><?php echo $value['Spesies'];?></td>
                <td><?php echo $value['Kolektor'];?></td>
                <td><button><?php echo anchor('Kelola_koleksi/tampil_rincian/'.$value['Id'],'Rincian'); ?></button><?php echo anchor('Kelola_koleksi/tampil_edit/'.$value['Id'],'Edit'); ?>
                <?php echo anchor('Kelola_koleksi/hapus/'.$value['Id'],'hapus'); ?></td> 
            </tr>
            <?php
                $i++;
                }
             ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>