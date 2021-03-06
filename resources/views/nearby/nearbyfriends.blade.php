@extends('layouts.main_lay')

@section('content')
<div class="fixed-sidebar left">
    <div class="menu-left">
        <ul class="left-menu">
            <li><a href="{{ route('mainscreen',['circle_id'=>$circle_id]) }}" title="Newsfeed Page"
                    data-toggle="tooltip" data-placement="right"><i class="far fa-newspaper" aria-hidden="true"></i></a>
            </li>
            <li><a href="{{ route('messagefriends',['circle_id'=>$circle_id]) }}" title="Messages" data-toggle="tooltip"
                data-placement="right"><i class="fas fa-envelope"></i></a></li>
            <li><a href="{{ route('viewfriends',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                    title="Friends Circle" data-toggle="tooltip" data-placement="right"><i class="fas fa-users"></i></a>
            </li>
            <li><a href="{{ route('viewprofile',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                title="View Profile" data-toggle="tooltip" data-placement="right"><i class="fas fa-user"></i></a>
            </li>
            <li><a href="{{ route('nearbyfriends',['circle_id'=>$circle_id]) }}"
                title="Nearby Friends" data-toggle="tooltip" data-placement="right"><i class="fas fa-street-view"></i></a>
            </li>
            <li><a href="{{ route('activityfriends',['circle_id'=>$circle_id]) }}" title="Activity"
                data-toggle="tooltip" data-placement="right"><i class="fas fa-tasks"></i></a></li>
            <li><a href="{{ route('editinfofriends',['circle_id'=>$circle_id]) }}" title="Edit Profile Info"
                    data-toggle="tooltip" data-placement="right"><i class="fas fa-user-edit"></i></a></li>
            <li><a href="{{ route('main.settings',['circle_id'=>1]) }}" title="Main Setting" data-toggle="tooltip"
                data-placement="right"><i class="fas fa-cogs"></i></a></li>
            

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
                                                <a href="{{ route('viewprofile',['id'=>$i->user_id,'circle_id'=>$circle_id]) }}">{{$i->name}}</a>
                                                </h4>
                                            </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                {{-- nn --}}
                            </div><!-- photos -->
                        </div><!-- centerl meta -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
