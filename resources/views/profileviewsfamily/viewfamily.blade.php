@extends('layouts.profile_lay_fam')
@if ($c==1 || $c == 2)
@section('profilecontent')
<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
            {{-- <div class="col-lg-3">
                <aside class="sidebar static">
                    <div class="widget">
                        <h4 class="widget-title">Shortcuts</h4>
                        <ul class="naves">
                            <li>
                                <i class="ti-clipboard"></i>
                                <a href="newsfeed.html" title="">News feed</a>
                            </li>
                            <li>
                                <i class="ti-mouse-alt"></i>
                                <a href="inbox.html" title="">Inbox</a>
                            </li>
                            <li>
                                <i class="ti-files"></i>
                                <a href="fav-page.html" title="">My pages</a>
                            </li>
                            <li>
                                <i class="ti-user"></i>
                                <a href="timeline-friends.html" title="">friends</a>
                            </li>
                            <li>
                                <i class="ti-image"></i>
                                <a href="timeline-photos.html" title="">images</a>
                            </li>
                            <li>
                                <i class="ti-video-camera"></i>
                                <a href="timeline-videos.html" title="">videos</a>
                            </li>
                            <li>
                                <i class="ti-comments-smiley"></i>
                                <a href="messages.html" title="">Messages</a>
                            </li>
                            <li>
                                <i class="ti-bell"></i>
                                <a href="notifications.html" title="">Notifications</a>
                            </li>
                            <li>
                                <i class="ti-share"></i>
                                <a href="people-nearby.html" title="">People Nearby</a>
                            </li>
                            <li>
                                <i class="fa fa-bar-chart-o"></i>
                                <a href="insights.html" title="">insights</a>
                            </li>
                            <li>
                                <i class="ti-power-off"></i>
                                <a href="landing.html" title="">Logout</a>
                            </li>
                        </ul>
                    </div><!-- Shortcuts -->
                    <div class="widget stick-widget">
                        <h4 class="widget-title">Profile intro</h4>
                        <ul class="short-profile">
                            <li>
                                <span>about</span>
                                <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft
                                    company. </p>
                            </li>
                            <li>
                                <span>fav tv show</span>
                                <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft
                                    company. </p>
                            </li>
                            <li>
                                <span>favourit music</span>
                                <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft
                                    company. </p>
                            </li>
                        </ul>
                    </div><!-- profile intro widget -->

                </aside>
            </div><!-- sidebar --> --}}
            <div class="col-lg-9">
                <div class="central-meta">
                    <div class="frnds">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Family</a>
                                <span>55</span></li>
                            <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Family
                                    Requests</a><span>60</span></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active fade show " id="frends">
                                <ul class="nearby-contct">
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/friend-avatar9.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">jhon kates</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action"
                                                    data-ripple="" style="right:0%">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly1.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">sophia Gate</a></h4>
                                                <span>tv actresses</span>
                                                <a href="#" title="" class="add-butn more-action"
                                                    data-ripple="" style="right:0%">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly5.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Amy watson</a></h4>
                                                <span>Study in university</span>
                                                <a href="#" title="" class="add-butn more-action"
                                                    data-ripple="" style="right:0%">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly6.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">caty lasbo</a></h4>
                                                <span>work as dancers</span>
                                                <a href="#" title="" class="add-butn more-action"
                                                    data-ripple="" style="right:0%">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly2.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Ema watson</a></h4>
                                                <span>personal business</span>
                                                <a href="#" title="" class="add-butn more-action"
                                                    data-ripple="" style="right:0%">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                            </div>
                            <div class="tab-pane fade" id="frends-req">
                                <ul class="nearby-contct">
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly5.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Amy watson</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly1.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">sophia Gate</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly6.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">caty lasbo</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/friend-avatar9.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">jhon kates</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly2.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">sara grey</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly4.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Sara grey</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/nearly3.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">Sexy cat</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                <a href="time-line.html" title=""><img
                                                        src="images/resources/friend-avatar9.jpg" alt=""></a>
                                            </figure>
                                            <div class="pepl-info">
                                                <h4><a href="time-line.html" title="">jhon kates</a></h4>
                                                <span>ftv model</span>
                                                <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                    Request</a>
                                                <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
                                    <img src="//images/resources/friend-avatar.jpg" alt="">
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">bucky barnes</a>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="//images/resources/friend-avatar2.jpg" alt="">
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
