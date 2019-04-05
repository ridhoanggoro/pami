<div class="content-wrapper">
   <section class="content">
   	<?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
  	<?php } ?>
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Transaksi</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Tanggal Transaksi</th>
                  <th>No. Order</th>
                  <th>Jenis Transaksi</th>
                  <th>Nilai Transaksi</th>
                  <th>Status Transaksi</th>
                </tr>
                <tr>
                  <td>Sample Data</td>
                  <td>Sample Data</td>
                  <td>Sample Data</td>
                  <td>Sample Data</td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                
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