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
               <button type="button" id="btnApprove" class="btn-sm  btn btn-success modalButtonUser" data-toggle="modal"><i class="glyphicon glyphicon glyphicon-ok"></i> Approve User</button>
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

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detail Registrasi User</h4>
                  </div>
                  <div class="modal-body">
                    
                   <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="nama_matkul">User ID </label>
                      <input type="text" class="form-control" id="seq_id" name="seq_id">
                    </div>
                  </div>
                  
                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="nama_matkul">Nama </label>
                      <input type="text" class="form-control" id="users_id" name="users_id">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="sks">No EKTP</label>
                      <input type="text" class="form-control" id="e_ktp_no" name="e_ktp_no">
                    </div>
                    </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="prodi">TTL</label>
                      <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                  </div>   
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="prodi">No Rekening</label>
                      <input type="text" class="form-control" id="rekening_bank_code" name="rekening_bank_code">
                    </div>
                  </div>  
                   <input type="hidden" class="form-control" id="user_type" name="user_type" value="<?php echo $this->session->userdata('user_details')[0]->user_type;?>">
                  </div>
                  <div class="modal-footer">
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Approve User</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </form>
        <!--END MODAL EDIT-->       
    </section>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        show_data(); //call function show all product   
        $('#mydata').dataTable();
          
        //function show all product
        function show_data(){
            var role = $('#user_type').val();
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('user/get_acc_registered_list')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    if (role=='Manager') {
                      for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+data[i].seq_id+'</td>'+
                                        '<td>'+data[i].users_id+'</td>'+
                                        '<td>'+data[i].e_ktp_no+'</td>'+
                                        '<td>'+data[i].tanggal_lahir+'</td>'+
                                        '<td>'+data[i].rekening_bank_no+'</td>'+
                                        '<td><span class="label label-success">Pending Manager Approval</span></td>'+
                                        '<td style="text-align:right;">'+
                                            '<a href="javascript:void(0);" class="btn btn-info btn-xs item_edit" title="lihat detail" data-seq_id="'+data[i].seq_id+'" data-users_id="'+data[i].users_id+'" data-e_ktp_no="'+data[i].e_ktp_no+'"data-tanggal_lahir="'+data[i].tanggal_lahir+'"data-rekening_bank_no="'+data[i].rekening_bank_no+'"data-rekening_bank_code="'+data[i].rekening_bank_code+'"data-nama_lengkap="'+data[i].nama_lengkap+'"><i class="fa fa-file-text-o"></i></a>'+
                                        '</td>'+
                                    '</tr>';
                        }
                    } else {
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                        '<td>'+data[i].seq_id+'</td>'+
                                        '<td>'+data[i].users_id+'</td>'+
                                        '<td>'+data[i].e_ktp_no+'</td>'+
                                        '<td>'+data[i].tanggal_lahir+'</td>'+
                                        '<td>'+data[i].rekening_bank_no+'</td>'+
                                        '<td><span class="label label-warning">Pending Admin Approval</span></td>'+
                                        '<td style="text-align:right;">'+
                                            '<a href="javascript:void(0);" class="btn btn-info btn-xs item_edit" title="lihat detail" data-seq_id="'+data[i].seq_id+'" data-users_id="'+data[i].users_id+'" data-e_ktp_no="'+data[i].e_ktp_no+'"data-tanggal_lahir="'+data[i].tanggal_lahir+'"data-rekening_bank_no="'+data[i].rekening_bank_no+'"data-rekening_bank_code="'+data[i].rekening_bank_code+'"data-nama_lengkap="'+data[i].nama_lengkap+'"><i class="fa fa-file-text-o"></i></a>'+
                                        '</td>'+
                                    '</tr>';
                        }
                    }

                    
                    $('#tampil_data').html(html);
                }
            });
        }
 
        //Save product
        $('#btnApprove').on('click',function(){
            alert('holla');
        });
 
        //get data for selected record
        $('#tampil_data').on('click','.item_edit',function(){
            var seq_id          = $(this).data('seq_id');
            var no_induk        = $(this).data('no_induk');
            var role            = $(this).data('role');
            var nama            = $(this).data('nama');
            var nama_lengkap    = $(this).data('nama_lengkap');
            var bank            = $(this).data('nama_bank');
            var rekening        = $(this).data('no_rekening');
             
            $('#Modal_Edit').modal('show');
            $('[name="seq_id"]').val(seq_id);
            $('[name="no_induk_edit"]').val(no_induk);
            $('[name="role_edit"]').val(role);
            $('[name="nama_edit"]').val(nama);
            $('[name="nama_lengkap_edit"]').val(nama_lengkap);
            $('[name="bank_edit"]').val(bank);
            $('[name="rekening_edit"]').val(rekening);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var seq_id         = $('#seq_id').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('user/approve_update')?>",
                dataType : "JSON",
                data : {seq_id:seq_id},
                success: function(data){
                    $('#Modal_Edit').modal('hide');
                    swal({
                      title:  "Berhasil!",
                      text:   "Proses approval sukses",
                      icon:   "success",
                    });
                }
            });
            return false;
        });
 
    });
 
</script>