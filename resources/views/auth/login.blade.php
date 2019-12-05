{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
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
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Circle</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link href="{{ URL::asset('css/main.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="container-fluid pdng0">
            <div class="row merged">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="land-featurearea"
                        style="background-image:url('images/networking.jpg'); background-size: cover;">
                        <div class="land-meta">
                            <h1>Circle</h1>
                            <p>
                                Social Media Platform
                            </p>
                            <div class="friend-logo">
                                <span><img src="{{ URL::asset('images/wink.png') }}" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="login-reg-bg">
                        <div class="log-reg-area sign">
                            <h2 class="log-title">Login</h2>
                            <p>
                                Don’t use Circle Yet? <a href="#" title="">Join now</a>
                            </p>
                            <form method="post"  action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                        <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    {{-- <input type="email" id="input" required="required"  name="email" /> --}}
                                    {{-- <label class="control-label" for="input">Email</label><i class="mtrl-select"></i> --}}
                                    <label  class="control-label" for="input">{{ __('Email Address') }}</label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    {{-- <input type="password" required="required" name="email" /> --}}
                                    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="input" class="control-label">{{ __('Password') }}</label><i class="mtrl-select"></i>
                                    {{-- <label class="control-label" for="input">Password</label> --}}
                                </div>
                                <div class="checkbox">
                                    <label>
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i class="check-box"></i>
                                        {{-- <input type="checkbox" checked="checked" name = "remember" /> --}}
                                        Always
                                        Remember Me.
                                    </label>
                                </div>
                                <a href="{{ route('forget.pwd') }}" title="" class="forgot-pwd">Forgot Password?</a>
                                <div class="submit-btns">
                                    <button type="submit" class="mtr-btn signin" type="button"><span>Login</span></button>
                                    <button class="mtr-btn signup" type="button"><span>Register</span></button>
                                </div>
                            </form>
                        </div>
                        <div class="log-reg-area reg">
                            <h2 class="log-title">Register</h2>
                            <p>
                                Don’t know how Circle works? <a href="#" title="">Take the tour</a>
                            </p>
                            <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                <div class="form-group">
                                    <input id="name" type="text" required="required" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                    <label class="control-label" for="input">First & Last Name</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="email" required="required"  name="email" value="{{ old('email') }}" required autocomplete="email" />
                                    <label class="control-label" for="input">Email</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required="required" name="password" required autocomplete="new-password" />
                                    <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required="required" name="password_confirmation" required autocomplete="new-password"/>
                                    <label class="control-label" for="input">Confirm Password</label><i
                                        class="mtrl-select"></i>
                                </div>
                                {{-- <div class="form-radio">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio" checked="checked" /><i
                                                class="check-box"></i>Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio" /><i class="check-box"></i>Female
                                        </label>
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <input type="text" required="required" />
                                    <label class="control-label" for="input">Email@</label><i class="mtrl-select"></i>
                                </div> --}}
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" /><i class="check-box"></i>Accept Terms
                                        & Conditions ?
                                    </label>
                                </div>
                                <a href="#" title="" class="already-have">Already have an account</a>
                                <div class="submit-btns">
                                        <button type="submit" class="mtr-btn btn-primary">
                                                <span>Register</span>
                                            </button>
                                    {{-- <button class="mtr-btn signup" type="button" type="submit"><span>Register</span></button> --}}
                                </div>
                            </form>
                        </div>
                        {{-- <div class="log-reg-area form forgot-pwd">
						<h2 class="log-title">Recover Password</h2>
							<p>
								Enter Email Address to get your code!
							</p>
						<form method="post">
							<div class="form-group">
							  <input type="text" required="required"/>
							  <label class="control-label" for="input">Email@</label><i class="mtrl-select"></i>
							</div>
							<div class="submit-btns">
								<button class="mtr-btn signup" type="button"><span>Send Code</span></button>
							</div>
						</form>
					</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/main.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>

</html>
