@extends('layouts.app')

@section('title', 'Sewa Virtual Office')

@section('content')
	<div id="sewa-form" class="sewa-form">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-5" style="margin: 50px 0;">
					<h1 class="sewa-title">Titipkan Virtual Office Anda. GRATIS!</h1>
					<div class="sewa-group">
						<ul class="sewa-do">
							<li>
								<i class="fa fa-check"></i>
								Unit anda akan kami foto secara professional
							</li>
							<li>
								<i class="fa fa-check"></i>
								Kami akan mencarikan pembeli/penyewa untuk unit anda
							</li>
							<li>
								<i class="fa fa-check"></i>
								Kami akan mengatar langsung pembeli/penyewa ke unit anda
							</li>
							<li>
								<i class="fa fa-check"></i>
								Rata-rata unit yang tersewa lewat Virtual Office laku dalam waktu 14 - 30 hari
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-7 vir-pattern">
					<form id="uploadSewa" class="sewa-form form" method="post" action="{{url('/sewa') }}" enctype="multipart/form-data">
						@if (session('succcess'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif
						<p class="sewa-title">Titipkan Sekarang!</p>
						@csrf
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input id="namaPemilik" placeholder="Nama Pemilik" class="form-control sewa-forms" type="text" name="namaPemilik" required="">
									</div>
									<div class="col-md-6">
										<input id="email" placeholder="Email" class="form-control sewa-forms" type="email" name="email" required="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input id="phone" placeholder="Nomor Telepon" class="form-control sewa-forms" type="text" name="phone" required="">
									</div>
									<div class="col-md-6">
										<input id="phone_wa" placeholder="Nomor Whatsapp" class="form-control sewa-forms" type="text" name="phone_wa">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="line-select">
									<select id="statusPemilik" class="form-control sewa-select" name="statusPemilik">
										<option value="0">--Pilih Status--</option>
										<option value="owner">Owner</option>
										<option value="agent">Agent</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<input id="namaVirtual" placeholder="Nama Virtual Office" class="form-control sewa-forms" type="text" name="namaVirtual" required="">
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<div class="line-select">
											<select id="jmlKamar" class="form-control sewa-select" name="jmlKamar">
												<option value="0">--Jumlah Kamar--</option>
												<option value="studio">Studio</option>
												<option value="1br">1 BR</option>
												<option value="2br">2 BR</option>
												<option value="3br+">3 BR+</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="line-select">
											<select id="kamarMandi" class="form-control sewa-select" name="kamarMandi">
												<option value="0">--Kamar Mandi--</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="line-select">
											<select id="kondisi" class="form-control sewa-select" name="kondisi">
												<option value="0">--Kondisi--</option>
												<option value="non">Non Furnished</option>
												<option value="semi">Semi Furnished</option>
												<option value="full">Full Furnished</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<input id="jmlUnit" placeholder="Jumlah Unit" class="form-control sewa-forms" type="text" name="jmlUnit">
										<!-- <p class="text-danger">{{ $errors->first('jmlUnit') }}</p> -->
									</div>
									<div class="col-md-4">
										<input id="jmlRuangan" placeholder="Jumlah Ruangan" class="form-control sewa-forms" type="text" name="jmlRuangan">
									</div>
									<div class="col-md-4">
										<input id="jmlLantai" placeholder="Jumlah Lantai" class="form-control sewa-forms" type="text" name="jmlLantai">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input id="jmlTower" placeholder="Jumlah Tower" class="form-control sewa-forms" type="text" name="jmlTower">
									</div>
									<div class="col-md-6">
										<input id="luas" placeholder="Luas " class="form-control sewa-forms" type="text" name="luas">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<input type="text" placeholder="Alamat" id="alamat" class="form-control sewa-forms" name="alamat">
									</div>
									<div class="col-md-4">
										<div class="line-select">
											<select id="kecamatan" class="form-control sewa-select" name="kecamatan">
												<option value="0">--Kecamatan--</option>
												<option value="1">Cempaka Putih Barat</option><option value="2">Cempaka Putih Timur</option><option value="3">Rawasari</option><option value="4">Cideng</option><option value="5">Dari Pulo</option><option value="6">Kebon Kelapa</option><option value="7">Gambir</option><option value="8">Johar Baru</option><option value="9">Kemayoran</option><option value="10">Mentent</option><option value="11">Sawah Besar</option><option value="12">Senen</option><option value="13">Tanah Abang</option><option value="14">Kep. Seribu</option><option value="15">Cilincing</option><option value="16">Kelapa Gading</option><option value="17">Koja</option><option value="18">Pademangan</option><option value="19">Penjaringan</option><option value="20">Tanjung Priok</option><option value="21">Cakung</option><option value="22">Cipayung</option><option value="23">Ciracas</option><option value="24">Duren Sawit</option><option value="25">Jatinegara</option><option value="26">Kramat Jati</option><option value="27">Makasar</option><option value="28">Matraman</option><option value="29">Pasar Rebo</option><option value="30">Pulogadung</option><option value="31">Cilandak</option><option value="32">Jagakarsa</option><option value="33">Kebayoran Baru</option><option value="34">Kebayoran Lama</option><option value="35">Mampang</option><option value="36">Pancoran</option><option value="37">Pasar Minggu</option><option value="38">Pesanggrahan</option><option value="39">Setiabudi</option><option value="40">Tebet</option><option value="41">Cengkareng</option><option value="42">Grogol</option><option value="43">Taman Sari</option><option value="44">Tambora</option><option value="45">Kebon Jeruk</option><option value="46">Kalideres</option><option value="47">Palmerah</option><option value="48">Kembangan</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="line-select">
											<select id="kota" class="form-control sewa-select" name="kota">
												<option value="">--Kota--</option>
												<option value="Jakarta Pusat">Jakarta Pusat</option><option value="Jakarta Barat">Jakarta Barat</option><option value="Jakarta Timur">Jakarta Timur</option><option value="Jakarta Selatan">Jakarta Selatan</option><option value="Jakarta Utara">Jakarta Utara</option><option value="Tanggerang">Tanggerang</option><option value="Bekasi">Bekasi</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="hidden" name="latitude" id="latitude">
								<input type="hidden" name="longitude" id="longitude">
							</div>
							<div class="form-group">
								<p>Kelengkapan Unit</p>
								<div class="row">
									<ul class="col-md-12 checkbox-fasilitas">
										<li>
											<label class="sewa-check">
												<input type="checkbox" name="fasilitas[]" value="ac"> AC
											</label>
										</li>
										<li>
											<label class="sewa-check">
												<input type="checkbox" name="fasilitas[]" value="air">	Air Panas
											</label>
										</li>
										<li>
											<label class="sewa-check">
												<input type="checkbox" name="fasilitas[]" value="card"> Access Card
											</label>
										</li>
										<li>
											<label class="sewa-check">
												<input type="checkbox" name="fasilitas[]" value="kulkas"> Kulkas
											</label>
										</li>
										<li>
											<label class="sewa-check">
												<input type="checkbox" name="fasilitas[]" value="laundry"> Laundry
											</label>
										</li>
										<li>
											<label class="sewa-check">
												<input type="checkbox" name="fasilitas[]" value="tv"> Television
											</label>
										</li>
									</ul>
									<p class="text-danger">{{ $errors->first('fasilitas') }}</p>
								</div>
							</div>
							<div class="form-group" id="harga">
								<p>Harga Per Bulan</p>
								<span>Rp.</span>
								<input id="harga" placeholder="Harga" class="form-control sewa-forms" type="text" name="harga" style="left: 30px;
								width: 80%;
								position: relative;
								top:-24px;">
							</div>
							<div id="photos" class="photos form-group">
								Upload Foto: <input type="file" id="foto" name="foto" required= "" style="float: right; width: 80%;" required="">
							</div>
							<div class="form-group" style="padding-top: 20px;">
								<label style="position:absolute;">Deskripsi: </label><textarea id="deskripsi" name="deskripsi" style="position: relative; top: 20px;"></textarea>
							</div>
							<div class="info-text">
								<p class="info-title">Yang Wajib Anda Ketahui</p>
								<p class="info-highlight">Agar Virtual Office Anda Cepat Laku</p>
								<button class="btn btn-infos" id="btn-info" type="button">
									<img src="{{ asset('img/lamp.svg') }}">
								</button>
							</div>
								<div class="col-md-6" style="margin-bottom: 10px; margin-left: 25%;">
									<button class="btn btn-primary btn-block" id="btnUploadSewa" type="submit">submit</button>
								</div>
					</form>

					<div class="form-info hidden">
						<div class="btn btn-close">
							<i class="fa fa-times" style="width: 30px; height: 30px;"></i>
						</div>
						<div class="info-header">
							<img src="{{ asset('img/ww.svg') }}">
							<p class="info-title">Yang wajib anda ketahui</p>
						</div>
						<ul class="info-list">
							<li>
								<i class="fa fa-check"></i>  Harga yang kompetitif meningkatkan peluang tersewa / terjual hingga 100%
							</li>
							<li>
								<i class="fa fa-check"></i>  Foto yang jelas dan terang dengan jumlah minimal 4 akan meningkatkan peluang tersewa / terjual hingga 50%
							</li>
							<li>
								<i class="fa fa-check"></i>  Foto yang jelas dan terang dengan jumlah minimal 4 akan meningkatkan peluang tersewa / terjual hingga 50%
							</li>
						</ul>
						<div class="info-calc">
							<p>Misal : Anda memiliki apartemen X dengan harga pasar 60 juta per tahun, apabila unit anda tidak tersewa selama 1 bulan maka Anda akan mengalami kerugian sebesar : </p>
							<ul>
								<li>Kehilangan Pendapatan Sewa 1 Bulan 1/12 x Rp 60.000.000 = <span class="text-danger">Rp. 5.000.000</span>
								</li>
								<li>Biaya maintenance dan service charger senilai kurang lebih Rp <span class="text-danger">1.000.000</span>
								</li>
								<li><span class="text-danger">Total = Rp 6.000.000</span><b>setara dengan 10%</b> dari harga sewa setahun</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('content.poster')



@endsection