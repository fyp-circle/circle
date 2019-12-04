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
                            <h2 class="log-title">Reset Password</h2>
                            <p>
                                Enter New Password!
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="password" required="required" />
                                    <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required="required" />
                                    <label class="control-label" for="input">Confirm Password</label><i
                                        class="mtrl-select"></i>
                                </div>
                                <div class="submit-btns">
                                    <button class="mtr-btn signup" type="button"><span>Reset</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/main.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>

</html>