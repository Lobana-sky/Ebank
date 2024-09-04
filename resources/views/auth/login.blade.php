
<!doctype html>
<html lang="en">

<head>
<title>:: Iconic :: Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<style>
   
@import url('https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap');
body.font-nunito {
    font-family: "El Messiri", sans-serif;


    }

    </style>
</head>

<body data-theme="light" class="font-nunito">
	<!-- WRAPPER -->
	<div id="wrapper" class="theme-cyan">
		<div class="vertical-align-wrap" >
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                        <img src="assets/images/logo-white.svg" alt="Iconic">
                    </div>
					<div class="card" style="direction:rtl">
                        <div class="header">
                        <div class="card-header" style="text-align:center">{{ __('تسجيل الدخول') }}</div>
                        </div>
                        <div class="body">
                        <form method="POST" action="{{ route('login') }}">
                         @csrf

                         <!-- <div class="row mb-3">
                             
                             <div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('البريد الالكتروني') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div> -->

                         <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                            required placeholder="البريد الالكتروني" autocomplete="email" name="email" value=""
                            autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                         <!-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div> -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="كلمة السر" required autocomplete="current-password"
                                name="password" value="">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div> 
                        </div> 
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember" style="margin-right:20px">
                                        {{ __(' تذكرني     ') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                         <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('دخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('هل نسيت كلمة المرور') }}
                                    </a>
                                @endif
                            </div>
                         </div>
                        </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
</html>
