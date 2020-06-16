@extends('layouts.app')
@section('title', 'Detail')
@section('content')
	<div class="main-content" style="background: #f6f6f6;">
		<div class="unit-section">
			<section class="section1-detail">
				<div class="row">
					<div class="col-md-4 left-cover">
						<p class="intro-detail"></p>
						<img src="{{ asset('img/star.svg') }}">
						<p class="bold-text">
							Unit Pilihan Terbaik
							<br>
							dengan segudang kelebihan
						</p>
						<p class="plain-text">
							Limited best value unit
							<br>
							Pay monthly
							<br>
							Clean & Well-Decorated*
						</p>
					</div>
					<div class="col-sm-12 col-md-8 right-cover" data-toggle="modal" data-target="#unitImage">
						<img src="{{ asset('storage/images/'. $sewavirtual->foto) }}">
					</div>
					<button class="button-galery" data-toggle="modal" data-target="#unitImage" style="right: 146px;">Telusuri unit ini</button>
				</div>
			</section>
			<section class="section2-detail">
				<div class="container">
					<div class="unit-info">
						<div class="row">
							<div class="col-md-8">
								<div id="units">
									<h1>{{ $sewavirtual->namaVirtual }}</h1>
									<p style="margin: 0;">{{ $sewavirtual->id }}</p>
									<ul class="grid-list">
										<li>
											<i class="unit-icon fa fa-phone"></i>
											<span>{{ $sewavirtual->jmlRuangan }}
										</li>
										<li>
											<i class="unit-icon fa fa-phone"></i>
											<span>{{ $sewavirtual->kondisi }}</span>
										</li>
										<li>
											<i class="unit-icon fa fa-phone"></i>
											<span>{{ $sewavirtual->jmlKamar }} Kamar Tidur</span>
										</li>
										<li>
											<i class="unit-icon fa fa-phone"></i>
											<span>{{ $sewavirtual->luas }} m<sup>2</sup></span>
										</li>
										<li>
											<i class="unit-icon fa fa-phone"></i>
											<span>{{ $sewavirtual->kamarMandi }} Kamar Mandi</span>
										</li>
										<li>
											<i class="unit-icon fa fa-phone"></i>
											<span>{{ $sewavirtual->jmlLantai }} Lantai</span>
										</li>
										<li>
											<i class="unit-icon fa fa-phone"></i>
											<span>{{ $sewavirtual->jmlTower }} Tower Anthena</span>
										</li>
										<li>
											<i class="unit-icon fa fa-phone"></i>
											<span>City View</span>
										</li>
									</ul>
								</div>
								<div id="facility" style="margin: 0;">
									<a href="#facilities" data-toggle="collapse" aria-expanded="true">
										<h4>
											<i class="fa fa-check-square"></i>
											Kelengkapan Unit
										</h4>
									</a>
									<div id="facilities" class="sub-content collapse in" aria-expanded="true">
										<div class="row">
											<div class="col-sm-6">
												<ul class="facilities-list">
													<li>
														<i class="fa fa-phone"></i>
														<span>{{ $sewavirtual->fasilitas }}</span>
													</li>
												</ul>
											</div>
											<div class="col-sm-6">
												<ul class="facilities-list">
													<li>
														<i class="fa fa-phone"></i>
														<span>{{ $sewavirtual->fasilitas }}</span>
													</li>
												</ul>
											</div>
											<div class="col-sm-12">
												<p class="color-blue">
													* Kelengkapan unit dapat berubah sewaktu-waktu. Harap pastikan terlebih dahulu ke staff Virtual
												</p>
											</div>
										</div>
									</div>
								</div>
								<div id="desc-units" style="margin: 0;">
									<a href="#desc-unit" data-toggle="collapse" aria-expanded="true">
										<h4>
											<i class="fa fa-check-square"></i>
											Deskripsi
										</h4>
									</a>
									<div id="desc-unit" class="sub-content collapse in" aria-expanded="true">
										<p>Virtual {{ $sewavirtual->namaVirtual }} unit {{ $sewavirtual-> id }}</p>
										<p>{{ $sewavirtual->deskripsi }}</p>
									</div>
								</div>
								<div id="pay-units" style="margin: 0;">
									<a href="#pay-unit" data-toggle="collapse" aria-expanded="true">
										<h4>
											<i class="fa fa-check-square"></i>
											Biaya Bulanan
										</h4>
									</a>
									<div id="pay-unit" class="sub-content collapse in" aria-expanded="true">
										<p>Harga : {{ $sewavirtual->harga }}</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 unit-pay-content">
								<div class="price-unit-card">
									<div class="price-unit">
										<div class="price-title">
											Nikmati Penawaran Spesial Kami
										</div>
										<div class="price-content">
											<p class="price-content-title">Masa Sewa</p>
											<ul class="price-tabs">
												<li class="active" data-terms="12">
													<a class="price-tab-btn" href="#twelve" data-toggle="tab" aria-expanded="true">
														<span>12</span> bln
													</a>
												</li>
												<li class="" data-terms="6">
													<a class="price-tab-btn" href="#six" data-toggle="tab" aria-expanded="false">
														<span>6</span> bln
													</a>
												</li>
											</ul>
											<div class="tab-content">
												<div id="twelve" class="tab-pane active" style="border: 0;">
													<p class="star-price">
														<sup>Rp</sup>
														{{ $sewavirtual->annually }}
														<sub>/tahun</sub>
													</p>
													<div class="star-price-divider">
														<div class="divider-text">OR</div>
														<span>OR</span>
														<div class="divider-line"></div>
													</div>
													<p class="star-price">
														<sup>Rp</sup>
														{{ $sewavirtual->annually }}
														<sub>/tahun</sub>
													</p>
													<div class="form-group">
														<select class="form-control payment-type">
															<option value="">Pilih Jenis Cicilan</option>
															<option value="1">Cicilan Kartu Kredit (Block Limit)</option>
															<option value="2">Cicilan Kartu Kredit (Reccuring)</option>
															<option value="3">Cicilan Tanpa Kartu Kredit</option>
														</select>
													</div>
												</div>
												<div id="six" class="tab-pane" style="border: 0;">
													<p class="star-price">
														<sup>Rp</sup>
														{{ $sewavirtual->semi_annually }}
														<sub>/tahun</sub>
													</p>
													<div class="star-price-divider">
														<div class="divider-text">OR</div>
														<span>OR</span>
														<div class="divider-line"></div>
													</div>
													<p class="star-price">
														<sup>Rp</sup>
														{{ $sewavirtual->semi_annually }}
														<sub>/tahun</sub>
													</p>
													<div class="form-group">
														<select class="form-control payment-type">
															<option value="">Pilih Jenis Cicilan</option>
															<option value="1">Cicilan Kartu Kredit (Block Limit)</option>
															<option value="2">Cicilan Kartu Kredit (Reccuring)</option>
															<option value="3">Cicilan Tanpa Kartu Kredit</option>
														</select>
													</div>
												</div>
											</div>
											<div class="price-contact">
												<i class="ion-logo-whatsapp"></i>
												<span>0812-8783-6698</span>
											</div>
											<form class="form-card">
												<input id="book-unit" class="btn btn-danger" href="#unitbook" type="button" data-toggle="collapse" value="Jadwalkan Kunjungan">
												<br>
												<span class="stok-info">Stok terbatas, pesan sebelum terlambat</span>
												<a id="confirm-check" class="btn-pay" href="#">Bayar Sekarang</a>
											</form>
										</div>
									</div>
									<div class="button-back">
										<button><a href="{{ url('daftarVirtual') }}">Kembali</a></button>
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</section>

		</div>
		<div id="unitImage" class="modal modal-detail">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<div class="container-fluid">
							<a class="modal-back" type="button" data-dismiss="modal" aria-label="Close">
								<i class="fa fa-angle-left"></i>
							</a>
						</div>
					</div>
					<div class="modal-body">
						<div class="container"></div>
					</div>
				</div>
			</div>
		</div>


	</div>
@endsection