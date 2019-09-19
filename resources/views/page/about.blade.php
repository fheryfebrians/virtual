@extends('layouts.app')
@section('title', 'Tentang Virtual')
@section('content')
	<div class="main-contents">
		<section class="section-tentang">
			<div class="container">
				<div class="col-sm-12 col-xs-8">
					<h2 class="content-title text-center">
						Cari Virtual Office
						<br>
						Jadi lebih mudah
					</h2>
					<p>Lupakan cara konvensional. pilih virtual office secara online dan apa adanya berdasarkan selera</p>
					<p>Hemat waktu, uang dan tenaga anda</p>
				</div>
			</div>
		</section>
		<section class="section-tentang3">
			<div class="row">
				<div class="col-sm-6 left-side">
					<h3 class="colored small-title">
						<span>DARI PIHAK PENYEWA</span>
					</h3>
					<ul>
						<li>Susahnya mencaro informaso sewa virtual office di internet</li>
						<li>Foto yang tidak representatif</li>
						<li>Susahnya menghubungi agent/pemilik virtual office</li>
						<li>Repotnya harus meluangkan waktu untuk melakukan kunjungan ke berbagai unit</li>
						<li>Sistem pembayaran yang memberatkan karena harus dibayar sekaligus di depan</li>
					</ul>
				</div>
				<div class="col-sm-6 right-side">
					<h3 class="colored small-title">
						<span>DARI PIHAK PENYEWA</span>
					</h3>
					<ul>
						<li>Susahnya mencaro informaso sewa virtual office di internet</li>
						<li>Foto yang tidak representatif</li>
						<li>Susahnya menghubungi agent/pemilik virtual office</li>
						<li>Repotnya harus meluangkan waktu untuk melakukan kunjungan ke berbagai unit</li>
						<li>Sistem pembayaran yang memberatkan karena harus dibayar sekaligus di depan</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="section-tentang2">
			<div class="container">
				<h2 class="content-title bordered">Cerita Disini</h2>
					<p class="col-sm-10 col-md-12 text-section">
						HALO! Cerita kami bermula saat kedua founder kami menceritakan permasalahan yang mereka hadapi dalam proses sewa virtual office di Jakarta, keduanya adalah generasi millenial berjiwa muda yang tidak suka sesuatu yang repot dan tentunya sangat menghargai kepraktisan, dimana yang satu mewakili pihak penyewa, dan yang satu lagi mewakili pihak pemilik.
					</p>
			</div>
		</section>
		<section class="section-tentang4">
			<div class="container">
				<h2 class="content-title">Kenapa ini menjadi masalah ?</h2>
				<p class="col-sm-10 col-md-12 text-section">
						Hal ini sangat disayangkan karena virtual office adalah kebutuhan generasi muda yang produktif di Jakarta. virtual office yang nyaman dan dekat dengan tempat kerja memungkinkan kita untuk tidak menghabiskan waktu dan energi di jalan, dan mengalokasikannya ke kegiatan yang lebih produktif bersama teman dan keluarg
				</p>
				<div class="col-sm-12 text-center">
					<img src="{{ asset('img/qq.svg') }}" style="margin-top: 20px; width: 80px;">
				</div>
			</div>
		</section>
		<section class="section-tentang5">
			<div class="container">
				<h2 class="content-title">Solusi Kami</h2>
				<p class="col-sm-10 col-md-12 text-section">
					Berawal dari cerita inilah, kami memutuskan untuk memulai virtual office, sebuah startup properti yang melayani seluruh kebutuhan penyewaan virtual office di Jakarta. Dengan pelayanan yang lengkap dari sisi online dan offline seperti :
    			</p>
    		</div>
    		<ul class="text-center col-sm-12">
    			<li>
    				<div class="slides">
    					<div class="slide">
    						<div class="slide-content">
    							<img src="{{ asset('img/1b.jpg') }}">
    						</div>
    						<div class="slide-content">
    							<p class="blue-title">Transparan</p>
    							Proses pencarian informasi yang nyaman dan transparan
    						</div>
    					</div>
    				</div>
    			</li>
    			<li>
    				<div class="slides">
    					<div class="slide">
    						<div class="slide-content">
    							<img src="{{ asset('img/1a.jpg') }}">
    						</div>
    						<div class="slide-content">
    							<p class="blue-title">Transparan</p>
    							Proses pencarian informasi yang nyaman dan transparan
    						</div>
    					</div>
    				</div>
    			</li>
    			<li>
    				<div class="slides">
    					<div class="slide">
    						<div class="slide-content">
    							<img src="{{ asset('img/1c.jpg') }}">
    						</div>
    						<div class="slide-content">
    							<p class="blue-title">Transparan</p>
    							Proses pencarian informasi yang nyaman dan transparan
    						</div>
    					</div>
    				</div>
    			</li>
    			<li>
    				<div class="slides">
    					<div class="slide">
    						<div class="slide-content">
    							<img src="{{ asset('img/1d.jpg') }}">
    						</div>
    						<div class="slide-content">
    							<p class="blue-title">Transparan</p>
    							Proses pencarian informasi yang nyaman dan transparan
    						</div>
    					</div>
    				</div>
    			</li>
    			<li>
    				<div class="slides">
    					<div class="slide">
    						<div class="slide-content">
    							<img src="{{ asset('img/1b.jpg') }}">
    						</div>
    						<div class="slide-content">
    							<p class="blue-title">Transparan</p>
    							Proses pencarian informasi yang nyaman dan transparan
    						</div>
    					</div>
    				</div>
    			</li>
    		</ul>
    	</section>
    	<section class="section-tentang6">
    		<div class="container">
    			<h3>
    				Tertarik untuk menggunakan Virtual ?
    				<br>
    				Klik dibawah ini untuk mengetahui caranya
    			</h3>
    			<a class="btn btn-danger" href="{{ url('sewa') }}">Sewakan Virtual Office</a>
    			<a class="btn btn-primary" href="{{ url('daftarVirtual') }}">Cari virtual office</a>
    		</div>
    	</section>


@endsection