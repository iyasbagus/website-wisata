<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('atmin/images/favicon.png')}}">
    <link href="{{asset('atmin/css/style.css')}}" rel="stylesheet">  



</head>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="POST" action="{{ route('login')}}">
                                        @csrf

                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"  
                                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                                            required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"  {{
                                                        old('remember') ? 'checked' : '' }}>
                                                        
                                                    <label class="form-check-label" for="remember">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                 @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password?</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? 
                                            <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('atmin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('atmin/js/quixnav-init.js')}}"></script>
    <script src="{{asset('atmin/js/custom.min.js')}}"></script>

</body>

</html>