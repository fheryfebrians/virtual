<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-login">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="_token" content="{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}" />


        <title>Virtual Office | Register</title>

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
	</head>
	<body class="transparent">
        <div class="main-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="login-form">
                        <div class="logo-login">
                            <a href="{{ url('/') }}">
                                <h4>virtual register</h4>
                            </a>
                        </div>
                        <div class="body-login">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label class="login-label">Nama</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-user logo-field"></i>
                                        </span>
                                        <input id="name" type="text" placeholder="Masukan Nama" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="login-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-lock logo-field"></i>
                                        </span>
                                        <input id="password" placeholder="Password Anda" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="login-label">Konfirmasi Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-lock logo-field"></i>
                                        </span>
                                        <input id="password-confirm" placeholder="Ulangi Password" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="login-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="far fa-envelope logo-field"></i>
                                        </span>
                                        <input id="email" type="email" placeholder="Masukan Email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('alamat') }}" required autocomplete="alamat">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="login-label">No. Handphone</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-mobile-alt logo-field"></i>
                                        </span>
                                        <input id="nomor" type="text" placeholder="Masukan No. Handphone" class="form-control  @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" required autocomplete="nomor">

                                        @error('nomor')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center mt5">
                                    <button type="submit" class="btn btn-login">
                                        Register
                                    </button>
                                </div>
                                <div class="text-center mb-0">
                                    <span class="redirect">Sudah Punya Akun? Klik <a href="{{ route('login') }}">disini</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>