@extends('layouts.main_lay')

@section('content')

@switch($circle_id)
    @case(1)
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
    @break
    @case(2)
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
    @break
    @case(3)
    <div class="fixed-sidebar left">
        <div class="menu-left">
            <ul class="left-menu">
                <li><a href="{{ route('mainscreenbusiness',['circle_id'=>$circle_id]) }}" title="Newsfeed Page"
                        data-toggle="tooltip" data-placement="right"><i class="far fa-newspaper" aria-hidden="true"
                        style="-webkit-text-fill-color:cornflowerblue"></i></a></li>
                <li><a href="{{ route('messagebusiness',['circle_id'=>$circle_id]) }}" title="Inbox" data-toggle="tooltip"
                        data-placement="right"><i class="fas fa-envelope" style="-webkit-text-fill-color:cornflowerblue"></i></a></li>
                <li><a href="{{ route('viewbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                        title="View Connections" data-toggle="tooltip" data-placement="right"><i class="fas fa-users" style="-webkit-text-fill-color:cornflowerblue"></i></a>
                </li>
                <li><a href="{{ route('viewprofilebusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                    title="View Profile" data-toggle="tooltip" data-placement="right"><i class="fas fa-user" style="-webkit-text-fill-color:cornflowerblue"></i></a>
                </li>
                <li><a href="{{ route('nearbyconnections',['circle_id'=>$circle_id]) }}"
                    title="Nearby Connections" data-toggle="tooltip" data-placement="right"><i class="fas fa-street-view" style="-webkit-text-fill-color:cornflowerblue"></i></a>
                </li>
                <li><a href="{{ route('activitybusiness',['circle_id'=>$circle_id]) }}" title="Insights" data-toggle="tooltip"
                        data-placement="right"><i class="fas fa-chart-line" style="-webkit-text-fill-color:cornflowerblue"></i></a></li>
                <li><a href="{{ route('editinfobusiness',['circle_id'=>$circle_id]) }}" title="Edit Profile Info"
                        data-toggle="tooltip" data-placement="right"><i class="fas fa-user-edit" style="-webkit-text-fill-color:cornflowerblue"></i></a></li>    
                <li><a href="{{ route('main.settings',['circle_id'=>1]) }}" title="Main Setting" data-toggle="tooltip"
                        data-placement="right"><i class="fas fa-cogs" style="-webkit-text-fill-color:cornflowerblue"></i></a></li>
            </ul>
        </div>
    </div><!-- left sidebar menu -->
    @break
    @default

 @endswitch
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="central-meta">
                                <div class="editing-interest">
                                    <h5 class="f-title"><i class="ti-bell"></i>All Notifications </h5>
                                    <div class="notification-box">
                                        <ul>
                                            @foreach ($notifications as $i)
                                            <li>
                                                @switch($i->circle_id)
                                                    @case(1)
                                                    <a href="{{ route('viewprofile',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                                        <figure><img src="{{$i->sender['profile_picture']}}" alt=""></figure>
                                                        @break
                                                    @case(2)
                                                    <a href="{{ route('viewprofilefamily',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                                        <figure><img src="{{$i->sender->family_user->profile_picture}}" alt=""></figure>
                                                        @break
                                                    @case(3)
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                                        <figure><img src="{{$i->sender->business_user->profile_picture}}" alt=""></figure>
                                                        @break
                                                    @default
                                                    <a href="#" title="">
                                                @endswitch
                                                <div class="notifi-meta">
                                                    <p>{{$i->content}}</p>
                                                    <span>{{$i->created_at}}</span>
                                                    @if ($i->circle_id==1)
                                                        <span class="tag blue" style="background-color:black;-webkit-text-fill-color: white">Friend</span>
                                                    @else
                                                        @if ($i->circle_id==3)
                                                        <span class="tag blue" style="background-color:cornflowerblue;-webkit-text-fill-color: white">Business</span>

                                                        @else
                                                        <span class="tag blue" style="background-color:red;-webkit-text-fill-color: white">Family</span>
                                                        @endif
                                                    @endif

                                                </div>
                                            </a>
                                                <i class="del fa fa-close"></i>

                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
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
