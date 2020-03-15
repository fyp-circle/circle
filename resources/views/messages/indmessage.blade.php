@extends('layouts.main_lay')

@section('content')
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
                                                            <img src="{{$con->user2->family_picture->profile_picture}}" alt="">
                                                                @break
                                                            @case(3)
                                                                <img src="{{$con->user2->business_picture->profile_picture}}" alt="">
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
                                                            <a href="{{ route('viewprofile',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$current->profile_picture}}" alt=""></a>
                                                                @break
                                                            @case(2)
                                                            <a href="{{ route('viewprofilefamily',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$current->family_user->profile_picture}}" alt=""></a>
                                                                @break
                                                            @case(3)
                                                            <a href="{{ route('viewprofilebusiness',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$current->business_user->profile_picture}}" alt=""></a>
                                                                @break
                                                            @default

                                                        @endswitch

                                                </figure>

                                                @switch($circle_id)
                                                    @case(1)
                                                    <a href="{{ route('viewprofile',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$current->name}}</a>
                                                        @break
                                                    @case(2)
                                                    <a href="{{ route('viewprofilefamily',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$current->family_user->name}}</a>
                                                        @break
                                                    @case(3)
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$current->business_user->name}}</a>
                                                        @break
                                                    @default

                                                @endswitch


                                                    @if ($current->isOnline())
                                                    <i>online</i></span>
                                                    @else
                                                    <i>offline</i></span>
                                                    @endif

                                            </div>
                                            <ul class="chatting-area">
                                                @if (count($messages)==0)
                                                    No Messages Uptil now.
                                                @else
                                                <div id ="conversation_id" style="display:none;">{{$messages[0]->conversation_id}}</div>
                                                    @foreach ($messages as $message)

                                                        @if ($message->sender_id!=Auth::user()->user_id)

                                                        <li class="me">
                                                            <figure><img src="{{$message->sender->profile_picture}}" alt=""></figure>
                                                            <p>{{$message->content}}</p>
                                                        </li>
                                                        @else
                                                        <li class="you">
                                                            <figure><img src="{{$message->sender->profile_picture}}" alt=""></figure>
                                                            <p>{{$message->content}}</p>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </ul>
                                            <div id="success">

                                            </div>
                                            <div class="message-text-container">
                                                <form method="post"  enctype="multipart/form-data">
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
