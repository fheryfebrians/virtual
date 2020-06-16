@extends('layouts.app')

@section('content')
   <section class="vir-sec1">
   		<div class="sec1-head">
   			<div class="container">
   				<h1>Spesialis Sewa Virtual Office</h1>
   				<div class="vir-search">
   					<div class="vir-option">
   						<label for="rent-vir">
      						<span>
                           <a href="sewa">SEWA</a>
                        </span>
   							<input id="rent-vir" type="radio" name="c" value="0" checked="">
   						</label>
   						<label for="sell-vir">
   							<span>JUAL</span>
   							<input id="sell-vir" type="radio" name="c" value="1">
   						</label>
   						<span class="left"></span>
   					</div>
   					<div class="vir-filter row">
   						<div class="vir1">
   							<span class="icon-label"><i class="fa fa-search"></i></span>
   							<div class="rbt clearfix open" style="position: relative;" tabindex="-1">
   								<div class="rbt-input-hint-container" style="position: relative;">
   									<input class="rbt-input-main form-control rbt-input" ari-autocomplete="both" aria-expanded="false" aria-haspopup="listbox" autocomplete="nope" placeholder="Cari Nama Virtual Office atau wilayah" role="combobox" type="text" value="" style="padding-left: 25px;">
   								</div>
   							</div>
   						</div>
   						<div class="vir2">
   							<span class="icon-label">Rp</span>
   							<input class="form-control" type="text" name="pr" placeholder="Harga max per bulan" value="" style="padding-left:25px;">
   						</div>
   						<div class="vir2">
   							<span class="icon-label"></span>
   							<select id="br" class="form-control" name="br">
   								<option value="all">All Bedrooms</option>
   								<option value="1">Studio</option>
   								<option value="2">1 BR</option>
   								<option value="3">2 BR</option>
   								<option value="4">3 BR</option>
   							</select>
   							<span class="caret">
   								<i class="fa fa-sort"></i>
   							</span>
   						</div>
   						<div class="vir2">
   							<button class="btn btn-primary btn-block">Cari</button>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   		<div class="sp">
   			<div class="row">
   				<div class="sp-1 col-md-4">
   					<div class="sp-desc">
   						<h3>Pilihan Terlengkap</h3>
   						<p>Temukan lebih dari 8,000 unit virtual office atau ruang kerja siap huni langsung dari pemilik</p>
   					</div>
   				</div>
   				<div class="sp-1 col-md-4">
   					<div class="sp-desc">
   						<h3>Cicilan 12x</h3>
   						<p>Ubah pembayaran anda menjadi cicilan up 12x dengan kartu kredit atau solusi finasial lainnya</p>
   					</div>
   				</div>
   				<div class="sp-1 col-md-4">
   					<div class="sp-desc">
   						<h3>Professional Advisor</h3>
   						<p>Advisor properti yang berkomitmen penuh untuk menemukan virtual office atau ruang kerja impian anda</p>
   					</div>
   				</div>
   			</div>
   		</div>
   	</section>


      <section class="vir-sec2">
         <div class="col-md-12">
            <h2 class="section-title">Unit Terbaik</h2>
            <button class="prev">
               <i class="fa fa-chevron-left fa-2x"></i>
            </button>
            <button class="next">
               <i class="fa fa-chevron-right fa-2x"></i>
            </button>
            <div class="slider-area slider">
               @if($sewavirtual->isempty())
                  <p>Belum ada unit disini</p>
               @else
               @foreach ($sewavirtual as $sewavirtual)
               <div style="display: flex;">
                  <div class="units-virtual" style="opacity: 1;">
                     <div class="unit1">
                        <a href="{{ url('detailVirtual', $sewavirtual->id) }}">
                           <img src="{{ asset('storage/images/'.$sewavirtual->foto) }}" style="width: 100%;">
                        </a>
                        <div class="">
                           <a href="{{ url('detailVirtual', $sewavirtual->id) }}">
                              <h5 class="">{{ $sewavirtual->namaVirtual }}</h5>
                           </a>
                              <p class="">{{ $sewavirtual->jmlKamar }} Bedroom, {{ $sewavirtual->kamarMandi }} Bathroom</p>
                              <p class="">
                                 <span>Rp</span>
                                 <span>{{ $sewavirtual->semi_annually }}</span>
                                 <span class="unit-price-label">per month</span>
                              </p>
                             <p class="">{{ $sewavirtual->phone }}</p>
                             <ul class="unit5">
                                 <li>
                                    <p>{{ $sewavirtual->lokasi }}</p>
                                 </li>
                                 <li>
                                    <button class="btn-flat"><a href="{{ url('detailVirtual', $sewavirtual->id) }}">Beli</a></button>
                                 </li>
                              </ul>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               @endif
            </div>
         </div>
      </section>




      <section class="method-special">
         <h2>Kenapa Harus Pilih VOSPACE ?</h2>
         <p>Apa yang paling spesial dibandingkan dengan platform lainnya ?</p>
         <ul>
            <li>
            </li>
         </ul>
      </section>


@endsection