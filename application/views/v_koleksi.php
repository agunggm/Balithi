        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
        <button class="btn btn-success" onclick="tambah_koleksi()"><i class="glyphicon glyphicon-plus"></i> tambah koleksi</button>
        <br />
        <br />
       <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                        
                                <table class="table table-striped table-bordered table-hover" id="table">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Genus</th>
                    <th>Spesies</th>
                    <th>Kolektor</th>
                    <th>gambar</th>
                    <th style="width:125px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                <th>ID </th>
                    <th>Genus</th>
                    <th>Spesies</th>
                    <th>Kolektor</th>
                    <th>gambar</th>
                    <th style="width:125px;">Aksi</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<script src="<?php echo base_url('assets/asset/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/asset/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/asset/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/asset/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/asset/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('c_koleksi/tampil_koleksi')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });
     //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

});



function tambah_koleksi()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('tambah koleksi'); // Set Title to Bootstrap modal title
}

function edit_koleksi(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('c_koleksi/edit_koleksi/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="genus"]').val(data.genus);
            $('[name="spesies"]').val(data.spesies);
            $('[name="kolektor"]').val(data.kolektor);
            $('[name="gambar"]').val(data.gambar);
            $('[name="madinah"]').val(data.madinah);
            $('[name="pesawat"]').val(data.pesawat);
             $('[name="kuota"]').val(data.kuota);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('koleksi edit'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('c_koleksi/tambah_koleksi')?>";
    } else {
        url = "<?php echo site_url('c_koleksi/update_koleksi')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        mimeType: "multipart/form-data",
        dataType: "JSON",
        success: function(data)
        {

             if(data.status) //if success close modal and reload ajax table
        {
            $('#modal_form').modal('hide');
            reload_table();
        }
        else
        {
            for (var i = 0; i < data.inputerror.length; i++) 
            {
                $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
            }
        }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    }); 
}

function hapus_koleksi(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('c_koleksi/hapus_koleksi')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah koleksi</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal"  enctype="multipart/form-data">
                     <input type="hidden" value="" name="id"/> 
                     <div class="form-body">
                        <div class="form-group">
                              <label class="control-label col-md-3">ID</label>
                            <div class="col-md-9" >
                                <input name="id"  class="form-control" type="text " >
                                <span class="help-block"></span>
                            </div>
                        </div> 
                    
                        <div class="form-group">
                            <label class="control-label col-md-3" >Genus</label>
                            <div class="col-md-9">
                                <input name="genus" placeholder="Genus" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" >Spesies</label>
                            <div class="col-md-9">
                                <input name="spesies" placeholder="Spesies" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" >Pemulia</label>
                            <div class="col-md-9">
                                <input name="kolektor" placeholder="Kolektor" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label class="control-label col-md-3">Gambar</label>
                            <div class="col-md-9">
                               <input name="gambar" placeholder="gambar" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
            
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" name="koleksiSubmit">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>
