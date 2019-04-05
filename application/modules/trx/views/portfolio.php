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
	            <h3 class="box-title">Portfolio</h3>
	            <div class="box-tools">
			
	            </div>
	          </div>
	          <!-- /.box-header -->
	          <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
								<tr>
                  <th>Nama Produk</th>
                  <th>Nilai Saat Ini</th>
                  <th>Modal Beli</th>
                  <th>Potensi Laba/Rugi</th>
                  <th>NAB/Unit</th>
									<th>Total Unit Kepemilikan</th>
									<th>Unit Tersedia Untuk Dijual</th>
                </tr>
                <tr>
                  <td colspan="7">Anda belum membeli reksa dana apa pun.</td>                  									
                </tr>   
								<tr>
                  <td colspan="7"><a href="<?php echo base_url('trx/product_list');?>" class="btn btn-primary btn-block margin-bottom">Mulai Investasi</a></td>                  									
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