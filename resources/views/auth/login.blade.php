<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/login/main.css') }}">
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
                @csrf
                <span class="login100-form-title p-b-51">
						Login
                </span>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                    <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    <span class="focus-input100"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                    <span class="focus-input100"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        @if (Route::has('password.request'))
                            <a class="txt1" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<script src="{{asset('assets/login/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/login/bootstrap.min.js')}}"></script>

</body>
</html>
