<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-login">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="_token" content="{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}" />


        <title>Virtual Office | Login</title>

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
										<h4>virtual login</h4>
									</a>
								</div>
								<div class="body-login">
									<form method="POST" action="{{ route('login') }}" enctype="multipart/form-data" >
										@csrf
				
										<div class="form-group">
											<label class="login-label">Email</label>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="far fa-envelope logo-field"></i>
												</span>
												<input id="email" type="email" placeholder="Masukan Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
				
												@error('email')
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
												<input id="password" type="password" placeholder="Password Anda" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					
													@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
											</div>
										</div>
										<div class="text-center mt5">
											<button type="submit" class="btn btn-login">
												Login
											</button>
											</div>
											<div class="text-center mb-0">
												<span class="redirect">Belum Punya akun ? daftar <a href="{{ route('register') }}">disini</a></span>
											</div>
									</form>
								</div>
							</div>
						</div>
					</div>
		</div>
	</body>
</html>