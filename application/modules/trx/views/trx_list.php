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
	            <h3 class="box-title">Transaksi</h3>
	            <div class="box-tools">
	             
	            </div>
	          </div>
	          <!-- /.box-header -->
	          <div class="box-body">           
              
        <div class="col-sm-5 history-right-div padding-0 hidden" id="jumpDiv">
            <div class="col-sm-9 col-sm-offset-3 history-jump-sbn" id="jumpInnerDiv">    
                <div class="row history-jump-item clickable-jump-history">
                    <div class="col-sm-2">
                        <img class="history-jump-logo" src="images/icon_sbn.png">
                    </div>
                    <div class="col-sm-10 text-center history-jump-text-div">
                        <span class="history-jump-text">LIHAT TRANSAKSI SURAT BERHARGA NEGARA</span>
                    </div>
                </div>        
            </div>
        </div>
        <div class="col-xs-12 transactions-header hidden-xs">
            <div class="row">
                <div class="col-sm-1">
                    <span>Tanggal Transaksi</span>
                </div>
                <div class="col-md-4 col-sm-3" style="display: flex">
                    <div class="header-product-div">
                        <span>Manajer Investasi</span>
                </div>
                    <div class="header-order-div">
                        <span>No. Pemesanan</span>
                </div>
                </div>
                <div class="col-sm-1">
                    <span>Jenis Transaksi</span>
                </div>
                <div class="col-md-2 col-sm-3">
                    <span>Nilai Transaksi</span>
                </div>
                <div class="col-sm-2">
                    <span>Tujuan Investasi</span>
                </div>
                <div class="col-sm-2">
                    <span>Status</span>
                </div>
            </div>
        </div>
        <div id="list-container" class="col-md-12 transactions-empty-col"><img src="images/account/ilus-chicken.png"><span>Anda belum membeli reksa dana apa pun.<br>Jangan menunda untuk berinvestasi, Anda bisa mulai dari Rp 50 ribu.</span><button class="btn" onclick="window.location.href=$('#baseURL').val() + '/product/productlist';">MULAI INVESTASI</button></div>
    
	          </div>
	          <!-- /.box-body -->
	        </div>
	        <!-- /.box -->
          </div>
        </div>        
    </section>
</div>