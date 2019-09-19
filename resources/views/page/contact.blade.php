@extends('layouts.app')
@section('title', 'Hubungi Kami')
@section('content')
	<div class="main-content" style="background: #f6f6f6;">
		<div class="container">
			<h1 class="content-title">Hubungi Kami</h1>
			<div class="row">
					<div class="segment">
						<div class="clearfix">
							<div class="maps-contact col-md-4">
								<div id="googleMaps" class="maps-contact-content" style="width: 330px; height: 280px;">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9664466040695!2d106.82896321427297!3d-6.268143295463113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2307550c0e1%3A0x571691c61e8ac907!2sJl.%20Warung%20Buncit%20Raya%20No.39%2C%20RT.5%2FRW.5%2C%20Kalibata%2C%20Kec.%20Pancoran%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012740!5e0!3m2!1sid!2sid!4v1568132535207!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" style="width: 100%; height: 100%;"></iframe>
								</div>
								<div class="maps-contact-content">
									<address style="line-height: 1.5;">
										<strong>VOSPACE HQ</strong>
										<br>
										Aldeoz Building Lt.6 
										<br>
										Jl. Warung Jati Barat No.39 
										<br>
										Kalibata Pancoran, Jakarta Selatan 12790 
									</address>
									<p>Customer Service</p>
									<div class="contact-info">
										<p><i class="fa fa-call"></i> 0812-8783-6698 </p>
										<p>Senin - Minggu, 08.00 - 22.00 WIB</p>
										<p><i class="fa fa-mail-bulk"></i> info@vospace.co.id </p>
										<p><i class="ion-logo-whatsapp"></i>0812-8783-6698</p>
									</div>
								</div>
							</div>
							<div class="contact-content col-md-8">
								<h2 class="segment-title">Send Message To Us</h2>
								<form class="contact-form" action="{{ url('contact') }}" method="post" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{!! csrf_token() !!}">
									<div class="form-group">
										<label class="form-label" for="name">Nama</label>
										<input id="name" class="form-control" type="text" name="name" required="">
									</div>
									<div class="form-group">
										<label class="form-label" for="email">Email</label>
										<input id="email" class="form-control" type="text" name="email" required="">
									</div>
									<div class="form-group">
										<label class="form-label" for="nomor">Nomor Telepon</label>
										<input id="nomor" class="form-control" type="text" name="nomor" required="">
									</div>
									<div class="form-group">
										<label class="form-label" for="pesan">Message</label>
										<textarea id="pesan" class="form-control" type="text" name="pesan" required=""></textarea>
									</div>
									<div class="text-center">
										<button class="btn btn-secondary" type="submit">Kirim</button>
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>



@endsection