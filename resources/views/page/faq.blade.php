@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
	<div class="main-content" style="background-color: #f6f6f6;">
		<div class="container">
			<h1 class="content-title">F.A.Q - Pertanyaan yang sering diajukan</h1>
			<div class="row">
				<div class="col-sm-9">
					<div class="segment">
						<div class="faq-content">
							<h4><b>A. Tentang Prosedur Pemesanan</b></h4>
							<p style="color: #008dc2;">
								<b>1. Apakah saya dapat meminta permintaan khusus?</b>
							</p>
							<p>Ya, terkadang anda dapat menyampaikan permintaan khusus anda terkait unit tersebut kepada kami seperti penambahan/pengurangan furniture, kesepakatan mulai tanggal sewa, dll, namun harap diingat bahwa ada kemungkinan pihak vendor/pemilik unit akan memberikan biaya tambahan untuk setiap permintaan khusus tersebut.</p>
							<br>
							<h4><b>B. Tentang Prosedur Pembayaran</b></h4>
							<p style="color: #008dc2;">
								<b>1. Bagaimana cara melakukan pembayaran cicilan ?</b>
							</p>
							<p>Anda dapat melakukannya dengan menggesek kartu kredit anda di mesin EDC virtual office dan kami akan mengubahnya secara langsung menjadi program cicilan apabila kartu kredit anda telah bekerjasama dengan kami.</p>
							<br>
							<h4><b>C. Tentang Menyewakan Virtual Office</b></h4>
							<p style="color: #008dc2;">
								<b>1. Saya adalah pemilik virtual office, apakah saya dapat menitipkan unit saya</b>
							</p>
							<p>Tentu saja,  Anda bisa menitipkan unit anda di <a href="{{ url('sewa') }}">sini</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="segment">
						<div class="sidebar text-center">
							<p class="sidebar-title">
								Kelebihan Layanan Virtual Office
							</p>
							<div class="sidebar-feature">
								<div class="feature-img">
									<img src="{{ asset('img/1a.jpg') }}">
								</div>
								<h3 class="feature-title">Quality and 360 Photo</h3>
								<p>Foto yang representatif dan 360 virtual tour memastikan anda tidak membuang waktu anda untuk unit yang tidak anda suka.</p>
							</div>
							<div class="sidebar-feature">
								<div class="feature-img">
									<img src="{{ asset('img/1b.jpg') }}">
								</div>
								<h3 class="feature-title">Informasi Lengkap & Transparan</h3>
								<p>semua unit yang ada di Virtual Office merupakan unit yang sudah diverifikasi. anda juga bisa melihat detil semua kelengkapan dan informasi terkait unit tersebut tanpa ditutupi.</p>
							</div>
							<div class="sidebar-feature">
								<div class="feature-img">
									<img src="{{ asset('img/1c.jpg') }}">
								</div>
								<h3 class="feature-title">Booking Online</h3>
								<p>Book unit favorit anda langsung secara online. Tim kami akan dengan senang hati menemani anda melihat unit favorit anda tanpa dikenakan biaya..</p>
							</div>
							<div class="sidebar-feature">
								<div class="feature-img">
									<img src="{{ asset('img/1d.jpg') }}">
								</div>
								<h3 class="feature-title">Bisa dibayarkan per bulan</h3>
								<p>Gunakan kartu kredit anda untuk mengubah pembayaran menjadi cicilan per bulan (cicilan 0%), sehingga anda tidak perlu membayarkan dengan nominal yang besar di depan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection