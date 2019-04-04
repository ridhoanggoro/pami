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
	          <div class="box-body">           
						<div class="container overview-content pad-bottom-30" id="overview-list" style="margin-bottom: 30px; margin-top: 0px !important;">
							<div class="col-sm-5 portfolio-right-div padding-0 hidden" id="jumpDiv">
									<div class="col-sm-9 col-sm-offset-3 portfolio-jump-sbn" id="jumpInnerDiv">    
											<div class="row portfolio-jump-item clickable-jump">
													<div class="col-sm-2">
															<img class="portfolio-jump-logo" src="images/icon_sbn.png">
													</div>
													<div class="col-sm-10 text-center portfolio-jump-text-div">
															<span class="portfolio-jump-text">LIHAT PORTOFOLIO SURAT BERHARGA NEGARA</span>
													</div>
											</div>        
									</div>
							</div>
							<div class="col-xs-12" id="list-container" style="margin-top: 20px;"><div class="col-xs-12 portfolio-header hidden-xs"><div class="row"><div class="hidden-sm col-sm-1"><span>Manajer Investasi</span></div><div class="col-sm-2"><span>Nama Produk</span></div><div class="col-sm-2"><span>Nilai Saat Ini</span></div><div class="col-md-2 col-sm-2"><span>Modal Beli</span></div><div class="col-sm-1"><span>Potensi Laba/Rugi</span></div><div class="col-sm-2"><span>NAB/Unit</span></div><div class="col-sm-1"><span>Total Unit<br>Kepemilikan</span></div><div class="col-sm-1"><span>Unit Tersedia<br>Untuk Dijual</span></div></div></div><div class="col-xs-12 portfolio-empty-col"><img src="images/account/ilus-eggbasket.png"><span>Anda belum membeli reksa dana apa pun.<br>Ingatlah untuk tidak menaruh semua telur Anda dalam satu keranjang!</span><button class="btn" onclick="window.location.href=$('#baseURL').val() + '/product/productlist';">MULAI INVESTASI</button></div></div>
							</div>
						</div>
	          <!-- /.box-body -->
	        </div>
	        <!-- /.box -->
          </div>
        </div>        
    </section>
</div>