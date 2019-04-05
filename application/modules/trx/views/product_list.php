<div class="content-wrapper">
<!-- Content Header (Page header) -->
<!-- Main content -->
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
            <h3 class="box-title">Product</h3>
            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">           
            <table id="example1" class="table table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th>Product Code</th>
                  <th>Nama Produk </th>
                  <th>Jenis Produk</th>
                  <th>Tingkat Resiko</th>
                  <th>Kinerja 1 Tahun</th>
                  <th>Total Dana Kelolaan</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="tampil_data">
              <tr>
              <?php foreach ($product_details->result() as $row) {
                ?>
              
                <td><img class="img-circle img-bordered-sm" width= "60px" src="<?php echo base_url();?>/assets/images/<?php echo $row->logo; ?>" alt="Product Image"></td>
                <td><?php echo $row->product_id; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->type; ?></td>
                <td><?php if($row->risk_level=='Rendah') { echo '<span class="label label-success">'.$row->risk_level.'</span>'; } else {
                  echo '<span class="label label-danger">'.$row->risk_level.'</span>';
                }?>
                </td>
                <td><?php echo $row->performance.'%'; ?></td>
                <td><?php echo $row->total_asset; ?></td>
                <td><a class="btn btn-app item_beli" data-product_id="<?php echo $row->product_id; ?>" data-product_name="<?php echo $row->name; ?>" data-logo="<?php echo $row->logo; ?>"><i class="fa fa-inbox"></i> Beli Produk Ini</a></td>
              </tr>
              <?php } ?>
              </tbody> 
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>  

<!-- Modal -->
<div class="modal fade" id="Modal_beli" tabindex="-1" role="dialog" 
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
                Masukkan Nilai Pembelian
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">                
                <form class="form" role="form">
                <label>Anda Akan melakukan pembelian produk</label>
                <div class="user-block c1">

                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>/assets/images/product.png" alt="User Image">
                        <span class="username">
                        <a href="#">text</a>
                        </span>
                    <span class="description">desc...</span>
                  </div>
                  <div class="form-group">
                    <label>Masukkan jumlah yang ingin anda beli</label>
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="number" id="pembelian" name="pembelian" class="form-control" placeholder="Masukkan angka pembelian">
                    </div>                
                  </div>                        
                </form>
              </div>
              <input type="hidden" class="form-control" id="user_type" name="user_type" value="<?php echo $this->session->userdata ('user_details')[0]->user_type; ?>"/>
              <input type="hidden" class="form-control" id="email_edit" name="email_edit"/>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" type="submit" id="btn_update" class="btn btn-primary">Proses</button>
            </div>
        </div>
    </div>
</div>      

<script type="text/javascript">
    $(document).ready(function(){
        //get data for selected record
        $('#tampil_data').on('click','.item_beli',function(){
            var product_id          = $(this).data('product_id');          
            var product_name        = $(this).data('product_name');
            var product_pict        = $(this).data('logo');
             
            $div = $('.c1');
            $h4 = $div.find('a');
            $h4.text(product_name);

            $('#Modal_beli').modal('show');
            
            $('[name="e_ktp_no_edit"]').val(no_ektp);       
            $('#profil_image').attr('src',"<?php echo site_url('/assets/images/') ?>" + product_pic);           
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var seq_id         = $('#seq_id').val();
            var nama           = $('#nama_edit').val();
            var e_ktp          = $('#e_ktp_no_edit').val();
            var dob            = $('#ttl_edit').val();
            var alamat         = $('#alamat_edit').val();
            var email          = $('#email_edit').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('user/approve_update')?>",
                dataType : "JSON",
                data : {seq_id:seq_id, e_ktp:e_ktp, dob:dob, alamat:alamat, email:email},
                success: function(data){
                    $('#Modal_beli').modal('hide');
                    swal({
                      title:  "Berhasil!",
                      text:   "Pembelian sukses",
                      icon:   "success",
                    });
                    
                }
            });
            show_data()
            return false;
        });
 
    });
 
</script>