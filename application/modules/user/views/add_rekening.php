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
						<h3 class="box-title">Registrasi Pembukaan Akun</h3>
						<div class="box-tools">
						
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">           
					<form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">

					<!-- SmartWizard html -->
					<div id="smartwizard">
						<ul>
							<li><a href="#step-1">Step 1<br /><small>Data Diri</small></a></li>
							<li><a href="#step-2">Step 2<br /><small>Penghasilan</small></a></li>
							<li><a href="#step-3">Step 3<br /><small>Rekening Bank </small></a></li>
							<li><a href="#step-4">Step 4<br /><small>Pernyataan Persetujuan</small></a></li>
						</ul>

						<div>
							<div id="step-1">	
								<!-- step-0 -->				
								<div id="form-step-0" role="form" data-toggle="validator">
									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Nomor E-KTP</label>
											<input id="id_number" name="id_number" maxlength="16" class="form-control input-text" placeholder="Masukkan Nomor E-KTP kamu" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Nama</label>
											<input id="fullname" name="fullname" maxlength="130" type="text" class="form-control input-text" placeholder="Masukkan nama kamu sesuai E-KTP" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
										<label for="exampleInputFile">Upload Foto KTP</label>
										<div class="dropzone">
											<div class="dz-message">
												<h3> Klik atau Drop Foto disini</h3>
											</div>
										</div>
										<p class="help-block"><i>pastikan foto jelas dapat terbaca dan ukuran foto tidak lebih dari 10MB</i></p>
										</div>
									</div>
									<div id="foto_result" name="foto_result">
										<input id="foto" name="foto" type="text" class="input-text" hidden="">
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Nama Ibu Kandung</label>
											<input id="mother_name" name="mother_name" maxlength="50" type="text" class="mandatory form-control input-text" placeholder="Masukkan Nama Ibu Kandung kamu">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Tempat Lahir</label>
											<input id="place_of_birth" name="place_of_birth" maxlength="100" type="text" class="mandatory form-control input-text" placeholder="Masukkan Tempat Lahir kamu">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Tempat Lahir</label>
											<input id="place_of_birth" name="place_of_birth" maxlength="100" type="text" class="mandatory form-control input-text" placeholder="Masukkan Tempat Lahir kamu">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-6 col-sm-12">
											<label class="input-label">Tanggal Lahir</label>
											<input id="date_of_birth" readonly="" name="date_of_birth" maxlength="15" type="hidden" class="mandatory form-control input-text hasDatepicker" placeholder="Masukkan Tanggal Lahir kamu">

											<div class="form-group" id="dob-input">
												<div class="col-xs-4">
													<select id="dob-date" name="dob-date" class="form-control input-select input-dob-date">
														<option id="opt_00" value="" disabled="" selected="">DD</option>
														<option id="opt_1" value="01">01</option>
														<option id="opt_2" value="02">02</option>
														<option id="opt_3" value="03">03</option>
														<option id="opt_4" value="04">04</option>
														<option id="opt_5" value="05">05</option>
														<option id="opt_6" value="06">06</option>
														<option id="opt_7" value="07">07</option>
														<option id="opt_8" value="08">08</option>
														<option id="opt_9" value="09">09</option>
														<option id="opt_10" value="10">10</option>
														<option id="opt_11" value="11">11</option>
														<option id="opt_12" value="12">12</option>
														<option id="opt_13" value="13">13</option>
														<option id="opt_14" value="14">14</option>
														<option id="opt_15" value="15">15</option>
														<option id="opt_16" value="16">16</option>
														<option id="opt_17" value="17">17</option>
														<option id="opt_18" value="18">18</option>
														<option id="opt_19" value="19">19</option>
														<option id="opt_20" value="20">20</option>
														<option id="opt_21" value="21">21</option>
														<option id="opt_22" value="22">22</option>
														<option id="opt_23" value="23">23</option>
														<option id="opt_24" value="24">24</option>
														<option id="opt_25" value="25">25</option>
														<option id="opt_26" value="26">26</option>
														<option id="opt_27" value="27">27</option>
														<option id="opt_28" value="28">28</option>
														<option id="opt_29" value="29">29</option>
														<option id="opt_30" value="30">30</option>
														<option id="opt_31" value="31">31</option>
													</select>
												</div>
												<div class="col-xs-4 input-dob-month-div">
													<select class="form-control input-select" id="dob-month" name="dob-month">
														<option id="opt_month_0" value="" disabled="" selected="">Bulan</option>
														<option id="opt_month_1" value="01">Jan</option>
														<option id="opt_month_2" value="02">Feb</option>
														<option id="opt_month_3" value="03">Mar</option>
														<option id="opt_month_4" value="04">Apr</option>
														<option id="opt_month_5" value="05">May</option>
														<option id="opt_month_6" value="06">Jun</option>
														<option id="opt_month_7" value="07">Jul</option>
														<option id="opt_month_8" value="08">Aug</option>
														<option id="opt_month_9" value="09">Sep</option>
														<option id="opt_month_10" value="10">Oct</option>
														<option id="opt_month_11" value="11">Nov</option>
														<option id="opt_month_12" value="12">Dec</option>
													</select>
													<div class="help-block with-errors"></div>
												</div>
												<div class="col-xs-4">
													<input type="number" class="form-control input-text input-dob-year" placeholder="YYYY" maxlength="4" id="dob-year" name="dob-year">
												</div>
											</div>
											<!-- <input type="text" id="dob-input" class="mandatory form-control input-text dob-input" placeholder="DD-MM-YYYY"> -->
										</div>
										
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Status Perkawinan</label>
											<select id="marital_status" name="marital_status" class="form-control">
												<option value="">Pilih Status Perkawinan</option>
												<option value="1">Belum Menikah</option>
												<option value="2">Menikah</option>
												<option value="3">Bercerai</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>								
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Pendidikan Terakhir</label>
											<select id="education" name="education" class="form-control select2" style="width: 100%;">
												<option value="">Pilih Pendidikan Terakhir</option>
												<option value="1" id="education_1">Sekolah Dasar</option>
												<option value="2" id="education_2">SMP</option>
												<option value="3" id="education_3">SMA</option>
												<option value="4" id="education_4">D3</option>
												<option value="5" id="education_5">S1</option>
												<option value="6" id="education_6">S2</option>
												<option value="7" id="education_7">S3</option>
												<option value="8" id="education_8">Lainnya</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>								
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Agama</label>
											<select id="religion" name="religion" class="form-control select2" style="width: 100%;" required>
												<option value="">Pilih Agama</option>
												<option value="1" id="religion_1">Islam</option>
												<option value="2" id="religion_2">Protestan</option>
												<option value="3" id="religion_3">Katolik</option>
												<option value="4" id="religion_4">Hindu</option>
												<option value="5" id="religion_5">Budha</option>
												<option value="6" id="religion_6">Konghucu</option>
												<option value="7" id="religion_7">Lainnya</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>								
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Nomor ponsel</label>
											<div class="input-group" id="mobile_phone_number_group">
												<span class="input-group-addon input-addon">+62</span>
												<input id="mobile_phone_number" name="mobile_phone_number" maxlength="25" type="tel" class="mandatory form-control input-text" placeholder="Masukkan Nomor Ponsel kamu">										
											</div>
											<span id="error-personal-phone-number" class="error-msg"></span>
											<p><i>Nomor telepon ini akan digunakan pada saat transaksi penjualan dan pengalihan portofolio kamu.</i></p>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="row hidden">
										<div class="col-md-12">
											<label class="control-label input-label">Alamat email</label>
											<input id="email" name="email" maxlength="255" type="email" class="form-control mandatory input-text" placeholder="Masukkan alamat Email kamu">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="input-label">Alamat di E-KTP</label>
											<textarea id="ktp_address" name="ktp_address" maxlength="100" class="form-control" placeholder="Masukkan Alamat di E-KTP" required></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-8">
											<label class="input-label">Kota</label>
											<select id="ktp_city" name="ktp_city" class="form-control select2" style="width: 100%;" required>
												<option value="">Pilih Kota</option>
												<option value="3173" id="ktp_city_3173">JAKARTA BARAT (KODYA)</option>
												<option value="3171" id="ktp_city_3171">JAKARTA PUSAT (KODYA)</option>
												<option value="3174" id="ktp_city_3174">JAKARTA SELATAN (KODYA)</option>
												<option value="3175" id="ktp_city_3175">JAKARTA TIMUR (KODYA)</option>
												<option value="3172" id="ktp_city_3172">JAKARTA UTARA (KODYA)</option>
												<option value="3201" id="ktp_city_3201">BOGOR (KAB.)</option>
												<option value="3271" id="ktp_city_3271">BOGOR (KOTA)</option>
												<option value="3276" id="ktp_city_3276">DEPOK (KOTA)</option>
												<option value="3674" id="ktp_city_3674">KOTA TANGERANG SELATAN</option>
												<option value="3603" id="ktp_city_3603">TANGERANG (KAB.)</option>
												<option value="3671" id="ktp_city_3671">TANGERANG (KOTA)</option>
												<option value="3216" id="ktp_city_3216">BEKASI (KAB.)</option>
												<option value="3275" id="ktp_city_3275">BEKASI (KOTA)</option>
												<option value="1105" id="ktp_city_1105">ACEH BARAT (KAB.)</option>
												<option value="1112" id="ktp_city_1112">ACEH BARAT DAYA (KAB.)</option>
												<option value="1106" id="ktp_city_1106">ACEH BESAR (KAB.)</option>
												<option value="1114" id="ktp_city_1114">ACEH JAYA (KAB.)</option>
												<option value="1101" id="ktp_city_1101">ACEH SELATAN (KAB.)</option>
												<option value="1110" id="ktp_city_1110">ACEH SINGKIL (KAB.)</option>
												<option value="1116" id="ktp_city_1116">ACEH TAMIANG (KAB.)</option>
												<option value="1104" id="ktp_city_1104">ACEH TENGAH (KAB.)</option>
												<option value="1102" id="ktp_city_1102">ACEH TENGGARA (KAB.)</option>
												<option value="1103" id="ktp_city_1103">ACEH TIMUR (KAB.)</option>
												<option value="1108" id="ktp_city_1108">ACEH UTARA (KAB.)</option>
												<option value="3101" id="ktp_city_3101">ADM. KEP. SERIBU (KAB.)</option>
												<option value="1306" id="ktp_city_1306">AGAM (KAB.)</option>
												<option value="5305" id="ktp_city_5305">ALOR (KAB.)</option>
												<option value="8171" id="ktp_city_8171">AMBON (KOTA)</option>
												<option value="1209" id="ktp_city_1209">ASAHAN (KAB.)</option>
												<option value="9118" id="ktp_city_9118">ASMAT (KAB.)</option>
												<option value="5103" id="ktp_city_5103">BADUNG (KAB.)</option>
												<option value="6311" id="ktp_city_6311">BALANGAN (KAB.)</option>
												<option value="6471" id="ktp_city_6471">BALIKPAPAN (KOTA)</option>
												<option value="1171" id="ktp_city_1171">BANDA ACEH (KOTA)</option>
												<option value="1871" id="ktp_city_1871">BANDAR LAMPUNG (KOTA)</option>
												<option value="3204" id="ktp_city_3204">BANDUNG (KAB.)</option>
												<option value="3273" id="ktp_city_3273">BANDUNG (KOTA)</option>
												<option value="3217" id="ktp_city_3217">BANDUNG BARAT (KAB.)</option>
												<option value="7201" id="ktp_city_7201">BANGGAI (KAB.)</option>
												<option value="7207" id="ktp_city_7207">BANGGAI KEPULAUAN (KAB.)</option>
												<option value="7211" id="ktp_city_7211">BANGGAI LAUT</option>
												<option value="1901" id="ktp_city_1901">BANGKA (KAB.)</option>
												<option value="1905" id="ktp_city_1905">BANGKA BARAT (KAB.)</option>
												<option value="1903" id="ktp_city_1903">BANGKA SELATAN (KAB.)</option>
												<option value="1904" id="ktp_city_1904">BANGKA TENGAH (KAB.)</option>
												<option value="3526" id="ktp_city_3526">BANGKALAN (KAB.)</option>
												<option value="5106" id="ktp_city_5106">BANGLI (KAB.)</option>
												<option value="6303" id="ktp_city_6303">BANJAR (KAB.)</option>
												<option value="3279" id="ktp_city_3279">BANJAR (KOTA)</option>
												<option value="6372" id="ktp_city_6372">BANJARBARU (KOTA)</option>
												<option value="6371" id="ktp_city_6371">BANJARMASIN (KOTA)</option>
												<option value="3304" id="ktp_city_3304">BANJARNEGARA (KAB.)</option>
												<option value="7303" id="ktp_city_7303">BANTAENG (KAB.)</option>
												<option value="3402" id="ktp_city_3402">BANTUL (KAB.)</option>
												<option value="1607" id="ktp_city_1607">BANYUASIN (KAB.)</option>
												<option value="3302" id="ktp_city_3302">BANYUMAS (KAB.)</option>
												<option value="3510" id="ktp_city_3510">BANYUWANGI (KAB.)</option>
												<option value="6304" id="ktp_city_6304">BARITO KUALA (KAB.)</option>
												<option value="6204" id="ktp_city_6204">BARITO SELATAN (KAB.)</option>
												<option value="6213" id="ktp_city_6213">BARITO TIMUR (KAB.)</option>
												<option value="6205" id="ktp_city_6205">BARITO UTARA (KAB.)</option>
												<option value="7311" id="ktp_city_7311">BARRU (KAB.)</option>
												<option value="2171" id="ktp_city_2171">BATAM (KOTA)</option>
												<option value="3325" id="ktp_city_3325">BATANG (KAB.)</option>
												<option value="1504" id="ktp_city_1504">BATANGHARI (KAB.)</option>
												<option value="3579" id="ktp_city_3579">BATU (KOTA)</option>
												<option value="1219" id="ktp_city_1219">BATU BARA (KAB.)</option>
												<option value="7472" id="ktp_city_7472">BAU BAU (KOTA)</option>
												<option value="1902" id="ktp_city_1902">BELITUNG (KAB.)</option>
												<option value="1906" id="ktp_city_1906">BELITUNG TIMUR (KAB.)</option>
												<option value="5304" id="ktp_city_5304">BELU (KAB.)</option>
												<option value="1117" id="ktp_city_1117">BENER MERIAH (KAB.)</option>
												<option value="1403" id="ktp_city_1403">BENGKALIS (KAB.)</option>
												<option value="6107" id="ktp_city_6107">BENGKAYANG (KAB.)</option>
												<option value="1771" id="ktp_city_1771">BENGKULU (KOTA)</option>
												<option value="1701" id="ktp_city_1701">BENGKULU SELATAN (KAB.)</option>
												<option value="1709" id="ktp_city_1709">BENGKULU TENGAH</option>
												<option value="1703" id="ktp_city_1703">BENGKULU UTARA (KAB.)</option>
												<option value="6403" id="ktp_city_6403">BERAU (KAB.)</option>
												<option value="9106" id="ktp_city_9106">BIAK NUMFOR (KAB.)</option>
												<option value="5206" id="ktp_city_5206">BIMA (KAB.)</option>
												<option value="5272" id="ktp_city_5272">BIMA (KOTA)</option>
												<option value="1275" id="ktp_city_1275">BINJAI (KOTA)</option>
												<option value="2101" id="ktp_city_2101">BINTAN (KAB.)</option>
												<option value="1111" id="ktp_city_1111">BIREUEN (KAB.)</option>
												<option value="7172" id="ktp_city_7172">BITUNG (KOTA)</option>
												<option value="3505" id="ktp_city_3505">BLITAR (KAB.)</option>
												<option value="3572" id="ktp_city_3572">BLITAR (KOTA)</option>
												<option value="3316" id="ktp_city_3316">BLORA (KAB.)</option>
												<option value="7502" id="ktp_city_7502">BOALEMO (KAB.)</option>
												<option value="3522" id="ktp_city_3522">BOJONEGORO (KAB.)</option>
												<option value="7101" id="ktp_city_7101">BOLAANG MONGONDOW (KAB.)</option>
												<option value="7111" id="ktp_city_7111">BOLAANG MONGONDOW SELATAN</option>
												<option value="7110" id="ktp_city_7110">BOLAANG MONGONDOW TIMUR</option>
												<option value="7108" id="ktp_city_7108">BOLMONG UTARA (KAB.)</option>
												<option value="7406" id="ktp_city_7406">BOMBANA (KAB.)</option>
												<option value="3511" id="ktp_city_3511">BONDOWOSO (KAB.)</option>
												<option value="7308" id="ktp_city_7308">BONE (KAB.)</option>
												<option value="7503" id="ktp_city_7503">BONE BOLANGO (KAB.)</option>
												<option value="6474" id="ktp_city_6474">BONTANG (KOTA)</option>
												<option value="9116" id="ktp_city_9116">BOVEN DIGOEL (KAB.)</option>
												<option value="3309" id="ktp_city_3309">BOYOLALI (KAB.)</option>
												<option value="3329" id="ktp_city_3329">BREBES (KAB.)</option>
												<option value="1375" id="ktp_city_1375">BUKITTINGGI (KOTA)</option>
												<option value="5108" id="ktp_city_5108">BULELENG (KAB.)</option>
												<option value="7302" id="ktp_city_7302">BULUKUMBA (KAB.)</option>
												<option value="6501" id="ktp_city_6501">BULUNGAN</option>
												<option value="1508" id="ktp_city_1508">BUNGO (KAB.)</option>
												<option value="7205" id="ktp_city_7205">BUOL (KAB.)</option>
												<option value="8104" id="ktp_city_8104">BURU (KAB.)</option>
												<option value="8109" id="ktp_city_8109">BURU SELATAN</option>
												<option value="7404" id="ktp_city_7404">BUTON (KAB.)</option>
												<option value="7415" id="ktp_city_7415">BUTON SELATAN</option>
												<option value="7414" id="ktp_city_7414">BUTON TENGAH</option>
												<option value="7410" id="ktp_city_7410">BUTON UTARA (KAB.)</option>
												<option value="3207" id="ktp_city_3207">CIAMIS (KAB.)</option>
												<option value="3203" id="ktp_city_3203">CIANJUR (KAB.)</option>
												<option value="3301" id="ktp_city_3301">CILACAP (KAB.)</option>
												<option value="3672" id="ktp_city_3672">CILEGON (KOTA)</option>
												<option value="3277" id="ktp_city_3277">CIMAHI (KOTA)</option>
												<option value="3209" id="ktp_city_3209">CIREBON (KAB.)</option>
												<option value="3274" id="ktp_city_3274">CIREBON (KOTA)</option>
												<option value="1211" id="ktp_city_1211">DAIRI (KAB.)</option>
												<option value="9128" id="ktp_city_9128">DEIYAI</option>
												<option value="1207" id="ktp_city_1207">DELI SERDANG (KAB.)</option>
												<option value="3321" id="ktp_city_3321">DEMAK (KAB.)</option>
												<option value="5171" id="ktp_city_5171">DENPASAR (KOTA)</option>
												<option value="1310" id="ktp_city_1310">DHARMASRAYA (KAB.)</option>
												<option value="9126" id="ktp_city_9126">DOGIYAI</option>
												<option value="5205" id="ktp_city_5205">DOMPU (KAB.)</option>
												<option value="7203" id="ktp_city_7203">DONGGALA (KAB.)</option>
												<option value="1472" id="ktp_city_1472">DUMAI (KOTA)</option>
												<option value="1611" id="ktp_city_1611">EMPAT LAWANG (KAB.)</option>
												<option value="5308" id="ktp_city_5308">ENDE (KAB.)</option>
												<option value="7316" id="ktp_city_7316">ENREKANG (KAB.)</option>
												<option value="9203" id="ktp_city_9203">FAK FAK (KAB.)</option>
												<option value="5306" id="ktp_city_5306">FLORES TIMUR (KAB.)</option>
												<option value="3205" id="ktp_city_3205">GARUT (KAB.)</option>
												<option value="1113" id="ktp_city_1113">GAYO LUES (KAB.)</option>
												<option value="5104" id="ktp_city_5104">GIANYAR (KAB.)</option>
												<option value="7501" id="ktp_city_7501">GORONTALO (KAB.)</option>
												<option value="7571" id="ktp_city_7571">GORONTALO (KOTA)</option>
												<option value="7505" id="ktp_city_7505">GORONTALO UTARA (KAB.)</option>
												<option value="7306" id="ktp_city_7306">GOWA (KAB.)</option>
												<option value="3525" id="ktp_city_3525">GRESIK (KAB.)</option>
												<option value="3315" id="ktp_city_3315">GROBOGAN (KAB.)</option>
												<option value="3403" id="ktp_city_3403">GUNUNG KIDUL (KAB.)</option>
												<option value="6210" id="ktp_city_6210">GUNUNG MAS (KAB.)</option>
												<option value="8201" id="ktp_city_8201">HALMAHERA BARAT (KAB.)</option>
												<option value="8204" id="ktp_city_8204">HALMAHERA SELATAN (KAB.)</option>
												<option value="8202" id="ktp_city_8202">HALMAHERA TENGAH (KAB.)</option>
												<option value="8206" id="ktp_city_8206">HALMAHERA TIMUR (KAB.)</option>
												<option value="8203" id="ktp_city_8203">HALMAHERA UTARA (KAB.)</option>
												<option value="6306" id="ktp_city_6306">HULU SUNGAI SELATAN (KAB.)</option>
												<option value="6307" id="ktp_city_6307">HULU SUNGAI TENGAH (KAB.)</option>
												<option value="6308" id="ktp_city_6308">HULU SUNGAI UTARA (KAB.)</option>
												<option value="1216" id="ktp_city_1216">HUMBANG HASUNDUTAN (KAB.)</option>
												<option value="1404" id="ktp_city_1404">INDRAGIRI HILIR (KAB.)</option>
												<option value="1402" id="ktp_city_1402">INDRAGIRI HULU (KAB.)</option>
												<option value="3212" id="ktp_city_3212">INDRAMAYU (KAB.)</option>
												<option value="9127" id="ktp_city_9127">INTAN JAYA</option>
												<option value="1571" id="ktp_city_1571">JAMBI (KOTA)</option>
												<option value="9103" id="ktp_city_9103">JAYAPURA (KAB.)</option>
												<option value="9171" id="ktp_city_9171">JAYAPURA (KOTA)</option>
												<option value="9102" id="ktp_city_9102">JAYAWIJAYA (KAB.)</option>
												<option value="3509" id="ktp_city_3509">JEMBER (KAB.)</option>
												<option value="5101" id="ktp_city_5101">JEMBRANA (KAB.)</option>
												<option value="7304" id="ktp_city_7304">JENEPONTO (KAB.)</option>
												<option value="3320" id="ktp_city_3320">JEPARA (KAB.)</option>
												<option value="3517" id="ktp_city_3517">JOMBANG (KAB.)</option>
												<option value="9208" id="ktp_city_9208">KAIMANA (KAB.)</option>
												<option value="1401" id="ktp_city_1401">KAMPAR (KAB.)</option>
												<option value="6203" id="ktp_city_6203">KAPUAS (KAB.)</option>
												<option value="6106" id="ktp_city_6106">KAPUAS HULU (KAB.)</option>
												<option value="3313" id="ktp_city_3313">KARANGANYAR (KAB.)</option>
												<option value="5107" id="ktp_city_5107">KARANGASEM (KAB.)</option>
												<option value="3215" id="ktp_city_3215">KARAWANG (KAB.)</option>
												<option value="2102" id="ktp_city_2102">KARIMUN (KAB.)</option>
												<option value="1206" id="ktp_city_1206">KARO (KAB.)</option>
												<option value="6206" id="ktp_city_6206">KATINGAN (KAB.)</option>
												<option value="1704" id="ktp_city_1704">KAUR (KAB.)</option>
												<option value="6111" id="ktp_city_6111">KAYONG UTARA (KAB.)</option>
												<option value="3305" id="ktp_city_3305">KEBUMEN (KAB.)</option>
												<option value="3506" id="ktp_city_3506">KEDIRI (KAB.)</option>
												<option value="3571" id="ktp_city_3571">KEDIRI (KOTA)</option>
												<option value="9111" id="ktp_city_9111">KEEROM (KAB.)</option>
												<option value="3324" id="ktp_city_3324">KENDAL (KAB.)</option>
												<option value="7471" id="ktp_city_7471">KENDARI (KOTA)</option>
												<option value="7109" id="ktp_city_7109">KEP. SITARO (KAB.)</option>
												<option value="1708" id="ktp_city_1708">KEPAHIANG (KAB.)</option>
												<option value="2105" id="ktp_city_2105">KEPULAUAN ANAMBAS</option>
												<option value="8107" id="ktp_city_8107">KEPULAUAN ARU (KAB.)</option>
												<option value="1309" id="ktp_city_1309">KEPULAUAN MENTAWAI (KAB.)</option>
												<option value="1410" id="ktp_city_1410">KEPULAUAN MERANTI</option>
												<option value="7103" id="ktp_city_7103">KEPULAUAN SANGIHE (KAB.)</option>
												<option value="8205" id="ktp_city_8205">KEPULAUAN SULA (KAB.)</option>
												<option value="7104" id="ktp_city_7104">KEPULAUAN TALAUD (KAB.)</option>
												<option value="1501" id="ktp_city_1501">KERINCI (KAB.)</option>
												<option value="6104" id="ktp_city_6104">KETAPANG (KAB.)</option>
												<option value="3310" id="ktp_city_3310">KLATEN (KAB.)</option>
												<option value="5105" id="ktp_city_5105">KLUNGKUNG (KAB.)</option>
												<option value="7401" id="ktp_city_7401">KOLAKA (KAB.)</option>
												<option value="7411" id="ktp_city_7411">KOLAKA TIMUR</option>
												<option value="7408" id="ktp_city_7408">KOLAKA UTARA (KAB.)</option>
												<option value="7402" id="ktp_city_7402">KONAWE (KAB.)</option>
												<option value="7412" id="ktp_city_7412">KONAWE KEPULAUAN</option>
												<option value="7405" id="ktp_city_7405">KONAWE SELATAN (KAB.)</option>
												<option value="7409" id="ktp_city_7409">KONAWE UTARA (KAB.)</option>
												<option value="1278" id="ktp_city_1278">KOTA GUNUNGSITOLI</option>
												<option value="1572" id="ktp_city_1572">KOTA SUNGAI PENUH</option>
												<option value="6571" id="ktp_city_6571">KOTA TARAKAN</option>
												<option value="6302" id="ktp_city_6302">KOTABARU (KAB.)</option>
												<option value="7174" id="ktp_city_7174">KOTAMOBAGU (KOTA)</option>
												<option value="6201" id="ktp_city_6201">KOTAWARINGIN BARAT (KAB.)</option>
												<option value="6202" id="ktp_city_6202">KOTAWARINGIN TIMUR (KAB.)</option>
												<option value="1409" id="ktp_city_1409">KUANTAN SINGINGI (KAB.)</option>
												<option value="6112" id="ktp_city_6112">KUBU RAYA (KAB.)</option>
												<option value="3319" id="ktp_city_3319">KUDUS (KAB.)</option>
												<option value="3401" id="ktp_city_3401">KULON PROGO (KAB.)</option>
												<option value="3208" id="ktp_city_3208">KUNINGAN (KAB.)</option>
												<option value="5301" id="ktp_city_5301">KUPANG (KAB.)</option>
												<option value="5371" id="ktp_city_5371">KUPANG (KOTA)</option>
												<option value="6407" id="ktp_city_6407">KUTAI BARAT (KAB.)</option>
												<option value="6402" id="ktp_city_6402">KUTAI KERTANEGARA (KAB.)</option>
												<option value="6408" id="ktp_city_6408">KUTAI TIMUR (KAB.)</option>
												<option value="1210" id="ktp_city_1210">LABUHAN BATU (KAB.)</option>
												<option value="1222" id="ktp_city_1222">LABUHANBATU SELATAN</option>
												<option value="1223" id="ktp_city_1223">LABUHANBATU UTARA</option>
												<option value="1604" id="ktp_city_1604">LAHAT (KAB.)</option>
												<option value="6209" id="ktp_city_6209">LAMANDAU (KAB.)</option>
												<option value="3524" id="ktp_city_3524">LAMONGAN (KAB.)</option>
												<option value="1804" id="ktp_city_1804">LAMPUNG BARAT (KAB.)</option>
												<option value="1801" id="ktp_city_1801">LAMPUNG SELATAN (KAB.)</option>
												<option value="1802" id="ktp_city_1802">LAMPUNG TENGAH (KAB.)</option>
												<option value="1807" id="ktp_city_1807">LAMPUNG TIMUR (KAB.)</option>
												<option value="1803" id="ktp_city_1803">LAMPUNG UTARA (KAB.)</option>
												<option value="6108" id="ktp_city_6108">LANDAK (KAB.)</option>
												<option value="1205" id="ktp_city_1205">LANGKAT (KAB.)</option>
												<option value="1174" id="ktp_city_1174">LANGSA (KOTA)</option>
												<option value="9123" id="ktp_city_9123">LANNY JAYA</option>
												<option value="3602" id="ktp_city_3602">LEBAK (KAB.)</option>
												<option value="1707" id="ktp_city_1707">LEBONG (KAB.)</option>
												<option value="5313" id="ktp_city_5313">LEMBATA (KAB.)</option>
												<option value="1173" id="ktp_city_1173">LHOKSEUMAWE (KOTA)</option>
												<option value="1307" id="ktp_city_1307">LIMA PULUH KOTA (KAB.)</option>
												<option value="2104" id="ktp_city_2104">LINGGA (KAB.)</option>
												<option value="5201" id="ktp_city_5201">LOMBOK BARAT (KAB.)</option>
												<option value="5202" id="ktp_city_5202">LOMBOK TENGAH (KAB.)</option>
												<option value="5203" id="ktp_city_5203">LOMBOK TIMUR (KAB.)</option>
												<option value="5208" id="ktp_city_5208">LOMBOK UTARA</option>
												<option value="1673" id="ktp_city_1673">LUBUK LINGGAU (KOTA)</option>
												<option value="3508" id="ktp_city_3508">LUMAJANG (KAB.)</option>
												<option value="7317" id="ktp_city_7317">LUWU (KAB.)</option>
												<option value="7324" id="ktp_city_7324">LUWU TIMUR (KAB.)</option>
												<option value="7322" id="ktp_city_7322">LUWU UTARA (KAB.)</option>
												<option value="3519" id="ktp_city_3519">MADIUN (KAB.)</option>
												<option value="3577" id="ktp_city_3577">MADIUN (KOTA)</option>
												<option value="3308" id="ktp_city_3308">MAGELANG (KAB.)</option>
												<option value="3371" id="ktp_city_3371">MAGELANG (KOTA)</option>
												<option value="3520" id="ktp_city_3520">MAGETAN (KAB.)</option>
												<option value="6411" id="ktp_city_6411">MAHAKAM ULU</option>
												<option value="3210" id="ktp_city_3210">MAJALENGKA (KAB.)</option>
												<option value="7605" id="ktp_city_7605">MAJENE (KAB.)</option>
												<option value="7371" id="ktp_city_7371">MAKASAR (KOTA)</option>
												<option value="5321" id="ktp_city_5321">MALAKA</option>
												<option value="3507" id="ktp_city_3507">MALANG (KAB.)</option>
												<option value="3573" id="ktp_city_3573">MALANG (KOTA)</option>
												<option value="6502" id="ktp_city_6502">MALINAU</option>
												<option value="8108" id="ktp_city_8108">MALUKU BARAT DAYA</option>
												<option value="8101" id="ktp_city_8101">MALUKU TENGAH (KAB.)</option>
												<option value="8102" id="ktp_city_8102">MALUKU TENGGARA (KAB.)</option>
												<option value="8103" id="ktp_city_8103">MALUKU TENGGARA BRT (KAB.)</option>
												<option value="7603" id="ktp_city_7603">MAMASA (KAB.)</option>
												<option value="9120" id="ktp_city_9120">MAMBERAMO RAYA (KAB.)</option>
												<option value="9121" id="ktp_city_9121">MAMBERAMO TENGAH</option>
												<option value="7602" id="ktp_city_7602">MAMUJU (KAB.)</option>
												<option value="7606" id="ktp_city_7606">MAMUJU TENGAH</option>
												<option value="7601" id="ktp_city_7601">MAMUJU UTARA (KAB.)</option>
												<option value="7171" id="ktp_city_7171">MANADO (KOTA)</option>
												<option value="1213" id="ktp_city_1213">MANDAILING NATAL (KAB.)</option>
												<option value="5310" id="ktp_city_5310">MANGGARAI (KAB.)</option>
												<option value="5315" id="ktp_city_5315">MANGGARAI BARAT (KAB.)</option>
												<option value="5319" id="ktp_city_5319">MANGGARAI TIMUR (KAB.)</option>
												<option value="9202" id="ktp_city_9202">MANOKWARI (KAB.)</option>
												<option value="9211" id="ktp_city_9211">MANOKWARI SELATAN</option>
												<option value="9117" id="ktp_city_9117">MAPPI (KAB.)</option>
												<option value="7309" id="ktp_city_7309">MAROS (KAB.)</option>
												<option value="5271" id="ktp_city_5271">MATARAM (KOTA)</option>
												<option value="9210" id="ktp_city_9210">MAYBRAT</option>
												<option value="1271" id="ktp_city_1271">MEDAN (KOTA)</option>
												<option value="6110" id="ktp_city_6110">MELAWI (KAB.)</option>
												<option value="1502" id="ktp_city_1502">MERANGIN (KAB.)</option>
												<option value="9101" id="ktp_city_9101">MERAUKE (KAB.)</option>
												<option value="1811" id="ktp_city_1811">MESUJI</option>
												<option value="1872" id="ktp_city_1872">METRO (KOTA)</option>
												<option value="9109" id="ktp_city_9109">MIMIKA (KAB.)</option>
												<option value="7102" id="ktp_city_7102">MINAHASA (KAB.)</option>
												<option value="7105" id="ktp_city_7105">MINAHASA SELATAN (KAB.)</option>
												<option value="7107" id="ktp_city_7107">MINAHASA TENGGARA (KAB.)</option>
												<option value="7106" id="ktp_city_7106">MINAHASA UTARA (KAB.)</option>
												<option value="3516" id="ktp_city_3516">MOJOKERTO (KAB.)</option>
												<option value="3576" id="ktp_city_3576">MOJOKERTO (KOTA)</option>
												<option value="7206" id="ktp_city_7206">MOROWALI (KAB.)</option>
												<option value="7212" id="ktp_city_7212">MOROWALI UTARA</option>
												<option value="1603" id="ktp_city_1603">MUARA ENIM (KAB.)</option>
												<option value="1505" id="ktp_city_1505">MUARO JAMBI (KAB.)</option>
												<option value="1706" id="ktp_city_1706">MUKO MUKO (KAB.)</option>
												<option value="7403" id="ktp_city_7403">MUNA (KAB.)</option>
												<option value="7413" id="ktp_city_7413">MUNA BARAT</option>
												<option value="6212" id="ktp_city_6212">MURUNG RAYA (KAB.)</option>
												<option value="1606" id="ktp_city_1606">MUSI BANYUASIN (KAB.)</option>
												<option value="1605" id="ktp_city_1605">MUSI RAWAS (KAB.)</option>
												<option value="1613" id="ktp_city_1613">MUSI RAWAS UTARA</option>
												<option value="9104" id="ktp_city_9104">NABIRE (KAB.)</option>
												<option value="1115" id="ktp_city_1115">NAGAN RAYA (KAB.)</option>
												<option value="5316" id="ktp_city_5316">NAGEKEO (KAB.)</option>
												<option value="2103" id="ktp_city_2103">NATUNA (KAB.)</option>
												<option value="9124" id="ktp_city_9124">NDUGA</option>
												<option value="5309" id="ktp_city_5309">NGADA (KAB.)</option>
												<option value="3518" id="ktp_city_3518">NGANJUK (KAB.)</option>
												<option value="3521" id="ktp_city_3521">NGAWI (KAB.)</option>
												<option value="1204" id="ktp_city_1204">NIAS (KAB.)</option>
												<option value="1225" id="ktp_city_1225">NIAS BARAT</option>
												<option value="1214" id="ktp_city_1214">NIAS SELATAN (KAB.)</option>
												<option value="1224" id="ktp_city_1224">NIAS UTARA</option>
												<option value="6503" id="ktp_city_6503">NUNUKAN</option>
												<option value="1610" id="ktp_city_1610">OGAN ILIR (KAB.)</option>
												<option value="1602" id="ktp_city_1602">OGAN KOMERING ILIR (KAB.)</option>
												<option value="1601" id="ktp_city_1601">OGAN KOMERING ULU (KAB.)</option>
												<option value="1609" id="ktp_city_1609">OKU SELATAN (KAB.)</option>
												<option value="1608" id="ktp_city_1608">OKU TIMUR (KAB.)</option>
												<option value="3501" id="ktp_city_3501">PACITAN (KAB.)</option>
												<option value="1371" id="ktp_city_1371">PADANG (KOTA)</option>
												<option value="1221" id="ktp_city_1221">PADANG LAWAS (KAB.)</option>
												<option value="1220" id="ktp_city_1220">PADANG LAWAS UTARA (KAB.)</option>
												<option value="1374" id="ktp_city_1374">PADANG PANJANG (KOTA)</option>
												<option value="1305" id="ktp_city_1305">PADANG PARIAMAN (KAB.)</option>
												<option value="1277" id="ktp_city_1277">PADANG SIDEMPUAN (KOTA)</option>
												<option value="1672" id="ktp_city_1672">PAGAR ALAM (KOTA)</option>
												<option value="7504" id="ktp_city_7504">PAHUWATO (KAB.)</option>
												<option value="1215" id="ktp_city_1215">PAKPAK BHARAT (KAB.)</option>
												<option value="6271" id="ktp_city_6271">PALANGKARAYA (KOTA)</option>
												<option value="1671" id="ktp_city_1671">PALEMBANG (KOTA)</option>
												<option value="7373" id="ktp_city_7373">PALOPO (KOTA)</option>
												<option value="7271" id="ktp_city_7271">PALU (KOTA)</option>
												<option value="3528" id="ktp_city_3528">PAMEKASAN (KAB.)</option>
												<option value="3601" id="ktp_city_3601">PANDEGLANG (KAB.)</option>
												<option value="3218" id="ktp_city_3218">PANGANDARAN</option>
												<option value="7310" id="ktp_city_7310">PANGKAJENE KEP. (KAB.)</option>
												<option value="1971" id="ktp_city_1971">PANGKAL PINANG (KOTA)</option>
												<option value="9108" id="ktp_city_9108">PANIAI (KAB.)</option>
												<option value="7372" id="ktp_city_7372">PARE PARE (KOTA)</option>
												<option value="1377" id="ktp_city_1377">PARIAMAN (KOTA)</option>
												<option value="7208" id="ktp_city_7208">PARIGI MOUTONG (KAB.)</option>
												<option value="1308" id="ktp_city_1308">PASAMAN (KAB.)</option>
												<option value="1312" id="ktp_city_1312">PASAMAN BARAT (KAB.)</option>
												<option value="6401" id="ktp_city_6401">PASER (KAB.)</option>
												<option value="3514" id="ktp_city_3514">PASURUAN (KAB.)</option>
												<option value="3575" id="ktp_city_3575">PASURUAN (KOTA)</option>
												<option value="3318" id="ktp_city_3318">PATI (KAB.)</option>
												<option value="1376" id="ktp_city_1376">PAYAKUMBUH (KOTA)</option>
												<option value="9212" id="ktp_city_9212">PEGUNUNGAN ARFAK</option>
												<option value="9112" id="ktp_city_9112">PEGUNUNGAN BINTANG (KAB.)</option>
												<option value="3326" id="ktp_city_3326">PEKALONGAN (KAB.)</option>
												<option value="3375" id="ktp_city_3375">PEKALONGAN (KOTA)</option>
												<option value="1471" id="ktp_city_1471">PEKANBARU (KOTA)</option>
												<option value="1405" id="ktp_city_1405">PELALAWAN (KAB.)</option>
												<option value="3327" id="ktp_city_3327">PEMALANG (KAB.)</option>
												<option value="1272" id="ktp_city_1272">PEMATANG SIANTAR (KOTA)</option>
												<option value="6409" id="ktp_city_6409">PENAJAM PASER UTARA (KAB.)</option>
												<option value="1612" id="ktp_city_1612">PENUKAL ABAB LEMATANG ILIR</option>
												<option value="1809" id="ktp_city_1809">PESAWARAN (KAB.)</option>
												<option value="1813" id="ktp_city_1813">PESISIR BARAT</option>
												<option value="1301" id="ktp_city_1301">PESISIR SELATAN (KAB.)</option>
												<option value="1107" id="ktp_city_1107">PIDIE (KAB.)</option>
												<option value="1118" id="ktp_city_1118">PIDIE JAYA (KAB.)</option>
												<option value="7315" id="ktp_city_7315">PINRANG (KAB.)</option>
												<option value="7604" id="ktp_city_7604">POLEWALI MAMASA (KAB.)</option>
												<option value="3502" id="ktp_city_3502">PONOROGO (KAB.)</option>
												<option value="6102" id="ktp_city_6102">PONTIANAK (KAB.)</option>
												<option value="6171" id="ktp_city_6171">PONTIANAK (KOTA)</option>
												<option value="7202" id="ktp_city_7202">POSO (KAB.)</option>
												<option value="1674" id="ktp_city_1674">PRABUMULIH (KOTA)</option>
												<option value="1810" id="ktp_city_1810">PRINGSEWU</option>
												<option value="3513" id="ktp_city_3513">PROBOLINGGO (KAB.)</option>
												<option value="3574" id="ktp_city_3574">PROBOLINGGO (KOTA)</option>
												<option value="6211" id="ktp_city_6211">PULANG PISAU (KAB.)</option>
												<option value="8207" id="ktp_city_8207">PULAU MOROTAI</option>
												<option value="8208" id="ktp_city_8208">PULAU TALIABU</option>
												<option value="9125" id="ktp_city_9125">PUNCAK</option>
												<option value="9107" id="ktp_city_9107">PUNCAK JAYA (KAB.)</option>
												<option value="3303" id="ktp_city_3303">PURBALINGGA (KAB.)</option>
												<option value="3214" id="ktp_city_3214">PURWAKARTA (KAB.)</option>
												<option value="3306" id="ktp_city_3306">PURWOREJO (KAB.)</option>
												<option value="9205" id="ktp_city_9205">RAJA AMPAT (KAB.)</option>
												<option value="1702" id="ktp_city_1702">REJANG LEBONG (KAB.)</option>
												<option value="3317" id="ktp_city_3317">REMBANG (KAB.)</option>
												<option value="1407" id="ktp_city_1407">ROKAN HILIR (KAB.)</option>
												<option value="1406" id="ktp_city_1406">ROKAN HULU (KAB.)</option>
												<option value="5314" id="ktp_city_5314">ROTE NDAO (KAB.)</option>
												<option value="1172" id="ktp_city_1172">SABANG (KOTA)</option>
												<option value="5320" id="ktp_city_5320">SABU RAIJUA</option>
												<option value="3373" id="ktp_city_3373">SALATIGA (KOTA)</option>
												<option value="6472" id="ktp_city_6472">SAMARINDA (KOTA)</option>
												<option value="6101" id="ktp_city_6101">SAMBAS (KAB.)</option>
												<option value="1217" id="ktp_city_1217">SAMOSIR (KAB.)</option>
												<option value="3527" id="ktp_city_3527">SAMPANG (KAB.)</option>
												<option value="6103" id="ktp_city_6103">SANGGAU (KAB.)</option>
												<option value="9110" id="ktp_city_9110">SARMI (KAB.)</option>
												<option value="1503" id="ktp_city_1503">SAROLANGUN (KAB.)</option>
												<option value="1373" id="ktp_city_1373">SAWAHLUNTO (KOTA)</option>
												<option value="6109" id="ktp_city_6109">SEKADAU (KAB.)</option>
												<option value="7301" id="ktp_city_7301">SELAYAR (KAB.)</option>
												<option value="1705" id="ktp_city_1705">SELUMA (KAB.)</option>
												<option value="3322" id="ktp_city_3322">SEMARANG (KAB.)</option>
												<option value="3374" id="ktp_city_3374">SEMARANG (KOTA)</option>
												<option value="8106" id="ktp_city_8106">SERAM BAGIAN BARAT (KAB.)</option>
												<option value="8105" id="ktp_city_8105">SERAM BAGIAN TIMUR (KAB.)</option>
												<option value="3604" id="ktp_city_3604">SERANG (KAB.)</option>
												<option value="3673" id="ktp_city_3673">SERANG (KOTA)</option>
												<option value="1218" id="ktp_city_1218">SERDANG BEDAGAI (KAB.)</option>
												<option value="6207" id="ktp_city_6207">SERUYAN (KAB.)</option>
												<option value="1408" id="ktp_city_1408">SIAK (KAB.)</option>
												<option value="1273" id="ktp_city_1273">SIBOLGA (KOTA)</option>
												<option value="7314" id="ktp_city_7314">SIDENRENG RAPANG (KAB.)</option>
												<option value="3515" id="ktp_city_3515">SIDOARJO (KAB.)</option>
												<option value="7210" id="ktp_city_7210">SIGI</option>
												<option value="5307" id="ktp_city_5307">SIKKA (KAB.)</option>
												<option value="1208" id="ktp_city_1208">SIMALUNGUN (KAB.)</option>
												<option value="1109" id="ktp_city_1109">SIMEULUE (KAB.)</option>
												<option value="6172" id="ktp_city_6172">SINGKAWANG (KOTA)</option>
												<option value="7307" id="ktp_city_7307">SINJAI (KAB.)</option>
												<option value="6105" id="ktp_city_6105">SINTANG (KAB.)</option>
												<option value="3512" id="ktp_city_3512">SITUBONDO (KAB.)</option>
												<option value="3404" id="ktp_city_3404">SLEMAN (KAB.)</option>
												<option value="1302" id="ktp_city_1302">SOLOK (KAB.)</option>
												<option value="1372" id="ktp_city_1372">SOLOK (KOTA)</option>
												<option value="1311" id="ktp_city_1311">SOLOK SELATAN (KAB.)</option>
												<option value="7312" id="ktp_city_7312">SOPPENG (KAB.)</option>
												<option value="9201" id="ktp_city_9201">SORONG (KAB.)</option>
												<option value="9271" id="ktp_city_9271">SORONG (KOTA)</option>
												<option value="9204" id="ktp_city_9204">SORONG SELATAN (KAB.)</option>
												<option value="3314" id="ktp_city_3314">SRAGEN (KAB.)</option>
												<option value="3213" id="ktp_city_3213">SUBANG (KAB.)</option>
												<option value="1175" id="ktp_city_1175">SUBULUSSALAM (KOTA)</option>
												<option value="3202" id="ktp_city_3202">SUKABUMI (KAB.)</option>
												<option value="3272" id="ktp_city_3272">SUKABUMI (KOTA)</option>
												<option value="6208" id="ktp_city_6208">SUKAMARA (KAB.)</option>
												<option value="3311" id="ktp_city_3311">SUKOHARJO (KAB.)</option>
												<option value="5312" id="ktp_city_5312">SUMBA BARAT (KAB.)</option>
												<option value="5318" id="ktp_city_5318">SUMBA BARAT DAYA (KAB.)</option>
												<option value="5317" id="ktp_city_5317">SUMBA TENGAH (KAB.)</option>
												<option value="5311" id="ktp_city_5311">SUMBA TIMUR (KAB.)</option>
												<option value="5204" id="ktp_city_5204">SUMBAWA (KAB.)</option>
												<option value="5207" id="ktp_city_5207">SUMBAWA BARAT (KAB.)</option>
												<option value="3211" id="ktp_city_3211">SUMEDANG (KAB.)</option>
												<option value="3529" id="ktp_city_3529">SUMENEP (KAB.)</option>
												<option value="9119" id="ktp_city_9119">SUPIORI (KAB.)</option>
												<option value="3578" id="ktp_city_3578">SURABAYA (KOTA)</option>
												<option value="3372" id="ktp_city_3372">SURAKARTA (KOTA)</option>
												<option value="1303" id="ktp_city_1303">SW.LUNTO/SIJUNJUNG (KAB.)</option>
												<option value="6309" id="ktp_city_6309">TABALONG (KAB.)</option>
												<option value="5102" id="ktp_city_5102">TABANAN (KAB.)</option>
												<option value="7305" id="ktp_city_7305">TAKALAR (KAB.)</option>
												<option value="9209" id="ktp_city_9209">TAMBRAUW</option>
												<option value="6504" id="ktp_city_6504">TANA TIDUNG</option>
												<option value="7318" id="ktp_city_7318">TANA TORAJA (KAB.)</option>
												<option value="6310" id="ktp_city_6310">TANAH BUMBU (KAB.)</option>
												<option value="1304" id="ktp_city_1304">TANAH DATAR (KAB.)</option>
												<option value="6301" id="ktp_city_6301">TANAH LAUT (KAB.)</option>
												<option value="1806" id="ktp_city_1806">TANGGAMUS (KAB.)</option>
												<option value="1274" id="ktp_city_1274">TANJUNG BALAI (KOTA)</option>
												<option value="1506" id="ktp_city_1506">TANJUNG JABUNG BARAT (KAB.)</option>
												<option value="1507" id="ktp_city_1507">TANJUNG JABUNG TIMUR (KAB.)</option>
												<option value="2172" id="ktp_city_2172">TANJUNG PINANG (KOTA)</option>
												<option value="1203" id="ktp_city_1203">TAPANULI SELATAN (KAB.)</option>
												<option value="1201" id="ktp_city_1201">TAPANULI TENGAH (KAB.)</option>
												<option value="1202" id="ktp_city_1202">TAPANULI UTARA (KAB.)</option>
												<option value="6305" id="ktp_city_6305">TAPIN (KAB.)</option>
												<option value="3206" id="ktp_city_3206">TASIKMALAYA (KAB.)</option>
												<option value="3278" id="ktp_city_3278">TASIKMALAYA (KOTA)</option>
												<option value="1276" id="ktp_city_1276">TEBING TINGGI (KOTA)</option>
												<option value="1509" id="ktp_city_1509">TEBO (KAB.)</option>
												<option value="3328" id="ktp_city_3328">TEGAL (KAB.)</option>
												<option value="3376" id="ktp_city_3376">TEGAL (KOTA)</option>
												<option value="9206" id="ktp_city_9206">TELUK BENTUNI (KAB.)</option>
												<option value="9207" id="ktp_city_9207">TELUK WONDAMA (KAB.)</option>
												<option value="3323" id="ktp_city_3323">TEMANGGUNG (KAB.)</option>
												<option value="8271" id="ktp_city_8271">TERNATE (KOTA)</option>
												<option value="8272" id="ktp_city_8272">TIDORE KEPULAUAN (KOTA)</option>
												<option value="5302" id="ktp_city_5302">TIMOR TENGAH SELATAN (KAB.)</option>
												<option value="5303" id="ktp_city_5303">TIMOR TENGAH UTARA (KAB.)</option>
												<option value="1212" id="ktp_city_1212">TOBA SAMOSIR (KAB.)</option>
												<option value="7209" id="ktp_city_7209">TOJO UNA UNA (KAB.)</option>
												<option value="7204" id="ktp_city_7204">TOLI TOLI (KAB.)</option>
												<option value="9114" id="ktp_city_9114">TOLIKARA (KAB.)</option>
												<option value="7173" id="ktp_city_7173">TOMOHON (KOTA)</option>
												<option value="7326" id="ktp_city_7326">TORAJA UTARA</option>
												<option value="3503" id="ktp_city_3503">TRENGGALEK (KAB.)</option>
												<option value="8172" id="ktp_city_8172">TUAL (KOTA)</option>
												<option value="3523" id="ktp_city_3523">TUBAN (KAB.)</option>
												<option value="1805" id="ktp_city_1805">TULANG BAWANG (KAB.)</option>
												<option value="1812" id="ktp_city_1812">TULANG BAWANG BARAT</option>
												<option value="3504" id="ktp_city_3504">TULUNGAGUNG (KAB.)</option>
												<option value="7313" id="ktp_city_7313">WAJO (KAB.)</option>
												<option value="7407" id="ktp_city_7407">WAKATOBI (KAB.)</option>
												<option value="9115" id="ktp_city_9115">WAROPEN (KAB.)</option>
												<option value="1808" id="ktp_city_1808">WAY KANAN (KAB.)</option>
												<option value="3312" id="ktp_city_3312">WONOGIRI (KAB.)</option>
												<option value="3307" id="ktp_city_3307">WONOSOBO (KAB.)</option>
												<option value="9113" id="ktp_city_9113">YAHUKIMO (KAB.)</option>
												<option value="9122" id="ktp_city_9122">YALIMO</option>
												<option value="9105" id="ktp_city_9105">YAPEN WAROPEN (KAB.)</option>
												<option value="3471" id="ktp_city_3471">YOGYAKARTA (KOTA)</option>
												<option value="9999" id="ktp_city_9999">LAINNYA</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
										<div class="col-sm-4 kyc-code-col">
											<label class="input-label">Kode Pos</label>
											<input id="ktp_postal_code" maxlength="5" name="ktp_postal_code" type="tel" class="mandatory form-control input-text postal_code" value="" placeholder="Masukkan kode pos">
											<div class="help-block with-errors"></div>
										</div>	
									</div>
								</div>
								<!-- end step-0 -->							
							</div>
							<div id="step-2">
								<!-- step-1 -->				
								<div id="form-step-1" role="form" data-toggle="validator">
									<div class="form-group">
										<div class="col-sm-12">
											<label class="kyc-input-label">Pekerjaan</label>
											<select id="occupation" name="occupation" class="form-control select2" style="width: 100%;" required>
												<option value="">Pilih Pekerjaan</option>
												<option value="10" id="occupation_10">Aparatur Sipil Negara</option>
												<option value="11" id="occupation_11">BUMN/BUMD</option>
												<option value="7" id="occupation_7">Dosen/Guru</option>
												<option value="2" id="occupation_2">Ibu Rumah Tangga</option>
												<option value="4" id="occupation_4">Pegawai Negeri</option>
												<option value="8" id="occupation_8">Pegawai Swasta</option>
												<option value="1" id="occupation_1">Pelajar/Mahasiswa</option>
												<option value="6" id="occupation_6">Pensiunan</option>
												<option value="5" id="occupation_5">TNI/POLRI</option>
												<option value="3" id="occupation_3">Wiraswasta</option>
												<option value="9" id="occupation_9">Lainnya</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="form-group hidden" id="nip_div">
										<div class="col-sm-12">
											<label class="kyc-input-label">Nomor Induk Pegawai</label>
											<input id="nip" name="nip" maxlength="50" type="text" class="mandatory form-control kyc-input-text" disabled="" readonly="">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="kyc-input-label">Penghasilan Kotor/Tahun</label>
											<select id="gross_income" name="gross_income" class="form-control select2" style="width: 100%;" required>
												<option value="">Pilih Penghasilan Kotor</option>
												<option value="1" id="gross_income_1">&lt; 10 juta / tahun</option>
												<option value="2" id="gross_income_2">&gt; 10 – 50 juta / tahun</option>
												<option value="3" id="gross_income_3">&gt; 50 – 100 juta / tahun</option>
												<option value="4" id="gross_income_4">&gt; 100 – 500 juta / tahun</option>
												<option value="5" id="gross_income_5">&gt; 500 juta – 1 milyar / tahun</option>
												<option value="6" id="gross_income_6">&gt; 1 milyar / tahun</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-12">
											<label class="kyc-input-label">Sumber Dana</label>
											<select id="source_of_fund" name="source_of_fund" class="form-control select2" style="width: 100%;" required>
												<option value="">Pilih Sumber Dana</option>
												<option value="3" id="source_of_fund_3">Bunga Tabungan</option>
												<option value="5" id="source_of_fund_5">Dana dari orang tua atau anak</option>
												<option value="7" id="source_of_fund_7">Dana dari suami atau istri</option>
												<option value="6" id="source_of_fund_6">Hibah</option>
												<option value="2" id="source_of_fund_2">Keuntungan Bisnis</option>
												<option value="9" id="source_of_fund_9">Keuntungan Investasi</option>
												<option value="1" id="source_of_fund_1">Pendapatan</option>
												<option value="8" id="source_of_fund_8">Undian</option>
												<option value="4" id="source_of_fund_4">Warisan</option>
												<option value="10" id="source_of_fund_10">Lainnya</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<!-- end step-1 -->	
							</div>
							<div id="step-3">						
								<div id="form-step-2" role="form" data-toggle="validator">
									<div class="form-group">
										<div class="col-sm-12">
											<label>Nama Bank</label>
											<select id="bank_code" name="bank_code" class="form-control select2" style="width: 100%;" required>
												<option value="">Pilih Bank</option>
												<option value="CENAIDJA" id="bank_list_CENAIDJA">PT. BANK CENTRAL ASIA / BCA, TBK</option>
												<option value="BMRIIDJA" id="bank_list_BMRIIDJA">PT. BANK MANDIRI (PERSERO), TBK</option>
												<option value="BSMDIDJA" id="bank_list_BSMDIDJA">PT. BANK SYARIAH MANDIRI</option>
												<option value="BDINIDJA" id="bank_list_BDINIDJA">PT. BANK DANAMON INDONESIA, TBK</option>
												<option value="BNIAIDJA" id="bank_list_BNIAIDJA">PT. BANK CIMB NIAGA</option>
												<option value="BBBAIDJA" id="bank_list_BBBAIDJA">PT. BANK PERMATA, TBK</option>
												<option value="BRINIDJA" id="bank_list_BRINIDJA">PT. BANK RAKYAT INDONESIA / BRI (PERSERO), TBK</option>
												<option value="BNINIDJA" id="bank_list_BNINIDJA">PT. BANK NEGARA INDONESIA / BNI (PERSERO), TBK</option>
												<option value="SYCAIDJ1" id="bank_list_SYCAIDJ1">PT. BANK BCA SYARIAH</option>
												<option value="MEGAIDJA" id="bank_list_MEGAIDJA">PT. BANK MEGA, TBK</option>
												<option value="BBUKIDJA" id="bank_list_BBUKIDJA">PT. BANK BUKOPIN, TBK</option>
												<option value="DJARIDJ1" id="bank_list_DJARIDJ1">PT. BANK SYARIAH BRI</option>
												<option value="SBJKIDJA" id="bank_list_SBJKIDJA">PT. BANK SINARMAS, TBK</option>
												<option value="SCBLIDJX" id="bank_list_SCBLIDJX">STANDARD CHARTERED BANK</option>
												<option value="SDOBIDJ1" id="bank_list_SDOBIDJ1">PT. BANK SYARIAH BUKOPIN</option>
												<option value="SIHBIDJ1" id="bank_list_SIHBIDJ1">PT. BANK MANDIRI TASPEN POS</option>
												<option value="CITIIDJX" id="bank_list_CITIIDJX">CITIBANK, N.A.</option>
												<option value="ABALIDBS" id="bank_list_ABALIDBS">PT. BPD BALI</option>
												<option value="ABNAIDJA" id="bank_list_ABNAIDJA">THE ROYAL BANK OF SCOTLAND N.V.</option>
												<option value="AGSSIDJA" id="bank_list_AGSSIDJA">PT. BANK AGRIS</option>
												<option value="AGTBIDJA" id="bank_list_AGTBIDJA">PT. BANK RAKYAT INDONESIA AGRONIAGA, TBK</option>
												<option value="ANTDIDJD" id="bank_list_ANTDIDJD">PT. BANK ANTARDAERAH</option>
												<option value="ANZBIDJX" id="bank_list_ANZBIDJX">PT. BANK ANZ INDONESIA </option>
												<option value="ARFAIDJ1" id="bank_list_ARFAIDJ1">PT. BANK PANIN DUBAI SYARIAH</option>
												<option value="ARTGIDJA" id="bank_list_ARTGIDJA">PT. BANK ARTHA GRAHA INTERNASIONAL, TBK</option>
												<option value="ATJSIDJ2" id="bank_list_ATJSIDJ2">PT. ARTAJASA PEMBAYARAN ELEKTRONIK</option>
												<option value="ATOSIDJ1" id="bank_list_ATOSIDJ1">PT. BANK ARTOS INDONESIA</option>
												<option value="AWANIDJA" id="bank_list_AWANIDJA">PT. BANK QNB INDONESIA, TBK</option>
												<option value="BBAIIDJA" id="bank_list_BBAIIDJA">PT. BANK BUMI ARTA</option>
												<option value="BBIJIDJA" id="bank_list_BBIJIDJA">PT. BANK UOB INDONESIA</option>
												<option value="BCIAIDJA" id="bank_list_BCIAIDJA">PT. BANK CAPITAL INDONESIA</option>
												<option value="BDIPIDJ1" id="bank_list_BDIPIDJ1">PT. BANK SAHABAT SAMPOERNA</option>
												<option value="BDKIIDJ1" id="bank_list_BDKIIDJ1">PT. BPD DKI</option>
												<option value="BICNIDJA" id="bank_list_BICNIDJA">PT. BANK COMMONWEALTH</option>
												<option value="BIDXIDJA" id="bank_list_BIDXIDJA">PT. BANK INDEX SELINDO</option>
												<option value="BKCHIDJA" id="bank_list_BKCHIDJA">BANK OF CHINA LIMITED</option>
												<option value="BKKBIDJA" id="bank_list_BKKBIDJA">BANGKOK BANK PUBLIC, CO. LTD.</option>
												<option value="BNPAIDJA" id="bank_list_BNPAIDJA">PT. BANK BNP PARIBAS INDONESIA</option>
												<option value="BOFAID2X" id="bank_list_BOFAID2X">BANK OF AMERICA, N.A.</option>
												<option value="BOTKIDJX" id="bank_list_BOTKIDJX">THE BOT MITSUBISHI UFJ, LTD.</option>
												<option value="BPIAIDJA" id="bank_list_BPIAIDJA">PT. BANK RESONA PERDANIA</option>
												<option value="BSDRIDJA" id="bank_list_BSDRIDJA">PT. BANK WOORI SAUDARA INDONESIA 1906, TBK</option>
												<option value="BSSPIDSP" id="bank_list_BSSPIDSP">PT. BPD SUMATERA SELATAN DAN BANGKA BELITUNG</option>
												<option value="BTANIDJA" id="bank_list_BTANIDJA">PT. BANK TABUNGAN NEGARA (PERSERO), TBK</option>
												<option value="SUNIIDJA" id="bank_list_SUNIIDJA">PT. BANK TABUNGAN PENSIUNAN NASIONAL</option>
												<option value="BUMIIDJA" id="bank_list_BUMIIDJA">PT. BANK MNC INTERNASIONAL, TBK</option>
												<option value="BUSTIDJ1" id="bank_list_BUSTIDJ1">PT. BANK BISNIS INTERNASIONAL</option>
												<option value="BUTGIDJ1" id="bank_list_BUTGIDJ1">PT. BANK MEGA SYARIAH</option>
												<option value="CHASIDJX" id="bank_list_CHASIDJX">JPMORGAN CHASE BANK, N.A.</option>
												<option value="CICTIDJA" id="bank_list_CICTIDJA">PT. BANK JTRUST INDONESIA, TBK</option>
												<option value="CNBAIDJ1" id="bank_list_CNBAIDJ1">PT. CENTRATAMA NASIONAL BANK</option>
												<option value="CTCBIDJA" id="bank_list_CTCBIDJA">PT. BANK CTBC INDONESIA</option>
												<option value="DBSBIDJA" id="bank_list_DBSBIDJA">PT. BANK DBS INDONESIA</option>
												<option value="DEUTIDJA" id="bank_list_DEUTIDJA">DEUTSCHE BANK, A.G.</option>
												<option value="HSBCIDJA" id="bank_list_HSBCIDJA">PT. Bank HSBC Indonesia, Tbk.</option>
												<option value="EKSTIDJ1" id="bank_list_EKSTIDJ1">PT. Bank Pembangunan Daerah Banten, Tbk.</option>
												<option value="FAMAIDJ1" id="bank_list_FAMAIDJ1">PT. BANK FAMA INTERNASIONAL</option>
												<option value="FINTIDJ1" id="bank_list_FINTIDJ1">PT. FINNET INDONESIA</option>
												<option value="GNESIDJA" id="bank_list_GNESIDJA">PT. BANK GANESHA</option>
												<option value="HNBNIDJA" id="bank_list_HNBNIDJA">PT. BANK KEB HANA INDONESIA</option>
												<option value="HRDAIDJ1" id="bank_list_HRDAIDJ1">PT. BANK HARDA INTERNASIONAL</option>
												<option value="HSHKIDJ1" id="bank_list_HSHKIDJ1">THE HONGKONG AND SHANGHAI BANK</option>
												<option value="IBBKIDJA" id="bank_list_IBBKIDJA">PT. BANK MAYBANK INDONESIA, TBK</option>
												<option value="ICBKIDJA" id="bank_list_ICBKIDJA">PT. BANK ICBC INDONESIA</option>
												<option value="IDMOIDJ1" id="bank_list_IDMOIDJ1">PT. BANK SBI INDONESIA</option>
												<option value="INPBIDJ1" id="bank_list_INPBIDJ1">PT. BANK INA PERDANA</option>
												<option value="JSABIDJ1" id="bank_list_JSABIDJ1">PT. BANK JASA JAKARTA</option>
												<option value="KSEBIDJ1" id="bank_list_KSEBIDJ1">PT. BANK KESEJAHTERAAN EKONOMI</option>
												<option value="KSEIIDJ1" id="bank_list_KSEIIDJ1">PT. KUSTODIAN SENTRAL EFEK INDONESIA</option>
												<option value="LFIBIDJ1" id="bank_list_LFIBIDJ1">PT. BANK NATIONALNOBU</option>
												<option value="LMANIDJ1" id="bank_list_LMANIDJ1">PT. BANK DINAR INDONESIA</option>
												<option value="LOMAIDJ1" id="bank_list_LOMAIDJ1">PT. BANK AMAR INDONESIA</option>
												<option value="LPEIIDJ1" id="bank_list_LPEIIDJ1">INDONESIA EXIMBANK</option>
												<option value="MASBIDJ1" id="bank_list_MASBIDJ1">PT. BANK MULTI ARTA SENTOSA</option>
												<option value="MASDIDJ1" id="bank_list_MASDIDJ1">PT. BANK MASPION INDONESIA</option>
												<option value="MAYAIDJA" id="bank_list_MAYAIDJA">PT. BANK MAYAPADA INTERNASIONAL, TBK</option>
												<option value="MAYOIDJA" id="bank_list_MAYOIDJA">PT. BANK MAYORA</option>
												<option value="MBBEIDJA" id="bank_list_MBBEIDJA">PT. BANK MAYBANK SYARIAH INDONESIA</option>
												<option value="MCORIDJA" id="bank_list_MCORIDJA">PT. BANK WINDU KENTJANA INTERNASIONAL, TBK</option>
												<option value="MEDHIDS1" id="bank_list_MEDHIDS1">PT. BANK MESTIKA DHARMA</option>
												<option value="MEEKIDJ1" id="bank_list_MEEKIDJ1">PT. BANK SHINHAN INDONESIA</option>
												<option value="MGABIDJ1" id="bank_list_MGABIDJ1">PT. BANK MITRA NIAGA</option>
												<option value="MHCCIDJA" id="bank_list_MHCCIDJA">PT. BANK MIZUHO INDONESIA</option>
												<option value="MUABIDJA" id="bank_list_MUABIDJA">PT. BANK MUAMALAT INDONESIA, TBK</option>
												<option value="NISPIDJA" id="bank_list_NISPIDJA">PT. BANK OCBC NISP, TBK</option>
												<option value="NUPAIDJ6" id="bank_list_NUPAIDJ6">PT. BANK NUSANTARA PARAHYANGAN</option>
												<option value="PDACIDJ1" id="bank_list_PDACIDJ1">PT. BPD ACEH</option>
												<option value="PDBKIDJ1" id="bank_list_PDBKIDJ1">PT. BPD BENGKULU</option>
												<option value="PDIJIDJ1" id="bank_list_PDIJIDJ1">PT. BPD PAPUA</option>
												<option value="PDJBIDJA" id="bank_list_PDJBIDJA">PT. BANK JABAR BANTEN, TBK</option>
												<option value="PDJGIDJ1" id="bank_list_PDJGIDJ1">PT. BPD JAWA TENGAH</option>
												<option value="PDJMIDJ1" id="bank_list_PDJMIDJ1">PT. BPD JAMBI</option>
												<option value="PDJTIDJ1" id="bank_list_PDJTIDJ1">PT. BPD JAWA TIMUR</option>
												<option value="PDKBIDJ1" id="bank_list_PDKBIDJ1">PT. BPD KALIMANTAN BARAT</option>
												<option value="PDKGIDJ1" id="bank_list_PDKGIDJ1">PT. BPD KALIMANTAN TENGAH</option>
												<option value="PDKSIDJ1" id="bank_list_PDKSIDJ1">PT. BPD KALIMANTAN SELATAN</option>
												<option value="PDKTIDJ1" id="bank_list_PDKTIDJ1">PT. BPD KALIMANTAN TIMUR</option>
												<option value="PDLPIDJ1" id="bank_list_PDLPIDJ1">PT. BPD LAMPUNG</option>
												<option value="PDMLIDJ1" id="bank_list_PDMLIDJ1">PT. BPD MALUKU</option>
												<option value="PDNBIDJ1" id="bank_list_PDNBIDJ1">PT. BPD NUSA TENGGARA BARAT</option>
												<option value="PDNTIDJ1" id="bank_list_PDNTIDJ1">PT. BPD NUSA TENGGARA TIMUR</option>
												<option value="PDRIIDJA" id="bank_list_PDRIIDJA">PT. BPD RIAU KEPRI</option>
												<option value="PDSBIDJ1" id="bank_list_PDSBIDJ1">PT. BPD SUMATERA BARAT</option>
												<option value="PDSUIDJ1" id="bank_list_PDSUIDJ1">PT. BPD SUMATERA UTARA</option>
												<option value="PDWGIDJ1" id="bank_list_PDWGIDJ1">PT. BPD SULAWESI TENGAH</option>
												<option value="PDWRIDJ1" id="bank_list_PDWRIDJ1">PT. BPD SULAWESI TENGGARA</option>
												<option value="PDWSIDJ1" id="bank_list_PDWSIDJ1">PT. BPD SULAWESI SELATAN DAN SULAWESI BARAT</option>
												<option value="PDWUIDJ1" id="bank_list_PDWUIDJ1">PT. BPD SULAWESI UTARA</option>
												<option value="PDYKIDJ1" id="bank_list_PDYKIDJ1">PT. BPD YOGYAKARTA</option>
												<option value="PINBIDJA" id="bank_list_PINBIDJA">PT. PAN INDONESIA BANK</option>
												<option value="PMASIDJ1" id="bank_list_PMASIDJ1">PT. BANK PRIMA MASTER</option>
												<option value="PUBAIDJ1" id="bank_list_PUBAIDJ1">PT. BANK TABUNGAN PENSIUNAN NASIONAL SYARIAH</option>
												<option value="RABOIDJA" id="bank_list_RABOIDJA">PT. BANK RABOBANK INTERNASIONAL INDONESIA</option>
												<option value="RIPAIDJ1" id="bank_list_RIPAIDJ1">PT. BANK ANDARA</option>
												<option value="ROYBIDJ1" id="bank_list_ROYBIDJ1">PT. BANK ROYAL INDONESIA</option>
												<option value="SWAGIDJ1" id="bank_list_SWAGIDJ1">PT. BANK VICTORIA SYARIAH</option>
												<option value="SWBAIDJ1" id="bank_list_SWBAIDJ1">PT. BANK OF INDIA INDONESIA, TBK</option>
												<option value="SYACIDJ1" id="bank_list_SYACIDJ1">PT. BANK ACEH SYARIAH</option>
												<option value="SYBBIDJ1" id="bank_list_SYBBIDJ1">PT. BANK PERMATA, TBK UNIT USAHA SYARIAH</option>
												<option value="SYBDIDJ1" id="bank_list_SYBDIDJ1">PT. BANK DANAMON INDONESIA UNIT USAHA SYARIAH</option>
												<option value="SYBKIDJ1" id="bank_list_SYBKIDJ1">PT. BANK MAYBANK INDONESIA, TBK UNIT USAHA SYARIAH</option>
												<option value="SYBTIDJ1" id="bank_list_SYBTIDJ1">PT. BANK TABUNGAN NEGARA (PERSERO) UNIT USAHA SYARIAH</option>
												<option value="SYDKIDJ1" id="bank_list_SYDKIDJ1">PT. BPD DKI UNIT USAHA SYARIAH</option>
												<option value="SYJBIDJ1" id="bank_list_SYJBIDJ1">PT. BANK JABAR BANTEN SYARIAH</option>
												<option value="SYJGIDJ1" id="bank_list_SYJGIDJ1">PT. BPD JAWA TENGAH UNIT USAHA SYARIAH</option>
												<option value="SYJMIDJ1" id="bank_list_SYJMIDJ1">PT. BPD JAMBI UNIT USAHA SYARIAH</option>
												<option value="SYJTIDJ1" id="bank_list_SYJTIDJ1">PT. BPD JAWA TIMUR UNIT USAHA SYARIAH</option>
												<option value="SYKBIDJ1" id="bank_list_SYKBIDJ1">PT. BPD KALIMANTAN BARAT UNIT USAHA SYARIAH</option>
												<option value="SYKSIDJ1" id="bank_list_SYKSIDJ1">PT. BPD KALIMANTAN SELATAN UNIT USAHA SYARIAH</option>
												<option value="SYKTIDJ1" id="bank_list_SYKTIDJ1">PT. BPD KALIMANTAN TIMUR UNIT USAHA SYARIAH</option>
												<option value="SYNAIDJ1" id="bank_list_SYNAIDJ1">PT. BANK CIMB NIAGA, TBK UNIT USAHA SYARIAH</option>
												<option value="SYNBIDJ1" id="bank_list_SYNBIDJ1">PT. BPD NUSA TENGGARA BARAT UNIT USAHA SYARIAH</option>
												<option value="SYNIIDJ1" id="bank_list_SYNIIDJ1">PT. BANK NEGARA INDONESIA SYARIAH</option>
												<option value="SYONIDJ1" id="bank_list_SYONIDJ1">PT. BANK OCBC NISP, TBK UNIT USAHA SYARIAH</option>
												<option value="SYRIIDJ1" id="bank_list_SYRIIDJ1">PT. BPD RIAU UNIT USAHA SYARIAH</option>
												<option value="SYSBIDJ1" id="bank_list_SYSBIDJ1">PT. BPD SUMATERA BARAT UNIT USAHA SYARIAH</option>
												<option value="SYSSIDJ1" id="bank_list_SYSSIDJ1">PT. BPD SUMATERA SELATAN DAN BANGKA BELITUNG UNIT USAHA SYARIAH</option>
												<option value="SYSUIDJ1" id="bank_list_SYSUIDJ1">PT. BPD SUMATERA UTARA UNIT USAHA SYARIAH</option>
												<option value="SYTBIDJ1" id="bank_list_SYTBIDJ1">PT. BANK SINARMAS UNIT USAHA SYARIAH</option>
												<option value="SYWSIDJ1" id="bank_list_SYWSIDJ1">PT. BPD SULAWESI SELATAN DAN SULAWESI BARAT UNIT USAHA SYARIAH</option>
												<option value="SYYKIDJ1" id="bank_list_SYYKIDJ1">PT. BPD YOGYAKARTA UNIT USAHA SYARIAH</option>
												<option value="VICTIDJ1" id="bank_list_VICTIDJ1">PT. BANK VICTORIA INTERNASIONAL</option>
												<option value="YUDBIDJ1" id="bank_list_YUDBIDJ1">PT. BANK YUDHA BHAKTI</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<label>Nomor Rekening</label>
											<input type="tel" class="form-control kyc-input-text" id="account_number" name="account_number" maxlength="20" required>
											<p><i>Harap pastikan Anda telah memasukkan nomor akun yang benar, ini akan digunakan saat Anda menjual reksa dana..</i></p>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<label>Nama Rekening</label>
											<input type="text" class="form-control kyc-input-text" id="account_name" name="account_name" maxlength="25" required>
											<p><i>Anda hanya bisa menambahkan rekening bank yang menggunakan nama yang sama seperti di E-KTP.</i></p>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
							</div>
							<div id="step-4" class="">						
								<div id="form-step-3" role="form" data-toggle="validator">
									<div class="form-group">
										<div class="col-sm-12 terms-div-header-col">
											<h3>Pernyataan Persetujuan</h3>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12 terms-agree-col">
											<h4>Dengan menandatangani ini, Saya menyatakan bahwa:</h4>
											<ol>
												<li>Mengisi data dengan benar dan lengkap.</li>
												<li>Mengerti dan menyetujui <b><a href="https://pami.olmatix.com/termcondition" target="_blank">Syarat &amp; Ketentuan</a></b></li>
												<li>Mengerti dan menyetujui <a href="https://pami.olmatix.com/privacypolicy" target="_blank">Kebijakan Privasi</a>
												</li>
											</ol>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<div id="terms-check" data-toggle="validator">
												<input type="checkbox" name="agree" value="yes" class="check" id="agree" data-error="Please accept the Terms and Conditions" required>
												<label for="kyc-agree" class="input-check-label">Saya setuju dengan Syarat &amp; Ketentuan PAMI.</label>
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="form-group text-center">
										<div class="col-sm-12">
											<label class="kyc-input-label">
												<?php echo date('d F Y'); ?>
											</label>
											<h4>Click to sign</h4>
											<input type="text" id="user_sign" style="border-radius: 5px;" required>
											<div class="help-block with-errors"></div>
											<input type="text" id="signatureDone" name="signatureDone" hidden="">									
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:30px;">Tertanda,</div>
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:5px;" id="signature_name">
											<?php echo $user_data[0]->name; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					</form>
					</div>
					<!-- /.box-body -->
				</div>
	       		 <!-- /.box -->	
			</div>
		</div>
    </section>
