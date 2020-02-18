@extends('layouts.main_lay')

@section('content')
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Other Settings</h4>
                                    <ul class="naves">
                                        <li>
                                            <i class="ti-settings"></i>
                                            <a href="{{ route('main.settings',['circle_id'=>1]) }}" title="">Main Settings</a>
                                        </li>
                                        <li>
                                            <i class="ti-lock"></i>
                                            <a href="{{ route('privacy.settings',['circle_id'=>1]) }}" title="">Privacy Settings</a>
                                        </li>
                                    </ul>
                                </div><!-- settings widget -->
                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-9">
                            <div class="central-meta">
                                <div class="editing-info">
                                    <h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>

                                    <form method="post">
                                        <div class="form-group">
                                            <input type="password" id="input" required="required" />
                                            <label class="control-label" for="input">New password</label><i
                                                class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required="required" />
                                            <label class="control-label" for="input">Confirm password</label><i
                                                class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required="required" />
                                            <label class="control-label" for="input">Current password</label><i
                                                class="mtrl-select"></i>
                                        </div>
                                        <a class="forgot-pwd underline" title="" href="#">Forgot Password?</a>
                                        <div class="submit-btns">
                                            <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                            <button type="button" class="mtr-btn"><span>Update</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- centerl meta -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
