@extends('layouts.profile_lay')

@section('profilecontent')
@if ($c==1 || $c == 2)
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
                    <div class="widget">
                        <h4 class="widget-title">Profile intro</h4>
                        <ul class="short-profile">
                            <li>
                                <span>about</span>
                                <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft
                                    company. </p>
                            </li>
                            <li>
                                <span>fav tv show</span>
                                <p>Sacred Games, Spartcus Blood, Games of theron</p>
                            </li>
                            <li>
                                <span>favourit music</span>
                                <p>Justin Biber, Nati Natsha, Shakira</p>
                            </li>
                        </ul>
                    </div><!-- profile intro widget -->

                </aside>
            </div><!-- sidebar --> --}}
            <div class="col-md-12">
                <div class="central-meta">
                    @if (count($posts)==0)
                        No Photos Found.
                    @else
                    <ul class="photos">

                        @foreach ($posts as $post)
                        @if ($post->picture!=null)
                        <li>
                            <a class="strip" href="#" title="" data-strip-group="mygroup"
                                data-strip-group-options="loop: false">
                                <img src="/{{$post->picture}}" alt=""></a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                    @endif
                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                </div><!-- photos -->
            </div><!-- centerl meta -->
            {{-- <div class="col-lg-3">
                <aside class="sidebar static">
                    <div class="widget friend-list stick-widget">
                        <h4 class="widget-title">Friends</h4>
                        <div id="searchDir"></div>
                        <ul id="people-list" class="friendz-list">
                            <li>
                                <figure>
                                    <img src="images/resources/friend-avatar.jpg" alt="">
                                    <span class="status f-online"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">bucky barnes</a>
                                    <i>wintersolder@gmail.com</i>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/resources/friend-avatar2.jpg" alt="">
                                    <span class="status f-away"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">Sarah Loren</a>
                                    <i>barnes@gmail.com</i>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/resources/friend-avatar3.jpg" alt="">
                                    <span class="status f-off"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">jason borne</a>
                                    <i>jasonb@gmail.com</i>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="images/resources/friend-avatar4.jpg" alt="">
                                    <span class="status f-off"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">Cameron diaz</a>
                                    <i>jasonb@gmail.com</i>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="images/resources/friend-avatar5.jpg" alt="">
                                    <span class="status f-online"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">daniel warber</a>
                                    <i>jasonb@gmail.com</i>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="images/resources/friend-avatar6.jpg" alt="">
                                    <span class="status f-away"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">andrew</a>
                                    <i>jasonb@gmail.com</i>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="images/resources/friend-avatar7.jpg" alt="">
                                    <span class="status f-off"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">amy watson</a>
                                    <i>jasonb@gmail.com</i>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="images/resources/friend-avatar5.jpg" alt="">
                                    <span class="status f-online"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">daniel warber</a>
                                    <i>jasonb@gmail.com</i>
                                </div>
                            </li>
                            <li>

                                <figure>
                                    <img src="images/resources/friend-avatar2.jpg" alt="">
                                    <span class="status f-away"></span>
                                </figure>
                                <div class="friendz-meta">
                                    <a href="time-line.html">Sarah Loren</a>
                                    <i>barnes@gmail.com</i>
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
                                        <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
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
                                        <div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
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
                                        <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
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
                    </div><!-- friends list sidebar -->

                </aside>
            </div><!-- sidebar --> --}}
        </div>
    </div>
</div>

@endif
@endsection
