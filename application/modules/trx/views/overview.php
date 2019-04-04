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
	            <h3 class="box-title">Overview</h3>
	            <div class="box-tools">
	             
	            </div>
	          </div>
	          <!-- /.box-header -->
	          <div class="box-body">           
	            
    <div class="col-sm-12">
        <div class="col-sm-12 start-div hidden" id="inprocess_activity" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="overview-uncomplete">
                        <div class="row">
                            <div class="image-div col-md-2 col-sm-4">
                                <img src="images/home/getstarted/icon-waiting-approval.png">
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="beginner-title">Pembukaan rekening reksadana kamu sedang dalam proses!</div>
                                <div class="beginner-sub">Terima kasih telah bergabung dengan kami. Kami akan memberitahu setelah pembukaan rekening kamu selesai.</div>
                                <div class="beginner-btn-div col-md-4" style="margin-top: 20px; padding: 0">
                                    <button class="btn btn-block" onclick="window.location.href='https://www.tanamduit.com/individual/product/productlist&amp;token=7619cd11ab44fb9df83799fa253778fb';">LIHAT PRODUK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 start-div" id="uncomplete_activity" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="overview-uncomplete">
                        <div class="row">
                            <div class="image-div col-md-2 col-sm-4">
                                <img src="images/registration/ilus-kyc.png">
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="beginner-title">
                                    Kamu belum melakukan pembukaan rekening reksa dana!                                </div>
                                <div class="beginner-sub">
                                    Untuk dapat melakukan transaksi pembelian reksa dana, kamu harus mempunyai rekening reksa dana.                                </div>
                                <div class="beginner-btn-div col-md-4" style="margin-top: 20px; padding: 0">
                                    <button class="btn btn-block" onclick="window.location.href='https://www.tanamduit.com/individual/account/registration_signup&amp;token=7619cd11ab44fb9df83799fa253778fb';">BUKA REKENING SEKARANG</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 start-div hidden" id="rejected_kyc" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="overview-uncomplete">
                        <div class="row">
                            <div class="image-div col-md-2 col-sm-4">
                                <img src="images/registration/ilus-kyc.png">
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="beginner-title">
                                    Pembukaan rekening kamu belum benar!                                </div>
                                <div class="beginner-sub">
                                    Untuk dapat melakukan transaksi pembelian reksa dana, kamu harus menyelesaikan pembukaan rekening reksa dana dengan memperbaiki data dirimu.                                </div>
                                <div class="beginner-btn-div col-md-4" style="margin-top: 20px; padding: 0">
                                    <button class="btn btn-block" onclick="window.location.href='https://www.tanamduit.com/individual/account/registration_signup&amp;token=7619cd11ab44fb9df83799fa253778fb';">PERBAIKI SEKARANG</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 start-div hidden" id="upload_kyc" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="overview-uncomplete">
                        <div class="row">
                            <div class="image-div col-md-2 col-sm-4">
                                <img src="images/registration/ilus-kyc.png">
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <div class="beginner-title">
                                    Pembukaan rekening kamu belum lengkap!                                </div>
                                <div class="beginner-sub">
                                    Untuk dapat melakukan transaksi pembelian reksa dana, kamu harus menyelesaikan pembukaan rekening reksa dana dengan melengkapi data dirimu.                                </div>
                                <div class="beginner-btn-div col-md-4" style="margin-top: 20px; padding: 0">
                                    <button class="btn btn-block" onclick="window.location.href='https://www.tanamduit.com/individual/account/registration_signup&amp;token=7619cd11ab44fb9df83799fa253778fb';">LENGKAPI SEKARANG</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 promo-div hidden" style="margin-bottom: 20px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-div-2">
                        <div class="text-right">
                            <a href="#">View all Promos &gt;</a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-6">
                                <img class="img-responsive" src="http://via.placeholder.com/200x100">
                            </div>
                            <div class="col-xs-6">
                                <img class="img-responsive" src="http://via.placeholder.com/200x100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-7 col-sm-margin-bottom">

        <div class="col-sm-12 start-div hidden" id="pendingpaymentsdiv">
            <span class="overview-div-title"><img class="overview-icon-portrait" src="images/overview/icon-pending-payments.png"> Transaksi Tertunda</span>
            <div class="overview-pending-div" id="pendingpaymentlist"></div>
        </div>

        <div class="col-sm-12 start-div" id="getstarteddiv">
            <div class="row">
                <div class="col-sm-6">
                    <div class="overview-beginner">
                        <div class="image-div">
                            <img src="images/home/getstarted/ilus-beginner.png">
                        </div>
                        <div class="overview-height">
                            <div class="beginner-title">Belum Pernah Investasi?</div>
                            <div class="beginner-sub">Jangan takut, kami akan membantumu.</div>
                        </div>
                        <div class="beginner-btn-div">
                            <button class="btn btn-block" onclick="window.location.href='https://www.tanamduit.com/individual/education/beginner';">PELAJARI</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="overview-pro">
                        <div class="image-div">
                            <img src="images/home/getstarted/ilus-pro.png">
                        </div>
                        <div class="overview-height">
                            <div class="pro-title">Sudah Biasa Investasi?</div>
                            <div class="pro-sub">Wow, kamu keren! Yuk langsung pilih produknya.</div>
                        </div>
                        <div class="pro-browse-div">
                            <button class="btn btn-block" onclick="window.location.href='https://www.tanamduit.com/individual/product/productlist';">PILIH PRODUK</button>
                        </div>
                        <!-- <div class="pro-start-div">
                            <button class="btn btn-block create-goal-button">MULAI BUAT TUJUAN</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 promo-div hidden">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-div-2">
                        <div class="text-right">
                            <a href="#">View all Promos &gt;</a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-6">
                                <img class="img-responsive" src="http://via.placeholder.com/200x100">
                            </div>
                            <div class="col-xs-6">
                                <img class="img-responsive" src="http://via.placeholder.com/200x100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5 overview-right-div padding-0">
        <div class="col-sm-12 overview-jump-sbn hidden" id="jumpDiv">
            
            <div class="row overview-jump-item clickable-jump">
                <div class="col-sm-2">
                    <img class="overview-jump-logo" src="images/icon_sbn.png">
                </div>
                <div class="col-sm-10 text-center overview-jump-text-div">
                    <span class="overview-jump-text">LIHAT PORTOFOLIO SURAT BERHARGA NEGARA</span>
                </div>
            </div>
            
        </div>
        <div class="col-sm-12 overview-investment-div">
            <span class="overview-div-title mar-left-10"><img src="images/overview/icon-investment-growth.png" class="overview-icon"> Ringkasan Keuangan Saya</span>
            <div class="row overview-investment-row">
                <div class="col-sm-12">
                    <div class="row overview-investment-item">
                        <div class="col-sm-1 vcenter">
                            <img class="investment-logo" src="images/overview/icon-current-investment.png">
                        </div><!--
                        --><div class="col-sm-10 vcenter">
                            <span class="investment-item-title">Total Nilai Saat Ini</span>
                            <br>
                            <span class="investment-item-money" id="total_market_value">Rp0.00</span>
                        </div>
                    </div>
                    <div class="row overview-investment-item">
                        <div class="col-sm-1 vcenter">
                            <img class="investment-logo" src="images/overview/icon-total-investment.png">
                            </div><!--
                        --><div class="col-sm-10 vcenter">
                            <span class="investment-item-title">Total Modal Beli</span>
                            <br>
                            <span class="investment-item-money" id="total_cost">Rp0.00</span>
                        </div>
                    </div>
                    <div class="row overview-investment-item">
                        <div class="col-sm-1 vcenter">
                            <img class="investment-logo" src="images/overview/icon-potential-loss.png">
                            </div><!--
                        --><div class="col-sm-10 vcenter">
                            <span class="investment-item-title">Total Potensi Laba / Rugi</span>
                            <br>
                            <span class="investment-item-money" id="total_gain_loss">Rp0.00</span>&nbsp;<span class="investment-item-money" id="total_gain_loss_pct"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row investment-download-div">
                <div class="col-sm-12">
                    <button class="btn btn-block portfolio-new" onclick="window.location.href='https://www.tanamduit.com/individual/product/productlist';">PILIH PRODUK</button>
                </div>
            </div>
            <div class="row investment-download-div hidden">
                <div class="col-sm-12">
                    <button class="btn btn-block investment-download create-goal-button">MULAI BUAT TUJUAN</button>
                </div>
            </div>
        </div>

        <div class="col-sm-12 overview-portfolio-div hidden">
            <span class="overview-div-title mar-left-10"><img src="images/overview/icon-portfoliosummary.png" class="overview-icon-portrait"> Portofolio Keuangan Saya</span>
            <div class="row overview-portfolio-row">
                <div class="col-sm-12 padding-0" id="portfolio_summary_list"></div>
            </div>
            <div class="row investment-download-div hidden">
                <div class="col-sm-12">
                    <button class="btn btn-block portfolio-new">+ New Direct Investment</button>
                </div>
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