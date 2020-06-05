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
                                    @foreach ($suggestions as $i)
                                        <li>
                                            <div class="nearly-pepls">
                                            <figure>
                                                <img src="{{$i->profile_picture}}" alt="">
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                <a href="{{ route('viewprofilefamily',['id'=>$i->user_id,'circle_id'=>$circle_id]) }}">{{$i->name}}</a>
                                                </h4>
                                            </div>
                                            </div>
                                        </li>
                                    @endforeach

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
