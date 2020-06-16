@extends('layouts.app')
@section('title', 'Cari Unit')
@section('content')
	<div class="main-content" style="background: #f6f6f6;">
		<div class="container">
			<div class="col-md-12 header-unit">
				<strong class="browse-result">
					Menampilkan unit di <a class="fresult" href="#">Semua Unit di Jakarta</a>
				</strong>
			</div>
			@if($sewavirtual->isempty())
				<p>Belum ada unit disini</p>
			@else
			<div class="row">
				@foreach ($sewavirtual as $sewavirtual)
				<div class="col-md-4" style="opacity: 1; padding: 10px;">
					<div class="unit-card">
						<a href="{{ url('detailVirtual', $sewavirtual->id) }}">
							<img src="{{ asset('storage/images/'.$sewavirtual->foto) }}" style="width: 100%; min-height: 196.367px;">
						</a>
						<div class="unit-detail">
							<img class="star-label" src="{{ asset('img/star.svg') }}">
							<span class="unit-label">bisa dibayar per bulan</span>
							<span class="unit-code">({{ $sewavirtual->id }})</span>
							<a href="{{ url('detailVirtual', $sewavirtual->id) }}">
								<h5 class="unit-name">{{ $sewavirtual->namaVirtual }}</h5>
							</a>
								<p class="unit-room">{{ $sewavirtual->jmlKamar }} Bedroom, {{ $sewavirtual->kamarMandi }} Bathroom</p>
								<p class="unit-price">
									<span>Rp</span>
									<span>{{ $sewavirtual->harga }}</span>
									<span class="unit-price-label">per month</span>
								</p>
								<ul class="unit-fasilitas">
									<li>
										<span>{{ $sewavirtual->luas }}</span> m <sup>2</sup>
									</li>
									<li>
										<span>{{ $sewavirtual->jmlTower }}</span> Tower
									</li>
									<li>
										<span>{{ $sewavirtual->jmlLantai }}</span> Lantai
									</li>
								</ul>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			@endif
		</div>
	</div>

@endsection