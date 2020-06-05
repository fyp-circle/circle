<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Circle</title>
    <link rel="icon" href="/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/responsive.css">

    <link rel="stylesheet" href="/css/iconsadmin.css">
    <link rel="stylesheet" href="/css/owladmin.carousel.css">
    <link rel="stylesheet" href="/css/main-styleadmin.css">
    <link rel="stylesheet" href="/css/coloradmin.css">
    <link rel="stylesheet" href="/css/responsiveadmin.css">
    
    <link rel="stylesheet" href="/css/main.8d288f825d8dffbbe55e.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/spinner_wrapper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/d1bf4e5d94.js" crossorigin="anonymous"></script>
</head>

<body class="menu-active">
    {{-- If you want to remove the laoder then just umcomment the follwing 8 lines --}}
    <div class="theme-layout">
        <div class="postoverlay"></div>
        <div class="responsive-header" data-spy="affix" data-offset-top="0">
            @switch($circle_id)
                @case(1)
                    <div class="mh-head first Sticky">
                    @break
                @case(2)
                    <div class="mh-head first Sticky" style="background-color:red;">
                    @break
                @case(3)
                    <div class="mh-head first Sticky" style="background-color:cornflowerblue;">
                    @break
                @default
                    
            @endswitch
            
                <span class="mh-btns-left" style="-webkit-text-fill-color: white;">
                    <a class="" href="#menu"><i class="fas fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="{{ route('mainscreen',['circle_id'=>1]) }}" title="Home"><img src="/images/logo2.png" alt=""></a>
                </span>
                <span class="mh-btns-right" style="-webkit-text-fill-color: white;">
                    <a class="fa fa-sliders" href="#shoppingbag"></a>
                </span>
            </div>
            @switch($circle_id)
                @case(1)
                    <div class="mh-head second mh-sticky">
                    @break
                @case(2)
                    <div class="mh-head second mh-sticky" style="background-color:red;">
                    @break
                @case(3)
                    <div class="mh-head second mh-sticky" style="background-color:cornflowerblue;">
                    @break
                @default
                    
            @endswitch
                <form class="mh-form" action="{{ route('search',['circle_id'=>$circle_id]) }}" method="POST" role="search">
                    @csrf
                    <div class="row">
                        <div class="col-10">
                            <input type="text"  name="q" placeholder="search" />
                        </div>
                        <div class="col-2" style="text-align: right; padding-right: 4%; align-self:center;">
                            <a href="#" onclick="$(this).closest('form').submit()" class="fas fa-search" style="-webkit-text-fill-color: white;"></a>
                        </div>
                    </div>
                </form>
                
            </div>
            <nav id="menu" class="res-menu">
                @switch($circle_id)
                    @case(1)
                        <ul>
                            <li>
                                <a href="{{ route('mainscreen',['circle_id'=>$circle_id]) }}" title="">Newsfeed</a>
                            </li>
                            <li>
                                <a href="{{ route('viewfriends',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                                    title="">Friends Circle</a>
                            </li>
                            <li>
                                <a href="{{ route('messagefriends',['circle_id'=>$circle_id]) }}"
                                    title="">Messages</a>
                            </li>
                            <li>
                                <a href="{{ route('notification',['circle_id'=>$circle_id]) }}" title="">Notifications</a>
                            </li>
                            <li>
                                <a href="{{ route('nearbyfriends',['circle_id'=>$circle_id]) }}"
                                    title="">People Nearby</a>
                            </li>
                            <li>
                                <a href="{{ route('activityfriends',['circle_id'=>$circle_id]) }}"
                                    title="">Activity Log</a>
                            </li>
                            <li>
                                <a href="{{ route('viewprofile',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                                    title="">View Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('editinfofriends',['circle_id'=>$circle_id]) }}"
                                    title="">Edit Info</a>
                            </li>
                        </ul>
                        @break
                    @case(2)
                        <ul>
                            <li>
                                <a href="{{ route('mainscreenfamily',['circle_id'=>$circle_id]) }}"
                                    title="">Newsfeed</a>
                            </li>
                            <li>
                                <a href="{{ route('viewfamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                                    title="">Family Circle</a>
                            </li>
                            <li>
                                <a href="{{ route('messagefamily',['circle_id'=>$circle_id]) }}"
                                    title="">Messages</a>
                            </li>
                            <li>
                                <a href="{{ route('notification',['circle_id'=>$circle_id]) }}" title="">Notifications</a>
                            </li>
                            <li>
                                <a href="{{ route('nearbyfamily',['circle_id'=>$circle_id]) }}"
                                    title="">People Nearby</a>
                            </li>
                            <li>
                                <a href="{{ route('activityfamily',['circle_id'=>$circle_id]) }}"
                                    title="">Activity Log</a>
                            </li>
                            <li>
                                <a href="{{ route('viewprofilefamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                                    title="">View Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('editinfofamily',['circle_id'=>$circle_id]) }}"
                                    title="">Edit Info</a>
                            </li>
                        </ul>
                        @break
                    @case(3)
                        <ul>
                            <li>
                                <a href="{{ route('mainscreenbusiness',['circle_id'=>$circle_id]) }}"
                                    title="">News feed</a>
                            </li>
                            <li>
                                <a href="{{ route('viewbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                                    title="">Business Circle</a>
                            </li>
                            <li>
                                <a href="{{ route('messagebusiness',['circle_id'=>$circle_id]) }}"
                                    title="">Inbox</a>
                            </li>
                            <li>
                                <a href="{{ route('notification',['circle_id'=>$circle_id]) }}" title="">Notifications</a>
                            </li>
                            <li>
                                <a href="{{ route('nearbyconnections',['circle_id'=>$circle_id]) }}"
                                    title="">People Nearby</a>
                            </li>
                            <li>
                                <a href="{{ route('activitybusiness',['circle_id'=>$circle_id]) }}"
                                    title="">Insights</a>
                            </li>
                            <li>
                                <a href="{{ route('viewprofilebusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                                    title="">View Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('editinfobusiness',['circle_id'=>$circle_id]) }}"
                                    title="">Edit Info</a>
                            </li>
                        </ul>
                        @break
                    @default
                        
                @endswitch
                
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <h4 class="panel-title" style="margin-top:0; margin-bottom: 5%;">Profiles</h4>
                        <ul class="mm-listview" style="text-transform: uppercase; font-size: 12px;">
                            <li>
                                <a href="{{ route('mainscreen',['circle_id'=>1]) }}">Friends</a>
                            </li>
                            @if (Auth::user()->family_user_id!=null)
                            <li>
                                <a href="{{ route('mainscreenfamily',['circle_id'=>2]) }}">Family</a>
                            </li>
                            @endif
                            @if (Auth::user()->business_user_id!=null)
                            <li>
                                <a href="{{ route('mainscreenbusiness',['circle_id'=>3]) }}">Business</a>
                            </li>
                            @endif
                            @if (Auth::user()->business_user_id==null || Auth::user()->family_user_id==null)
                            <li>
                                <a href="{{ route('circle.new',['circle_id'=>1]) }}">Add Profile</a>
                            </li>
                            @endif
                        </ul>
                        <h4 class="panel-title" style="margin-top:20px; margin-bottom: 5%;">Account</h4>
                        <ul class="mm-listview" style="text-transform: uppercase; font-size: 12px;">
                            <li>
                                <a href="{{ route('main.settings',['circle_id'=>1]) }}" title="">Account setting</a>
                            </li>
                            <li>
                                <a href="{{ route('allactivities',['circle_id'=>1]) }}" title=""></i>Activity Log</a>
                            </li>
                            <li>
                            <a href="{{ route('logout') }}" title="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">log out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>           
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->

        <div class="topbar stick">
            <div class="logo">
                <a title="Home" href="{{ url('/') }}"><img src="/images/logo.png" alt=""></a>
            </div>

            <div class="top-area">
                <ul class="main-menu">
                    <li>
                        <div class="author-thmb">
                            <a href="{{ route('mainscreen',['circle_id'=>1]) }}">
                            <img src="{{Auth::user()->profile_picture}}" alt="" style="border-radius:50%; width:45px; height:45px; object-fit:cover">
                                <span class="status f-online" style="bottom: 32px; background: black"></span>
                            </a>
                        </div>
                    </li> <!-- friend mainscreen -->
                    @if (Auth::user()->family_user_id!=null)
                        <li>
                            <div class="author-thmb">
                                <a href="{{ route('mainscreenfamily',['circle_id'=>2]) }}">
                                    <img src="{{Auth::user()->family_user['profile_picture']}}" alt="" style="border-radius:50%; width:45px; height:45px; object-fit:cover">
                                    <span class="status f-online" style="bottom: 32px; background-color: red"></span>
                                </a>
                            </div>
                        </li>

                    @endif

                    @if (Auth::user()->business_user_id!=null)
                        <li>
                            <div class="author-thmb">
                                <a href="{{ route('mainscreenbusiness',['circle_id'=>3]) }}">
                                    <img src="{{Auth::user()->business_user['profile_picture']}}" alt="" style="border-radius:50%; width:45px; height:45px; object-fit:cover">
                                    <span class="status f-online" style="bottom: 32px; background-color:cornflowerblue"></span>
                                </a>
                            </div>
                        </li>

                    @endif
                    @if (Auth::user()->business_user_id==null || Auth::user()->family_user_id==null)
                        <li><a href="{{ route('circle.new',['circle_id'=>1]) }}" title="Add Circle" data-toggle="tooltip"
                            data-placement="center" style="-webkit-text-fill-color: black; padding-left: 0"><i class="ti-plus"></i></a>
                        </li>

                    @endif

                </ul>
                <ul class="setting-area" style="line-height: 0">
                    <li>
                        <a href="" ><i class="fas fa-search"></i></a>
                        <div class="searched">
                            <form action="{{ route('search',['circle_id'=>$circle_id]) }}" method="POST" role="search" class="form-search">
                                @csrf
                                <input type="text" size="30" onkeyup="showResult(this.value)" name="q" placeholder="Search Friend">
                                <div id="livesearch"></div>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li><a href="{{ route('mainscreen',['circle_id'=>1]) }}"><i class="fas fa-home"></i></a></li>
                    <li class= "dropdown-notifications">
                        {{-- <a  href="#notifications-panel" title="Notification" data-ripple="" class="dropdown-toggle" data-toggle="dropdown"> --}}
                            <a href="#" title="Notification" data-ripple="" class="dropdown-toggle" href="#notifications-panel" data-toggle="dropdown">
                            <i class="fas fa-bell" data-count="{{count($notifications)}}"></i><span class="notif-count">{{count($notifications)}}</span>
                        </a>
                        @if (count($notifications) ==0)
                        <div class="dropdowns">
                            <span>No Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                </li>
                            </ul>
                        </div>
                        @else
                        <div class="dropdowns">
                            <span>New Notifications</span>
                            <ul class="drops-menu" id="test2" class="dropdown-menu">
                                @foreach ($notifications as $i)
                                <li>
                                    @switch($i->circle_id)
                                        @case(1)
                                        <a href="{{ route('viewprofile',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                            <img src="{{$i->sender['profile_picture']}}" alt="">
                                            @break
                                        @case(2)
                                        <a href="{{ route('viewprofilefamily',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                            <img src="{{$i->sender->family_user->profile_picture}}" alt="">
                                            @break
                                        @case(3)
                                        <a href="{{ route('viewprofilebusiness',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                            <img src="{{$i->sender->business_user->profile_picture}}" alt="">
                                            @break
                                        @default
                                        <a href="#" title="">
                                    @endswitch

                                            <div class="mesg-meta">
                                                <h6>{{$i->title}}</h6>
                                                <span>{{$i->content}}</span>
                                                <i>{{$i->created_at}}</i>
                                            </div>
                                        </a>
                                        @switch($i->circle_id)
                                            @case(1)
                                            <span class="tag green" style="background-color:black;-webkit-text-fill-color: white">Friend</span>
                                                @break
                                            @case(2)
                                            <span class="tag green" style="background-color:red;-webkit-text-fill-color: white">Family</span>
                                                @break
                                            @case(3)
                                            <span class="tag green" style="background-color:cornflowerblue;-webkit-text-fill-color: white">Business</span>
                                                @break
                                            @default
                                            <a href="#" title="">
                                        @endswitch

                                    </li>
                                @endforeach
                            </ul>
                            <a href="{{ route('notification',['circle_id'=>1]) }}" title="" class="more-mesg">view more</a>
                        </div>
                        @endif
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i class="fas fa-envelope"></i><span>3</span></a>
                        <div class="dropdowns">
                            <span>3 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="{{url('messagefriends')}}" title="">
                                        <img src="/images/resources/thumb-1.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green" style="background-color:black">Friends</span>
                                </li>
                                <li>
                                    <a href="{{url('messagefamily')}}" title="">
                                        <img src="/images/resources/thumb-2.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Family</span>
                                </li>
                                <li>
                                    <a href="{{url('inbox')}}" title="">
                                        <img src="/images/resources/thumb-3.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue" style="background-color:cornflowerblue">Business</span>
                                </li>
                            </ul>
                            @switch($circle_id)
                                @case(1)
                                <a href="{{ route('messagefriends',['circle_id'=>$circle_id]) }}"  title="" class="more-mesg">View more</a>
                                    @break
                                @case(2)
                                <a href="{{ route('messagefamily',['circle_id'=>$circle_id]) }}"  title="" class="more-mesg">View more</a>
                                    @break
                                @case(3)
                                <a href="{{ route('messagebusiness',['circle_id'=>$circle_id]) }}"  title="" class="more-mesg">View more</a>
                                    @break
                                @default

                            @endswitch
                        </div>
                    </li>
                </ul>
                <div class="user-img" style="left: 10px">
                    <img src="{{Auth::user()->profile_picture}}" alt="" style="width:45px; height:45px; object-fit:cover">
                    {{-- <span class="status f-online"></span> --}}
                    {{Auth::user()->name}}
                    <div class="user-setting">
                        <a href="#" title=""><span class="status f-online"></span>online</a>
                        <a href="#" title=""><span class="status f-away"></span>away</a>
                        <a href="#" title=""><span class="status f-off"></span>offline</a>
                    <a href="{{ route('main.settings',['circle_id'=>1]) }}" title=""><i class="fas fa-cogs"></i>account setting</a>
                    <a href="{{ route('allactivities',['circle_id'=>1]) }}" title=""><i class="fas fa-tasks"></i>Activity Log</a>
                    <a href="{{ route('adminhome',['circle_id'=>1]) }}" title=""><i class="fas fa-user-shield"></i>Admin</a>
                        <a href="{{ route('logout') }}" title="" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>log out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                {{-- <span class="ti-menu main-menu" data-ripple=""></span> --}}
            </div>
        </div><!-- topbar -->

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
                    <li><a href="{{ route('nearbyfriends',['circle_id'=>$circle_id]) }}" title="Nearby Friends"
                            data-toggle="tooltip" data-placement="right"><i class="fas fa-street-view"></i></a>
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
                    
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-sec">
                                    <div class="profile-all">
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="central-meta new-pst">
                                                        <div class="new-postbox">
                                                            <figure>
                                                                <img src="{{Auth::user()->profile_picture}}" alt=""
                                                                    style="width:60px; height:52px; object-fit:cover">
                                                            </figure>
                                                            <div class="newpst-input">
                                                                <form method="post" action="{{ route('createpost',['circle_id'=>$circle_id]) }}"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <textarea rows="2" placeholder="write something... "
                                                                        name="content"></textarea>
                                                                    <div class="attachments">
                                                                        <ul>
                                                                            <li>
                                                                                <i class="fas fa-music"></i>
                                                                                <label class="fileContainer">
                                                                                    <input type="file" name="audio" accept="audio/*">
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fas fa-image"></i>
                                                                                <label class="fileContainer">
                                                                                    <input type="file" name="image" accept="image/*">
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fas fa-video-camera"></i>
                                                                                <label class="fileContainer">
                                                                                    <input type="file" name="video" accept="video/*">
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <button type="submit">Publish</button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div><!-- add post new box -->
                                                    {{-- <div class="add-content-form">
                                                        <textarea placeholder="What Is In Your Mind"></textarea>
                                                        <div class="add-content">
                                                            <ul>
                                                                <li><a href="#" title=""><i class="fa fa-location-arrow"></i></a>
                                                                </li>
                                                                <li><a href="#" title=""><i class="fa fa-microphone"></i></a></li>
                                                                <li><a href="#" title=""><i class="fa fa-picture-o"></i></a></li>
                                                                <li><a href="#" title=""><i class="fa fa-cloud-upload"></i></a></li>
                                                            </ul>
                                                            <button type="submit" class="purple-skin">POST</button>
                                                        </div>
                                                    </div> --}}
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="widget no-color">
                                                    <div class="activity-feed">
                                                        <div class="widget-title">
                                                            <h3>All Reported Posts</h3>
                                                        </div>
                                                        <ul class="activity-timeline masonry">
                                                            @foreach ($posts as $post)
                                                            <li class="fb-pst flt-itm"> <span class="user-device"><i
                                                                        class="fas fa-circle" style="-webkit-text-fill-color: black"></i></span>
                                                                <div class="user-activity">
                                                                    <div class="who-post-this" style="padding-bottom: 4%;"> <span><img src="images/resource/user.jpg" alt="" /></span>
                                                                        <div class="who-post-detail">
                                                                            <div class="pst-shr-inf"><i>2 minutes ago</i>
                                                                                <div class="slct-whr-pst"> <span>Action</span>
                                                                                    <ul>
                                                                                        <li><i class="fas fa-trash-alt"></i> Delete</li>
                                                                                        <li><i class="fas fa-check"></i> Pass</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <h3><a href="#" title="">Diana Dare<i class="poster-status online"></i></a></h3>
                                                                            <span>Reported in Friends Circle</span>
                                                                        </div>
                                                                    </div>                                                                    
                                                                    <div class="central-meta item">
                                                                        <div class="user-post">
                                                                            <div class="friend-info">
                                                                                <figure>
                                                                                    <a
                                                                                        href="{{ route('viewprofile',['id'=>$post->user->user_id,'circle_id'=>$circle_id]) }}"><img
                                                                                            src="{{$post->user->profile_picture}}" alt=""></a>
                                                                                </figure>
                                                                                <div class="friend-name" style="width: 86%; ">
                                                                                    <ins><a href="{{ route('viewprofile',['id'=>$post->user->user_id,'circle_id'=>$circle_id]) }}"
                                                                                            title="">{{$post->user->name}}</a></ins>
                                                                                    <span>published: {{$post->created_at}}</span>
                                                                                </div>
                                                                                <div class="post-meta">
                                                                                    <div class="description">

                                                                                        <p>
                                                                                            {{$post->content}}
                                                                                        </p>
                                                                                    </div>
                                                                                    @if ($post->picture!=null)
                                                                                    <img src="{{$post->picture}}" alt="">
                                                                                    @else

                                                                                    @endif
                                                                                    
                                                                                    <div class="we-video-info">
                                                                                        <div>
                                                                                            <hr style="margin-top: 10px; margin-bottom:10px; ">
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-2">
                                                                                                <span class="Views" data-toggle="tooltip" title="views" style="color:grey ">
                                                                                                    <i class="fas fa-eye"></i>
                                                                                                    <ins>1.2k</ins>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="col-2">
                                                                                                {{-- jab comment nhi hoga to i class = far fa-comments --}}
                                                                                                <span class="comment" data-toggle="tooltip" title="Comments"
                                                                                                style="color:rgb(206, 177, 12); padding-bottom: 0; padding-top: 0;">
                                                                                                <i class="fas fa-comments"></i>
                                                                                                <ins>12</ins>
                                                                                                </span>      
                                                                                            </div>
                                                                                            <div class="col-2">
                                                                                                {{-- jab like nhi hoga to i class = far fa-heart --}}
                                                                                                <span class="like" id="likebutton" data-toggle="tooltip"
                                                                                                    title="Like" style="color:red ">
                                                                                                    <i class="fas fa-heart" ></i>
                                                                                                    <ins id="test">34</ins>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="col-2">
                                                                                                <span class="like" id="sharebutton" data-toggle="tooltip"
                                                                                                    title="Share" style="color:black ">
                                                                                                    <i class="fas fa-share-square"></i>
                                                                                                    <ins>2</ins>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="col-4" style="text-align: right; padding-right: 4%">
                                                                                                <span class="like" id="sharebutton" data-toggle="tooltip"
                                                                                                    title="Report" style="color:rgb(107, 0, 0) ">
                                                                                                    <i class="fas fa-exclamation-triangle"></i>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <hr style="margin-top: 0; margin-bottom:10px; ">
                                                                            </div>
                                                                            <div class="coment-area">
                                                                                <ul class="we-comet">
                                                                                    <li>
                                                                                        <div class="comet-avatar">
                                                                                            <img src="/images/resources/comet-1.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="we-comment">
                                                                                            <div class="coment-head">
                                                                                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                                                                <span>1 year ago</span>
                                                                                            </div>
                                                                                            <p>we are working for the dance and sing songs. this car is very
                                                                                                awesome for
                                                                                                the youngster. please vote this car and like our post</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#" title="" class="showmore underline">more comments</a>
                                                                                    </li>
                                                                                    <li class="post-comment">
                                                                                        <div class="comet-avatar">
                                                                                            <img src="/images/resources/comet-1.jpg" alt="">
                                                                                        </div>
                                                                                        <div class="post-comt-box">
                                                                                            <form method="post">
                                                                                            <textarea placeholder="Post your comment"></textarea>
                                                                                            <div class="add-smiles">
                                                                                                <span title="add icon">&#128515;</span>
                                                                                            </div>
                                                                                            <div class="smiles-bunch">
                                                                                                <a href="#" style="text-decoration: none;">&#128512;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128513;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128514;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128515;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128516;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128517;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128518;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128519;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128520;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128521;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128522;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128523;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128524;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128525;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128526;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128527;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128528;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128529;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128530;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128531;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128532;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128533;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128534;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128535;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128536;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128537;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128538;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128539;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128540;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128541;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128542;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128543;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128544;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128545;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128546;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128547;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128548;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128549;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128550;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128551;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128552;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128553;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128554;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128555;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128556;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128557;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128558;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128559;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128560;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128561;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128562;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128563;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128564;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128565;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128566;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128567;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128577;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128578;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128579;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#128580;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129296;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129297;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129298;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129299;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129300;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129301;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129312;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129313;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129314;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129315;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129316;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129317;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129319;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129320;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129321;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129322;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129323;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129324;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129325;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129326;</a>
                                                                                                <a href="#" style="text-decoration: none;">&#129327;</a>

                                                                                                
                                                                                            </div>
                                                                                                {{-- <p class="lead emoji-picker-container">
                                                                                                    <textarea class="form-control textarea-control"
                                                                                                        placeholder="Textarea with emoji image input"
                                                                                                        data-emojiable="true"></textarea>
                                                                                                </p> --}}
                                                                                                {{-- <button type="submit"></button> --}}
                                                                                            
                                                                                            </form>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <!-- Report Feed -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Profile Sec -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/popperjs-bootstrap.js"></script>

	<!-- Our Website Javascripts -->
	<script src="/js/appsadmin.js"></script>
	<script src="/js/isotopeadmin-int.js"></script>
    <script src="/js/mainadmin.js"></script>
    

    <script src="/js/main.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/map-init.js"></script>
    <script src="/js/main.8d288f825d8dffbbe55e.js"></script>
    <script src="{{asset('/js/echarts.min.js')}}"></script>
    <script src="{{asset('/js/world.js')}}"></script>
	<script src="{{asset('/js/custom.js')}}"></script>
    <script src="{{ URL::asset('/js/first_theme_js_after_beautifier.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{asset('/js/message.js')}}"></script>
    <script>
    
    <script>
        $(document).ready(function () {
            //Preloader
            $(window).on("load", function () {
                preloaderFadeOutTime = 1;

                function hidePreloader() {
                    var preloader = $('.spinner-wrapper');
                    preloader.fadeOut(preloaderFadeOutTime);
                }
                hidePreloader();
            });
        });
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    {{-- <script type="text/javascript">
        var notificationsWrapper   = $('.dropdown-notifications');
        var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount     = parseInt(notificationsCountElem.data('count'));
        var notifications          = notificationsWrapper.find('ul.dropdown-menu');

        // if (notificationsCount <= 0) {
        //   notificationsWrapper.hide();
        // }

        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        var pusher = new Pusher('490345636eb3c4e8f2d8', {
            cluster: 'us2',
            forceTLS: true
        });

        // Subscribe to the channel we specified in our Laravel Event
        var user_id="{{Auth::user()->user_id}}";
        // var profile_id = "{{$profile_id ?? ''}}";
            var channel = pusher.subscribe('user_id_'+user_id);
            // Bind a function to a Event (the full Laravel class)
            channel.bind('br-event', function(data) {

            var existingNotifications = $("#test2").html();
            //   var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            var newNotificationHtml = `
            <li>
            <a href="{{ route('notification') }}" title="">
                    <img src="`+data.sender.business_user.profile_picture+`" alt="">
                    <div class="mesg-meta">
                        <h6>`+data.title+`</h6>
                        <span>`+data.content+`</span>
                        <i>`+data.created_at+`</i>
                    </div>
                </a>
            </li>
            `;
            $("#test2").html(newNotificationHtml + existingNotifications);

            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
            });



    </script> --}}

    <script type="text/javascript">
        var notificationsWrapper   = $('.dropdown-notifications');
        var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount     = parseInt(notificationsCountElem.data('count'));
        var notifications          = notificationsWrapper.find('ul.dropdown-menu');

        // if (notificationsCount <= 0) {
        //   notificationsWrapper.hide();
        // }

        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        var pusher = new Pusher('490345636eb3c4e8f2d8', {
            cluster: 'us2',
            forceTLS: true
        });

        // Subscribe to the channel we specified in our Laravel Event
        var user_id="{{Auth::user()->user_id}}";
        // var profile_id = "{{$profile_id ?? ''}}";
        var channel = pusher.subscribe('user_id_'+user_id);
        // Bind a function to a Event (the full Laravel class)

        var addnotif=function(data) {

            var existingNotifications = $("#test2").html();
            //   var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            var newNotificationHtml = `
            <li>
            <a href="{{ route('notification',['circle_id'=>1]) }}" title="">
                    <img src="`+data.sender.profile_picture+`" alt="">
                    <div class="mesg-meta">
                        <h6>`+data.title+`</h6>
                        <span>`+data.content+`</span>
                        <i>`+data.created_at+`</i>
                    </div>
                </a>
            </li>
            `;
            $("#test2").html(newNotificationHtml + existingNotifications);

            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        }


        channel.bind('my-event',addnotif);







    </script>

{{--
<script type="text/javascript">
    var notificationsWrapper   = $('.dropdown-notifications');
    var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount     = parseInt(notificationsCountElem.data('count'));
    var notifications          = notificationsWrapper.find('ul.dropdown-menu');

    // if (notificationsCount <= 0) {
    //   notificationsWrapper.hide();
    // }

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('490345636eb3c4e8f2d8', {
        cluster: 'us2',
        forceTLS: true
    });

    // Subscribe to the channel we specified in our Laravel Event
    var user_id="{{Auth::user()->user_id}}";
    // var profile_id = "{{$profile_id ?? ''}}";
        var channel = pusher.subscribe('user_id_'+user_id);
        // Bind a function to a Event (the full Laravel class)
            channel.bind('stalking-event', function(data) {

            var existingNotifications = $("#test2").html();
            //   var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            var newNotificationHtml = `
            <li>
            <a href="{{ route('notification') }}" title="">
                    <img src="`+data.sender.profile_picture+`" alt="">
                    <div class="mesg-meta">
                        <h6>`+data.title+`</h6>
                        <span>`+data.content+`</span>
                        <i>`+data.created_at+`</i>
                    </div>
                </a>

            </li>
            `;
            $("#test2").html(newNotificationHtml + existingNotifications);

            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
            });



</script> --}}



</body>

</html>
