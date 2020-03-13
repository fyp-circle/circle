@extends('layouts.profile_lay_bus')

@section('profilecontent')
@if ($c == 2)
<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">

            <div class="col-lg-9">
                <div class="central-meta">
                    <div class="frnds">
                        <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Business Circle(<span>{{count($cons)}}</span>)</a>
                            </li>

                            <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Business
                                    Requests(<span>{{count($reqs)}}</span>)</a></li>

                                    <li class="nav-item"><a class="" href="#sent-req" data-toggle="tab">Sent
                                        Requests(<span>{{count($sreqs)}}</span>)</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active fade show " id="frends">
                                @if (count($cons)==0)
                                    No Business Connections Yet.
                                @else
                                <ul class="nearby-contct">
                                    @foreach ($cons as $con)
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>

                                                @if ($con->user1_id!=Auth::user()->user_id)
                                                <a href="{{ route('viewprofilebusiness',['id'=>$con->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$con->user1->business_user->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofilebusiness',['id'=>$con->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$con->user2->business_user->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($con->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$con->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$con->user1->business_user->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$con->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$con->user2->business_user->name}}</a>
                                                    @endif
                                                </h4>
                                                {{-- <span>ftv model</span> --}}

                                                <a id = "UnfriendButton1" href="#" title="" class="add-butn more-action" data-ripple="" style="right: 0">Disconnect</a>


                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                                <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                            </div>
                            <div class="tab-pane fade" id="frends-req">
                                @if (count($reqs)==0)
                                    No Business Connection Requests.
                                @else
                                <ul class="nearby-contct">
                                    @foreach ($reqs as $req)
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                @if ($req->user1_id!=Auth::user()->user_id)
                                                <a href="{{ route('viewprofilebusiness',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$req->user1->business_user->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofilebusiness',['id'=>$req->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$req->user2->business_user->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($req->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$req->user1->business_user->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$req->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$req->user2->business_user->name}}</a>
                                                    @endif
                                                </h4>
                                                {{-- <span>ftv model</span> --}}
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">Delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                                <button class="btn-view btn-load-more"></button>
                            </div>

                            <div class="tab-pane fade" id="sent-req">
                                @if (count($sreqs)==0)
                                    No Sent Requests.
                                @else
                                <ul class="nearby-contct">
                                    @foreach ($sreqs as $sreq)
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                @if ($sreq->user1_id!=Auth::user()->user_id)
                                                <a href="{{ route('viewprofilebusiness',['id'=>$sreq->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$sreq->user1->business_user->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofilebusiness',['id'=>$sreq->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$sreq->user2->business_user->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($sreq->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$sreq->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$sreq->user1->business_user->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofilebusiness',['id'=>$sreq->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$sreq->user2->business_user->name}}</a>
                                                    @endif
                                                </h4>
                                                {{-- <span>ftv model</span> --}}
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">Unsend Request</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                                <button class="btn-view btn-load-more"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- centerl meta -->
            <div class="col-lg-3">
                <aside class="sidebar static">
                    <div class="widget">
                        <h4 class="widget-title">Who's following you</h4>
                        <ul class="followers">
                            <li>
                                <figure><img src="/images/resources/friend-avatar2.jpg" alt=""></figure>
                                <div class="friend-meta">
                                    <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                    <a href="#" title="" class="underline">Add Friend</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="/images/resources/friend-avatar4.jpg" alt=""></figure>
                                <div class="friend-meta">
                                    <h4><a href="time-line.html" title="">Issabel</a></h4>
                                    <a href="#" title="" class="underline">Add Friend</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="/images/resources/friend-avatar6.jpg" alt=""></figure>
                                <div class="friend-meta">
                                    <h4><a href="time-line.html" title="">Andrew</a></h4>
                                    <a href="#" title="" class="underline">Add Friend</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="/images/resources/friend-avatar8.jpg" alt=""></figure>
                                <div class="friend-meta">
                                    <h4><a href="time-line.html" title="">Sophia</a></h4>
                                    <a href="#" title="" class="underline">Add Friend</a>
                                </div>
                            </li>
                            <li>
                                <figure><img src="/images/resources/friend-avatar3.jpg" alt=""></figure>
                                <div class="friend-meta">
                                    <h4><a href="time-line.html" title="">Allen</a></h4>
                                    <a href="#" title="" class="underline">Add Friend</a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- who's following -->
                    <div class="widget friend-list stick-widget">
                        <h4 class="widget-title">Suggestions</h4>
                        <div id="searchDir"></div>
                        <ul id="people-list" class="friendz-list">
                            <li>
                                <figure>
                                    <img src="/images/resources/friend-avatar.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">bucky barnes</a>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="/images/resources/friend-avatar2.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">Sarah Loren</a>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="/images/resources/friend-avatar3.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">jason borne</a>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="/images/resources/friend-avatar4.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">Cameron diaz</a>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="/images/resources/friend-avatar5.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">daniel warber</a>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="/images/resources/friend-avatar6.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">andrew</a>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="/images/resources/friend-avatar7.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">amy watson</a>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="/images/resources/friend-avatar5.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">daniel warber</a>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="/images/resources/friend-avatar2.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">Sarah Loren</a>
                                </div>
                            </li>
                        </ul>
                        <div class="chat-box">
                            <div class="chat-head">
                                <span class="status f-online"></span>
                                <h6>Bucky Barnes</h6>
                                <div class="more">
                                    <span><i class="ti-more-alt"></i></span>
                                    <span class="close-mesage"><i class="ti-close"></i></span>
                                </div>
                            </div>
                            <div class="chat-list">
                                <ul>
                                    <li class="me">
                                        <div class="chat-thumb"><img src="/images/resources/chatlist1.jpg" alt=""></div>
                                        <div class="notification-event">
                                            <span class="chat-message-item">
                                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be
                                                handling the gifts and Jake’s gonna get the drinks
                                            </span>
                                            <span class="notification-date"><time datetime="2004-07-24T18:18"
                                                    class="entry-date updated">Yesterday at 8:10pm</time></span>
                                        </div>
                                    </li>
                                    <li class="you">
                                        <div class="chat-thumb"><img src="/images/resources/chatlist2.jpg" alt=""></div>
                                        <div class="notification-event">
                                            <span class="chat-message-item">
                                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be
                                                handling the gifts and Jake’s gonna get the drinks
                                            </span>
                                            <span class="notification-date"><time datetime="2004-07-24T18:18"
                                                    class="entry-date updated">Yesterday at 8:10pm</time></span>
                                        </div>
                                    </li>
                                    <li class="me">
                                        <div class="chat-thumb"><img src="/images/resources/chatlist1.jpg" alt=""></div>
                                        <div class="notification-event">
                                            <span class="chat-message-item">
                                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be
                                                handling the gifts and Jake’s gonna get the drinks
                                            </span>
                                            <span class="notification-date"><time datetime="2004-07-24T18:18"
                                                    class="entry-date updated">Yesterday at 8:10pm</time></span>
                                        </div>
                                    </li>
                                </ul>
                                <form class="text-box">
                                    <textarea placeholder="Post enter to post..."></textarea>
                                    <div class="add-smiles">
                                        <span title="add icon" class="em em-expressionless"></span>
                                    </div>
                                    <div class="smiles-bunch">
                                        <i class="em em---1"></i>
                                        <i class="em em-smiley"></i>
                                        <i class="em em-anguished"></i>
                                        <i class="em em-laughing"></i>
                                        <i class="em em-angry"></i>
                                        <i class="em em-astonished"></i>
                                        <i class="em em-blush"></i>
                                        <i class="em em-disappointed"></i>
                                        <i class="em em-worried"></i>
                                        <i class="em em-kissing_heart"></i>
                                        <i class="em em-rage"></i>
                                        <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                    <button type="submit"></button>
                                </form>
                            </div>
                        </div>
                    </div><!-- Suggestions -->

                </aside>
            </div><!-- sidebar -->
        </div>
    </div>
</div>
@endif
@endsection