</div>
<script type="text/javascript">  
    
    $(document).ready(function(){
        Dropzone.autoDiscover = false;
        var foto_upload = new Dropzone(".dropzone",
        {
            url: "<?php echo base_url('user/proses_upload') ?>",
            maxFiles: 1,
            maxFilesize: 2,
            method:"post",
            acceptedFiles:"image/*",
            paramName:"userfile",
            dictInvalidFileType:"Type file ini tidak dizinkan",
            addRemoveLinks:true,
            timeout: 12e4,
    
        });

        //Event ketika Memulai mengupload
        foto_upload.on("sending",function(a,b,c){
            a.token = Math.random();
            c.append("token_foto",a.token);
            $("#foto").val(a.token);
        });

        //Event ketika foto dihapus
        foto_upload.on("removedfile",function(a){
            var token=a.token;
            $.ajax({
                type:"post",
                data:{token:token},
                url:"<?php echo base_url('user/remove_foto') ?>",
                cache:false,
                dataType: 'json',
                success: function(){
                    console.log("Foto terhapus");
                },
                error: function(){
                    console.log("Error");
                }
            });
        }); 

        //Initialize Select2 Elements
        $('.select2').select2();

        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info')
            .on('click', function(){
                if( !$(this).hasClass('disabled')){
                    var elmForm = $("#myForm");
                    if(elmForm){
                        elmForm.validator('validate');
                        var elmErr = elmForm.find('.has-error');
                        if(elmErr && elmErr.length > 0){
                            alert('Oops we still have error in the form');
                            return false;
                        }else{
                            dataString = $("#myForm").serialize();
                            $.ajax({
                            type:"POST",
                            url:"<?php echo base_url(); ?>user/insert_account",
                            data:dataString,
                            success:function (data) {
                                //var foto = $("#signatureDone").val();
                                swal({
                                        title:  "Berhasil!",
                                        text:   "Terima kasih data anda telah berhasil di proses, mohon cek email anda untuk update status registrasi anda",
                                        icon:   "success",
									});
									
									setTimeout(function(){
										window.location.href = '<?php echo base_url(); ?>user/profile';
									}, 5000);
                                },
                             error: function() {
                                    alert('Error occured');
                                }
                            });
                        }
                    }
                }
            });
        var btnCancel = $('<button></button>').text('Cancel')
                                         .addClass('btn btn-danger')
                                         .on('click', function(){
                                                $('#smartwizard').smartWizard("reset");
                                                $('#myForm').find("input, textarea").val("");
                                            });



        // Smart Wizard
        $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                transitionEffect:'fade',
                toolbarSettings: {toolbarPosition: 'bottom',
                                  toolbarExtraButtons: [btnFinish, btnCancel]
                                },
                anchorSettings: {
                            markDoneStep: true, // add done css
                            markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                            removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                        }
             });

        $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            var elmForm = $("#form-step-" + stepNumber);
            if(stepDirection === 'forward' && elmForm){
                elmForm.validator('validate');
                var elmErr = elmForm.children('.has-error');
                if(elmErr && elmErr.length > 0){
                    // Form validation failed
                    return false;
                }
            }
            return true;
        });

        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
            // Enable finish button only on last step
            if(stepNumber == 3){
                $('.btn-finish').removeClass('disabled');
            }else{
                $('.btn-finish').addClass('disabled');
            }
        });

        // signature pad
        var sign = $('#user_sign').SignaturePad({
            allowToSign: true,
            img64: 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7',
            border: '1px solid #c7c8c9',
            width: '300px',
            height: '150px',
            callback: function (data, action) {
                console.log(data);
                $("#signatureDone").val(data);                
            }
        });   
        
    });
</script>