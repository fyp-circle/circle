@extends('layouts.main_lay')

@section('content')
<div class="fixed-sidebar left">
    <div class="menu-left">
        <ul class="left-menu">
            <li><a href="{{ route('mainscreenfamily',['circle_id'=>$circle_id]) }}" title="Newsfeed Page"
                    data-toggle="tooltip" data-placement="right"><i class="far fa-newspaper" aria-hidden="true"
                        style="-webkit-text-fill-color: red"></i></a></li>
            <li><a href="{{ route('messagefamily',['circle_id'=>$circle_id]) }}" title="Messages" data-toggle="tooltip"
                    data-placement="right"><i class="fas fa-envelope" style="-webkit-text-fill-color: red"></i></a></li>
            <li><a href="{{ route('viewfamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                    title="Family Circle" data-toggle="tooltip" data-placement="right"><i class="fas fa-users" style="-webkit-text-fill-color: red"></i></a>
            </li>
            <li><a href="{{ route('viewprofilefamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                title="View Profile" data-toggle="tooltip" data-placement="right"><i class="fas fa-user" style="-webkit-text-fill-color: red"></i></a>
            </li>
            <li><a href="{{ route('nearbyfamily',['circle_id'=>$circle_id]) }}"
                title="Nearby Family" data-toggle="tooltip" data-placement="right"><i class="fas fa-street-view" style="-webkit-text-fill-color: red"></i></a>
            </li>
            <li><a href="{{ route('activityfamily',['circle_id'=>$circle_id]) }}" title="Activity" data-toggle="tooltip"
                    data-placement="right"><i class="fas fa-tasks" style="-webkit-text-fill-color: red"></i></a></li>
            <li><a href="{{ route('editinfofamily',['circle_id'=>$circle_id]) }}" title="Edit Profile Info"
                    data-toggle="tooltip" data-placement="right"><i class="fas fa-user-edit" style="-webkit-text-fill-color: red"></i></a></li>    
            <li><a href="{{ route('main.settings',['circle_id'=>1]) }}" title="Main Setting" data-toggle="tooltip"
                    data-placement="right"><i class="fas fa-cogs" style="-webkit-text-fill-color: red"></i></a></li>
        </ul>
    </div>
</div><!-- left sidebar menu -->
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="central-meta">
                                <ul class="nearby-contct">
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img src="/images/resources/friend-avatar9.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">jhon kates</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn" data-ripple="">add friend</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img src="/images/resources/nearly1.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">sophia Gate</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn" data-ripple="">add friend</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img src="/images/resources/nearly2.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">sara grey</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn" data-ripple="">add friend</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img src="/images/resources/nearly3.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">William Son</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn" data-ripple="">add friend</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img src="/images/resources/nearly4.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Sara grey</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn" data-ripple="">add friend</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img src="/images/resources/nearly5.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Amy watson</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn" data-ripple="">add friend</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img src="/images/resources/nearly6.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">caty lasbo</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn" data-ripple="">add friend</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div><!-- photos -->
                        </div><!-- centerl meta -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
