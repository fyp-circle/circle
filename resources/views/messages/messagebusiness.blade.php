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
                                    <h5 class="f-title"><i class="ti-bell"></i>All Business Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
                                    <div class="message-box">
                                        <ul class="peoples">
                                            @foreach ($cons as $con)
                                            <li>
                                                <figure>
                                                    @if ($con->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('message',['id'=>$con->user1_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$con->user1->business_user->profile_picture}}" alt=""></a>
                                                    @else
                                                    <a href="{{ route('message',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$con->user2->business_user->profile_picture}}" alt=""></a>
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
                                                    <a href="{{ route('message',['id'=>$con->user1_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$con->user1->business_user->name}}</span></a>
                                                    @else
                                                    <a href="{{ route('message',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><span>{{$con->user2->business_user->name}}</span></a>
                                                    @endif

                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        {{-- <div class="peoples-mesg-box">
                                            <div class="conversation-head">
                                                <figure><img src="/images/resources/friend-avatar.jpg" alt=""></figure>
                                                <span>jason bourne <i>online</i></span>
                                            </div>
                                            <ul class="chatting-area">
                                                <li class="you">
                                                    <figure><img src="/images/resources/userlist-2.jpg" alt=""></figure>
                                                    <p>what's liz short for? :)</p>
                                                </li>
                                                <li class="me">
                                                    <figure><img src="/images/resources/userlist-1.jpg" alt=""></figure>
                                                    <p>Elizabeth lol</p>
                                                </li>
                                                <li class="me">
                                                    <figure><img src="/images/resources/userlist-1.jpg" alt=""></figure>
                                                    <p>wanna know whats my second guess was?</p>
                                                </li>
                                                <li class="you">
                                                    <figure><img src="/images/resources/userlist-2.jpg" alt=""></figure>
                                                    <p>yes</p>
                                                </li>
                                                <li class="me">
                                                    <figure><img src="/images/resources/userlist-1.jpg" alt=""></figure>
                                                    <p>Disney's the lizard king</p>
                                                </li>
                                                <li class="me">
                                                    <figure><img src="/images/resources/userlist-1.jpg" alt=""></figure>
                                                    <p>i know him 5 years ago</p>
                                                </li>
                                                <li class="you">
                                                    <figure><img src="/images/resources/userlist-2.jpg" alt=""></figure>
                                                    <p>coooooooooool dude ;)</p>
                                                </li>
                                            </ul>
                                            <div class="message-text-container">
                                                <form method="post">
                                                    <textarea></textarea>
                                                    <button title="send" style="right:5%"><i class="fa fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                        </div> --}}
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