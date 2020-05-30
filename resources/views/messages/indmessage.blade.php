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
                                <div class="messages">
                                    <h5 class="f-title"><i class="ti-bell"></i>All
                                        @switch($circle_id)
                                            @case(1)
                                            Friends
                                                @break
                                            @case(2)
                                                Family
                                                @break
                                            @case(3)
                                                Business
                                                @break
                                            @default

                                        @endswitch
                                        Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
                                    <div class="message-box">
                                        <ul class="peoples">
                                            @foreach ($cons as $con)
                                            <li>
                                                <figure>
                                                    @if ($con->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('message',['id'=>$con->user1_id,'circle_id'=>$circle_id]) }}" title="">
                                                        @switch($circle_id)
                                                            @case(1)
                                                            <img src="{{$con->user1->profile_picture}}" alt="">
                                                                @break
                                                            @case(2)
                                                            <img src="{{$con->user1->family_user->profile_picture}}" alt="">
                                                                @break
                                                            @case(3)
                                                                <img src="{{$con->user1->business_user->profile_picture}}" alt="">
                                                                @break
                                                            @default

                                                        @endswitch
                                                    </a>
                                                    @else
                                                    <a href="{{ route('message',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title="">
                                                        @switch($circle_id)
                                                            @case(1)
                                                            <img src="{{$con->user2->profile_picture}}" alt="">
                                                                @break
                                                            @case(2)
                                                            <img src="{{$con->user2->family_user->profile_picture}}" alt="">
                                                                @break
                                                            @case(3)
                                                                <img src="{{$con->user2->business_user->profile_picture}}" alt="">
                                                                @break
                                                            @default

                                                        @endswitch
                                                    </a>
                                                    @endif
                                                    @if ($con->user1_id!=Auth::user()->user_id)
                                                        @if ($con->user1->isOnline())
                                                            <span class="status f-online"></span>
                                                        @else
                                                            <span class="status f-offline"></span>
                                                        @endif
                                                    @else
                                                        @if ($con->user2->isOnline())
                                                            <span class="status f-online"></span>
                                                        @else
                                                            <span class="status f-offline"></span>
                                                        @endif
                                                    @endif
                                                </figure>
                                                <div class="people-name">
                                                    @if ($con->user1_id!=Auth::user()->user_id)
                                                    @switch($circle_id)
                                                            @case(1)
                                                            <a href="{{ route('message',['id'=>$con->user1_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$con->user1->name}}</span></a>
                                                                @break
                                                            @case(2)
                                                            <a href="{{ route('message',['id'=>$con->user1_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$con->user1->family_user->name}}</span></a>
                                                                @break
                                                            @case(3)
                                                            <a href="{{ route('message',['id'=>$con->user1_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$con->user1->business_user->name}}</span></a>
                                                                @break
                                                            @default

                                                        @endswitch

                                                    @else
                                                    @switch($circle_id)
                                                            @case(1)
                                                            <a href="{{ route('message',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$con->user2->name}}</span></a>
                                                                @break
                                                            @case(2)
                                                            <a href="{{ route('message',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$con->user2->family_user->name}}</span></a>
                                                                @break
                                                            @case(3)
                                                            <a href="{{ route('message',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$con->user2->business_user->name}}</span></a>
                                                                @break
                                                            @default

                                                        @endswitch
                                                    @endif

                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="peoples-mesg-box">
                                            <div class="conversation-head">
                                                <figure>
                                                    @switch($circle_id)
                                                            @case(1)
                                                            <a href="{{ route('viewprofile',['id'=>$current->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$current->profile_picture}}" alt=""></a>
                                                                @break
                                                            @case(2)
                                                            <a href="{{ route('viewprofilefamily',['id'=>$current->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$current->family_user->profile_picture}}" alt=""></a>
                                                                @break
                                                            @case(3)
                                                            <a href="{{ route('viewprofilebusiness',['id'=>$current->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$current->business_user->profile_picture}}" alt=""></a>
                                                                @break
                                                            @default

                                                        @endswitch

                                                </figure>

                                                @switch($circle_id)
                                                    @case(1)
                                                    <a href="{{ route('viewprofile',['id'=>$current->user_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$current->name}}</a>
                                                        @break
                                                    @case(2)
                                                    <a href="{{ route('viewprofilefamily',['id'=>$current->user_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$current->family_user->name}}</a>
                                                        @break
                                                    @case(3)
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$current->user_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$current->business_user->name}}</a>
                                                        @break
                                                    @default

                                                @endswitch


                                                    @if ($current->isOnline())
                                                    <i>online</i></span>
                                                    @else
                                                    <i>offline</i></span>
                                                    @endif

                                            </div>
                                            <ul class="chatting-area" id="newmessages">
                                                @if (count($messages)==0)
                                                    No Messages Uptil now.
                                                @else
                                                <div id ="conversation_id" style="display:none;">{{$messages[0]->conversation_id}}</div>
                                                <div id ="circle_id" style="display:none;">{{$circle_id}}</div>
                                                    @foreach ($messages as $message)

                                                        @if ($message->sender_id!=Auth::user()->user_id)

                                                        <li class="me">
                                                            @switch($circle_id)
                                                                @case(1)
                                                                <figure><img src="{{$message->sender->profile_picture}}" alt=""></figure>
                                                                    @break
                                                                @case(2)
                                                                <figure><img src="{{$message->sender->family_user->profile_picture}}" alt=""></figure>
                                                                    @break
                                                                @case(3)
                                                                <figure><img src="{{$message->sender->business_user->profile_picture}}" alt=""></figure>
                                                                    @break
                                                                    @default

                                                            @endswitch
                                                            <p>{{$message->content}}</p>
                                                        </li>
                                                        @else
                                                        <li class="you">
                                                            @switch($circle_id)
                                                                @case(1)
                                                                <figure><img src="{{$message->sender->profile_picture}}" alt=""></figure>
                                                                    @break
                                                                @case(2)
                                                                <figure><img src="{{$message->sender->family_user->profile_picture}}" alt=""></figure>
                                                                    @break
                                                                @case(3)
                                                                <figure><img src="{{$message->sender->business_user->profile_picture}}" alt=""></figure>
                                                                    @break
                                                                    @default

                                                            @endswitch
                                                            <p>{{$message->content}}</p>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </ul>
                                            <div id="success">

                                            </div>
                                            <div class="message-text-container">
                                                <form method="post" id="sendmessageform" enctype="multipart/form-data" >
                                                    @csrf
                                                    <textarea name="content" id="messagecontent"></textarea>
                                                    <button title="send" id="sendmessage" style="right:5%"><i class="fa fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                        </div>
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
