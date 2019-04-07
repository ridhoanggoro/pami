<div class="content-wrapper">
   <section class="content">
    <?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
    <?php } ?>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">New Member Registration List</h3>
          <div class="box-tools">
            <a href="<?php echo base_url("user/export_csv"); ?>" class="btn-sm btn btn-success" data-toggle="modal"><i class="fa fa-download"></i> Download CSV</a>
            <button type="button" id="btnUploadCsv" class="btn-sm  btn btn-success modalButtonUser" data-toggle="modal"><i class="fa fa-upload"></i> Upload CSV</button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">           
          <table class="table table-striped table-bordered" id="mydata" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th>No. ID</th>
                  <th>Nama</th>
                  <th>No E-KTP</th>
                  <th>TTL</th>
                  <th>No. Rekening</th>
                  <th>Info</th>
                  <th style="text-align: right;">Action</th>
              </tr>
            </thead>
            <tbody id="tampil_data">
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      </div>
    </div>      
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                Detail Registrasi User
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">                
                <form class="form-horizontal" role="form">
                <div class="form-group">
                <img id="profil_image" class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>/assets/images/<?php echo isset($profile_pic)?$profile_pic:'user.png';?>" alt="User profile picture">
                </div>
                  <div class="form-group">
                    <label  class="col-sm-3 control-label" for="seq_id">User ID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="seq_id" name="seq_id" placeholder="User ID"/>
                    </div>                    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"  for="nama_edit" >Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_edit" name="nama_edit" placeholder="Nama Lengkap"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"  for="e_ktp_no_edit" >No E-KTP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="e_ktp_no_edit" name="e_ktp_no_edit" placeholder="No E-KTP"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"  for="ttl_edit" >TTL</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="ttl_edit" name="ttl_edit" placeholder="TTL"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"  for="alamat_edit" >Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="alamat_edit" name="alamat_edit" placeholder="Alamat"></textarea>
                    </div>
                  </div>                                    
                </form>
              </div>
              <input type="hidden" class="form-control" id="user_type" name="user_type" value="<?php echo $this->session->userdata ('user_details')[0]->user_type; ?>"/>
              <input type="hidden" class="form-control" id="email_edit" name="email_edit"/>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" type="submit" id="btn_update" class="btn btn-primary">Approve User</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Upload CSV -->
<div class="modal fade" id="Modal_Upload" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                Upload CSV File From SINVEST
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
            <form method="post" id="import_csv" enctype="multipart/form-data">
            <div class="form-group">
              <label>Select CSV File</label>
              <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
            </div>
            </form> 
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="submit" name="import_csv_btn" class="btn btn-info" id="import_csv_btn">Proses Upload</button>
            </div>
        </div>
    </div>
</div>

<script type = "text/javascript" >
    $(document).ready(function() {
        show_data(); //call function show all product   
        $('#mydata').dataTable();

        //function show all product
        function show_data() {
            var role = $('#user_type').val();
            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url('user/get_acc_registered_list')?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    if (role == 'Manager') {
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].seq_id + '</td>' +
                                '<td>' + data[i].name + '</td>' +
                                '<td>' + data[i].e_ktp_no + '</td>' +
                                '<td>' + data[i].tanggal_lahir + '</td>' +
                                '<td>' + data[i].rekening_bank_no + '</td>' +
                                '<td><span class="label label-success">Pending Manager Approval</span></td>' +
                                '<td style="text-align:right;">' +
                                '<a href="javascript:void(0);" class="btn btn-info btn-xs item_edit" title="lihat detail" data-seq_id="' + data[i].seq_id + '" data-nama="' + data[i].name + '" data-e_ktp_no="' + data[i].e_ktp_no + '"data-tanggal_lahir="' + data[i].tanggal_lahir + '"data-rekening_bank_no="' + data[i].rekening_bank_no + '"data-profile_pic="' + data[i].profile_pic + '"data-alamat="' + data[i].alamat + '"data-email="' + data[i].email + '"><i class="fa fa-search"></i></a>' +
                                '</td>' +
                                '</tr>';
                        }
                    } else {
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].seq_id + '</td>' +
                                '<td>' + data[i].name + '</td>' +
                                '<td>' + data[i].e_ktp_no + '</td>' +
                                '<td>' + data[i].tanggal_lahir + '</td>' +
                                '<td>' + data[i].rekening_bank_no + '</td>' +
                                '<td><span class="label label-warning">Pending Admin Approval</span></td>' +
                                '<td style="text-align:right;">' +
                                '<a href="javascript:void(0);" class="btn btn-info btn-xs item_edit" title="lihat detail" data-seq_id="' + data[i].seq_id + '" data-nama="' + data[i].name + '" data-e_ktp_no="' + data[i].e_ktp_no + '"data-tanggal_lahir="' + data[i].tanggal_lahir + '"data-rekening_bank_no="' + data[i].rekening_bank_no + '"data-profile_pic="' + data[i].profile_pic + '"data-alamat="' + data[i].alamat + '"data-email="' + data[i].email + '"><i class="fa fa-search"></i></a>' +
                                '</td>' +
                                '</tr>';
                        }
                    }
                    $('#tampil_data').html(html);
                }
            });
        }

        //Open upload PopUp
        $('#btnUploadCsv').on('click', function() {
            $('#Modal_Upload').modal('show');
        });

        // start import
        $('#import_csv').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>user/import_csv",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#import_csv_btn').html('Importing...');
                },
                success: function(data) {
                    $('#import_csv')[0].reset();
                    $('#import_csv_btn').attr('disabled', false);
                    $('#import_csv_btn').html('Import Done');
                    // $('#Modal_Upload').modal('hide');
                    // show_data();
                }
            })
        });
        
        //get data for selected record
        $('#tampil_data').on('click', '.item_edit', function() {
            var seq_id = $(this).data('seq_id');
            var no_ektp = $(this).data('e_ktp_no');
            var nama = $(this).data('nama');
            var alamat = $(this).data('alamat');
            var ttl = $(this).data('tanggal_lahir');
            var profil_pic = $(this).data('profile_pic');
            var email = $(this).data('email');

            $('#Modal_Edit').modal('show');
            $('[name="seq_id"]').val(seq_id);
            $('[name="e_ktp_no_edit"]').val(no_ektp);
            $('[name="nama_edit"]').val(nama);
            $('[name="alamat_edit"]').val(alamat);
            $('[name="ttl_edit"]').val(ttl);
            $('[name="email_edit"]').val(email);
            $('#profil_image').attr('src', "<?php echo site_url('/assets/images/') ?>" + profil_pic);
        });

        //update record to database
        $('#btn_update').on('click', function() {
            var seq_id = $('#seq_id').val();
            var nama = $('#nama_edit').val();
            var e_ktp = $('#e_ktp_no_edit').val();
            var dob = $('#ttl_edit').val();
            var alamat = $('#alamat_edit').val();
            var email = $('#email_edit').val();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('user/approve_update')?>",
                dataType: "JSON",
                data: {
                    seq_id: seq_id,
                    e_ktp: e_ktp,
                    dob: dob,
                    alamat: alamat,
                    email: email
                },
                success: function(data) {
                    $('#Modal_Edit').modal('hide');
                    swal({
                        title: "Berhasil!",
                        text: "Proses approval sukses",
                        icon: "success",
                    });

                }
            });
            show_data()
            return false;
        });

    });

</script>