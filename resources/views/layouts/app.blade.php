<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="_token" content="{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}" />


        <title>Virtual Office | @yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
   		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   		<!-- Style -->
   		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
   		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style2.min.css') }}" type="text/css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet' />


   		<!-- Script -->
   		<script src="{{ asset('js/app.js') }}"></script>
   		{{-- <script src="{{ asset('js/jquery.js') }}" defer></script> --}}
   		<script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/all.min.js') }}"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="{{ asset('js/slick.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        {{-- <script src="{{ asset('js/scripts.min.js') }}" defer></script> --}}
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js'></script>

        <script type="text/javascript">
            function onWindowResize()
            {
              if($(window).width() > 767 ){
                $('.slides').hover(function(e) {
                  var $container = $(this),
                  top = e.type == 'mouseenter' ? -$container.height() : 0;
                  $container.find('.slide').stop(true).animate({
                    top: top
                  });
                });
              }
            }
        </script>
        <script data-align="right" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#03A9F4" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyMDgyMTI2NTkxNTcwJTIyLCUyMnBob25lJTIyOiUyMjA4MjEyNjU5MTU3MCUyMiwlMjJlbWFpbCUyMjolMjJmaGVyeWNvYmFpbnNAZ21haWwuY29tJTIyJTdE"></script>
        
        


    </head>
    <body id="virtual">
    	<div id="app">
            @include('sweetalert::alert')
            <div class="v top home" id="promo">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3>
                                Titipkan Apartemen Anda <b>Disini</b> & Paling Cepat Tersewa
                            </h3>
                            <a id="rentV" class="btn btn-danger" href="{{ url('sewa') }}">Titipkan Disini</a>
                            <button type="button" id="close" class="btn-close" data-dismiss="home">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
             <nav class="navbar navbar-expand-md navbar-light navbar-virtual" style="height: 55px;">
                <div class="container">
                    <a class="navbar-brand virtual-logo" href="{{ url('/') }}">
                       <h2> {{ config('app.name', 'Virtual Office') }} </h2>
                    </a>
                    <button class="navbar-toggler collapsed " id="btncollapse" type="button" data-toggle="collapse" style="margin-bottom: 20px;" data-target="#navbarSupportedContent" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent" aria-expanded="false">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto virtual-content">
                                <li class="nav-item">
                                    <a href="{{ url('peta') }}">Peta</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('daftarVirtual') }}">Cari Unit</a>
                                </li>
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto virtual-content">
                                @guest
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}">Register</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            	<div class="virtual-main">
            		@yield('content')
            	</div>
                

                <section class="method-pay">
                    <div class="container">
                        <h2 class="pay-title">Pembayaran</h2>
                        <img src="{{ asset('img/bank.png') }}" alt="Virtual Payment">
                    </div>
                </section>
                <div class="footer">
                    <div class="vir-foot1">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-md-3 foot-menu" style="text-align: center;">
                                    <aside>
                                        <a class="footer-logo" href="{{ url('/') }}">
                                            <h1>V</h1>
                                        </a>
                                        <p style="line-height: 1; letter-spacing: 0; font-family: font-awesome;">
                                            <strong>
                                            VOSPACE
                                            <br>
                                            PT.Mear Solusi Utama Internasional
                                            </strong>
                                            <br>
                                            Aldeoz Building Lt.6
                                            <br>
                                            Jl. Warung Jati Barat No.39
                                            <br>
                                            Kalibata Pancoran, Jakarata Selatan 12790
                                        </p>
                                    </aside>
                                </div>
                                <div class="col-sm-6 col-md-3 foot-menu mobileHide">
                                    <aside>
                                        <h3 class="foot-title">
                                            Virtual Office MURAH
                                        </h3>
                                        <div class="foot-content">
                                            <ul class="virtual-content foot-list ">
                                                <li>
                                                    <a href="#">Virtual Office di Jakarta Pusat</a>
                                                </li>
                                                <li>
                                                    <a href="#">Virtual Office di Jakarta Barat</a>
                                                </li>
                                                <li>
                                                    <a href="#">Virtual Office di Jakarta Selatan</a>
                                                </li>
                                                <li>
                                                    <a href="#">Virtual Office di Jakarta Timur</a>
                                                </li>
                                                <li>
                                                    <a href="#">Virtual Office di Jakarta Utara</a>
                                                </li>
                                                <li>
                                                    <a href="#">Virtual Office di Tangerang</a>
                                                </li>
                                                <li>
                                                    <a href="#">Virtual Office di Bekasi</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-sm-6 col-md-3 foot-menu mobileHide">
                                    <aside>
                                        <h3 class="foot-title">
                                            BANTUAN
                                        </h3>
                                        <div class="foot-content">
                                            <ul class="virtual-content foot-list ">
                                                <li>
                                                    <a href="{{ url('sewa') }}">Sewakan Virtual Office Anda</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('syarat') }}">Syarat & Ketentuan VOSPACE</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('panduan') }}">Panduan Penyewa</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('pemilik') }}">Panduan Pemilik</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('contact') }}">Hubungi Kami</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('faq') }}">F.A.Q</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('about') }}">Tentang Kami</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('info') }}">Info VOSPACE</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('karir') }}">Karir</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-sm-6 col-md-3 foot-menu">
                                    <aside>
                                        <h3 class="foot-title">
                                            CUSTOMER SERVICE
                                        </h3>
                                        <div class="foot-content">
                                            <ul class="foot-service">
                                                <li>
                                                    <i class="fas fa-phone"></i> 0812-8783-6698
                                                </li>
                                                <li>
                                                    <p>Senin - Minggu, 08.00 - 22.00 WIB</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-mail-bulk"></i> info@vospace.co.id
                                                </li>
                                                <li class="">
                                                    <i class="ion ion-logo-whatsapp" style="color: green;"></i> 0812-8783-6698
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <ul class="foot-social">
                            <li>
                                <a href="http://www.instagram.com" target="_blank" title="instagram">
                                    <i class="icon ion-logo-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.facebook.com" target="_blank" title="facebook">
                                    <i class="icon ion-logo-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://linkedln.com" target="_blank" title="linkedln">
                                    <i class="icon ion-logo-linkedln"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.twitter.com" target="_blank" title="twitter">
                                    <i class="icon ion-logo-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="copyright">
                            © 2019 VOSPACE.All Right Reserved | PT. MEAR Solusi Utama Internasional
                        </div>
                    </div>
                </div>
            
        </div>
    </body>
</html>
