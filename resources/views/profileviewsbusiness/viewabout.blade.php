@extends('layouts.profile_lay_bus')

@section('profilecontent')
@if ($c==1 || $c == 2)
<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
            <div class="col-lg-3">
                <aside class="sidebar static">
                    <div class="widget stick-widget">
                        <h4 class="widget-title">Shortcuts</h4>
                        <ul class="naves">
                            <li>
                                <i class="fas fa-stream"></i>
                                <a href="{{ route('viewprofilebusiness',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">Timeline</a>
                            </li>
                            <li>
                                <i class="far fa-images"></i>
                                <a href="{{ route('viewphotosbusiness',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Photos</a>
                            </li>
                            <li>
                                <i class="fas fa-film"></i>
                                <a href="{{ route('viewvideosbusiness',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Videos</a>
                            </li>
                            @if (Auth::user()->user_id==$profile_id)
                            <li>
                                <i class="fas fa-users"></i>
                                <a href="{{ route('viewbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="">Business Connection</a>
                            </li>
                            @endif
                            <li>
                                <i class="fas fa-info-circle"></i>
                                <a href="{{ route('viewaboutbusiness',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">About</a>
                            </li>
                        </ul>
                    </div><!-- Shortcuts -->
                </aside>
            </div><!-- sidebar -->
            <div class="col-lg-9">
                <div class="central-meta">
                    <div class="about">
                        <div class="personal">
                            <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                            <p>
                                {{$user->business_user->about_me}}
                            </p>
                        </div>
                        <div class="d-flex flex-row mt-2">
                            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left">
                                <li class="nav-item">
                                    <a href="#basic" class="nav-link active" data-toggle="tab">Basic info</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#work" class="nav-link" data-toggle="tab">work and education</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#interest" class="nav-link" data-toggle="tab">Skills</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#lang" class="nav-link" data-toggle="tab">languages</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="basic">
                                    <ul class="basics">
                                        <li><i class="ti-user"></i>{{$user->business_user['name']}}</li>
                                        <li><i class="ti-map-alt"></i>{{$user->city}} , {{$user->country}}</li>
                                        <li><i class="ti-mobile"></i>{{$user->business_user['phone']}}</li>
                                        @if ($user->user_id==Auth::user()->user_id)
                                        <li><i class="ti-email"></i>{{$user->business_user['email']}}</li>
                                        @endif
                                        <li><i class="ti-world"></i>www.yoursite.com</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="work" role="tabpanel">
                                    <div>

                                        <a href="#" title="">Envato</a>
                                        <p>work as autohr in envato themeforest from 2013</p>
                                        <ul class="education">
                                            <li><i class="ti-facebook"></i> BSCS from Oxford University</li>
                                            <li><i class="ti-twitter"></i> MSCS from Harvard Unversity</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="interest" role="tabpanel">
                                    <ul class="basics">
                                        <li>Java</li>
                                        <li>C</li>
                                        <li>Leadership</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="lang" role="tabpanel">
                                    <ul class="basics">
                                        <li>english</li>
                                        <li>french</li>
                                        <li>spanish</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- centerl meta -->
        </div>
    </div>
</div>
@endif
@endsection
