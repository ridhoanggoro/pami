<div class="content-wrapper">
   <section class="content">
   	<?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
  	<?php } ?>
		<?php if(isset($registrasi_info)) { ?>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-info"></i> Registrasi Sedang Di Review!</h4>
      <?php echo $registrasi_info; ?>
    </div>  
  <?php } ?>
        <div class="row">
          <div class="col-xs-12">
          	<div class="box box-success">
	          <div class="box-header with-border">
	            <h3 class="box-title">Overview</h3>
	            <div class="box-tools">
	             
	            </div>
	          </div>
	          <!-- /.box-header -->
	          <div class="box-body">  
			  <?php $stat = $this->Trx_model->is_registered($this->session->userdata('user_details')[0]->users_id);                 
                if($stat->num_rows() === 0){ ?>
              <div class="row">
				  <div class="col-lg-12 col-xs-12">
					<!-- small box -->					
					<div class="small-box bg-aqua color-palette">
						<div class="inner">
						<h2>Kamu belum melakukan pembukaan rekening reksa dana!</h2>
						<p>Untuk dapat melakukan transaksi pembelian reksa dana, kamu harus mempunyai rekening reksa dana.</p>
						</div>
						<div class="icon">
						<i class="fa fa-ticket"></i>
						</div>
						<a href="<?php echo base_url('user/registrasi');?>" class="small-box-footer">
						Buka Rekening Sekarang <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				  </div>                
              </div>
                <?php } ?>  
			  <div class="row">
				<div class="col-lg-3 col-xs-12">
					<!-- small box -->
					<div class="small-box bg-yellow color-palette">
						<div class="inner">
						<h2>Belum Pernah Investasi?</h2>

						<p>Jangan takut, kami akan membantumu.</p>
						</div>
						<div class="icon">
						<i class="fa fa-question-circle"></i>
						</div>
						<a href="#" class="small-box-footer">
						Buka Rekening Sekarang <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-xs-12">
					<!-- small box -->
					<div class="small-box bg-aqua color-palette">
						<div class="inner">
						<h2>Sudah Biasa Investasi?</h2>

						<p>Wow, kamu keren! Yuk langsung pilih produknya.</p>
						</div>
						<div class="icon">
						<i class="fa fa-tasks"></i>
						</div>
						<a href="<?php echo base_url('trx/product_list');?>" class="small-box-footer">
						Pilih Produk <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>	
				<div class="col-lg-6 col-xs-12">
					<!-- small box -->
					<div class="small-box bg-teal color-palette">                        
						<div class="inner">
                        <h2>Ringkasan Keuangan Saya</h2>
						<span class="investment-item-title">Total Nilai Saat Ini</span>
						<p>
						<h3>Rp0.00</h3>
						</p>
						<span class="investment-item-title">Total Modal Beli</span>
						<p>
						<h3>Rp0.00</h3>
						</p>
						<span class="investment-item-title">Total Potensi Laba / Rugi</span>
						<p>
						<h3>Rp0.00</span>&nbsp;<span class="investment-item-money" id="total_gain_loss_pct"></h3>
						</p>
						</div>
						<div class="icon">
						<i class="fa fa-line-chart"></i>
						</div>
						<a href="<?php echo base_url('trx/product_list');?>" class="small-box-footer">
						Pilih Produk <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>					
			  </div>			
	          </div>
	          <!-- /.box-body -->
	        </div>
	        <!-- /.box -->
          </div>
        </div>        
    </section>
</div>