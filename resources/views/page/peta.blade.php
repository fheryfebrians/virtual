@extends('layouts.app')
@section('title', 'Peta')
@section('content')
	<div class="main-content">
			<div class="row">	
				<div class="col-md-5">
					<div id="map" class="map-content">
						
					</div>
				</div>
				<div class="col-md-7">
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
														<span>{{ $sewavirtual->semi_annually }}</span>
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
			</div>


	<script type="text/javascript">
	 	
		var map = L.map('map', {
	    center: [-6.21, 106.84],
	    zoom: 12
	});

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox.streets'
		}).addTo(map);

	 L.marker([ {{ $sewavirtual->latitude }}, {{ $sewavirtual->longitude }} ]).addTo(map).bindPopup("{{ $sewavirtual->namaVirtual }}").openPopup()();
			 


	</script>
@endsection