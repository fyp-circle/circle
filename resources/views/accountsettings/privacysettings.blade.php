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
                                            <a href="{{ route('change.password',['circle_id'=>1]) }}" title="">change password</a>
                                        </li>
                                    </ul>
                                </div><!-- settings widget -->
                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-9">
                            <div class="central-meta">
                                <div class="onoff-options">
                                    <h5 class="f-title"><i class="ti-settings"></i>Privacy Settings</h5>
                                    <p>This settings is for basic Privacy preferences</p>
                                    <form method="post">
                                        <div class="setting-row">
                                            <span>Sub users</span>
                                            <p>Enable this if you want people to add you</p>
                                            <input type="checkbox" id="switch00" />
                                            <label for="switch00" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>Send me notifications</span>
                                            <p>Send me notification emails my friends like, share or message me</p>
                                            <input type="checkbox" id="switch02" />
                                            <label for="switch02" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>Text messages</span>
                                            <p>Send me messages to my cell phone</p>
                                            <input type="checkbox" id="switch03" />
                                            <label for="switch03" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>Enable tagging</span>
                                            <p>Enable my friends to tag me on their posts</p>
                                            <input type="checkbox" id="switch04" />
                                            <label for="switch04" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>Enable sound Notification</span>
                                            <p>You'll hear notification sound when someone sends you a private message
                                            </p>
                                            <input type="checkbox" id="switch05" checked="" />
                                            <label for="switch05" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
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
