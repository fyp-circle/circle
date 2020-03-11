@extends('layouts.main_lay')

@section('content')
<div class="fixed-sidebar right">
    <div class="chat-friendz">
        <ul class="chat-users">
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="" style="">
                    <span class="status f-online"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-away"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-online"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-offline"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-online"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-online"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-offline"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-online"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-away"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-away"></span>
                </div>
            </li>
            <li>
                <div class="author-thmb" style="width: 66%">
                    <img src="/images/resources/users/default.png" alt="">
                    <span class="status f-online"></span>
                </div>
            </li>
        </ul>
        <div class="chat-box">
            <div class="chat-head">
                <span class="status f-online"></span>
                <h6>Bucky Barnes</h6>
                <div class="more">
                    <span class="more-optns"><i class="ti-more-alt"></i>
                        <ul>
                            <li>block chat</li>
                            <li>unblock chat</li>
                            <li>conversation</li>
                        </ul>
                    </span>
                    <span class="close-mesage"><i class="ti-close"></i></span>
                </div>
            </div>
            <div class="chat-list">
                <ul>
                    <li class="me">
                        <div class="chat-thumb"><img src="/images/resources/chatlist1.jpg" alt=""></div>
                        <div class="notification-event">
                            <span class="chat-message-item">
                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts
                                and Jake’s gonna get the drinks
                            </span>
                            <span class="notification-date"><time datetime="2004-07-24T18:18"
                                    class="entry-date updated">Yesterday at 8:10pm</time></span>
                        </div>
                    </li>
                    <li class="you">
                        <div class="chat-thumb"><img src="/images/resources/chatlist2.jpg" alt=""></div>
                        <div class="notification-event">
                            <span class="chat-message-item">
                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts
                                and Jake’s gonna get the drinks
                            </span>
                            <span class="notification-date"><time datetime="2004-07-24T18:18"
                                    class="entry-date updated">Yesterday at 8:10pm</time></span>
                        </div>
                    </li>
                    <li class="me">
                        <div class="chat-thumb"><img src="/images/resources/chatlist1.jpg" alt=""></div>
                        <div class="notification-event">
                            <span class="chat-message-item">
                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts
                                and Jake’s gonna get the drinks
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
    </div>
</div><!-- right sidebar user chat -->

<div class="fixed-sidebar left">
    <div class="menu-left">
        <ul class="left-menu">
            <li><a href="{{ url('/') }}" title="Newsfeed Page" data-toggle="tooltip" data-placement="right"><i
                        class="ti-magnet" style="-webkit-text-fill-color: red"></i></a></li>
            <li><a href="{{ route('activityfamily',['circle_id'=>$circle_id]) }}" title="Activity" data-toggle="tooltip"
                    data-placement="right"><i class="ti-stats-up" style="-webkit-text-fill-color: red"></i></a></li>
            {{-- <li><a href="inbox.html" title="inbox" data-toggle="tooltip" data-placement="right"><i class="ti-import"></i></a></li> --}}
            <li><a href="{{ route('messagefamily',['circle_id'=>$circle_id]) }}" title="Messages" data-toggle="tooltip"
                    data-placement="right"><i class="ti-comment-alt" style="-webkit-text-fill-color: red"></i></a></li>
            <li><a href="{{ route('editinfofamily',['circle_id'=>$circle_id]) }}"
                    title="Setting" data-toggle="tooltip" data-placement="right"><i class="ti-panel" style="-webkit-text-fill-color: red"></i></a></li>
            <li><a href="{{ route('viewfamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="
                    Friends" data-toggle="tooltip" data-placement="right"><i class="ti-themify-favicon" style="-webkit-text-fill-color: red"></i></a></li>
        </ul>
    </div>
</div><!-- left sidebar menu -->

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Shortcuts</h4>
                                    <ul class="naves">
                                        <li>
                                            <i class="ti-clipboard"></i>
                                            <a href="{{ url('/') }}" title="">News feed</a>
                                        </li>
                                        <li>
                                            <i class="ti-user"></i>
                                            <a href="{{ route('viewfamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="">Friends</a>
                                        </li>
                                        <li>
                                            <i class="ti-comments-smiley"></i>
                                            <a href="{{ route('messagefamily',['circle_id'=>$circle_id]) }}" title="">Inbox</a>
                                        </li>
                                        <li>
                                            <i class="ti-bell"></i>
                                            <a href="{{url('notification')}}" title="">Notifications</a>
                                        </li>
                                        <li>
                                            <i class="ti-share"></i>
                                        <a href="{{ route('nearbyfamily',['circle_id'=>$circle_id]) }}" title="">People Nearby</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-bar-chart-o"></i>
                                            <a href="{{ route('activityfamily',['circle_id'=>$circle_id]) }}" title="">Activity Log</a>
                                        </li>
                                        <li>
                                            <i class="ti-face-smile"></i>
                                            <a href="{{ route('viewprofilefamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="">View Profile</a>
                                        </li>
                                        <li>
                                            <i class="ti-pencil-alt"></i>
                                            <a href="{{ route('editinfofamily',['circle_id'=>$circle_id]) }}" title="">Edit Info</a>
                                        </li>
                                    </ul>
                                </div><!-- Shortcuts -->
                                <div class="widget">
                                    <h4 class="widget-title">Recent Activity</h4>
                                    <ul class="activitiez">
                                        <li>
                                            <div class="activity-meta">
                                                <i>10 hours Ago</i>
                                                <span><a href="#" title="">Commented on Video posted </a></span>
                                                <h6>by <a href="time-line.html">black demon.</a></h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-meta">
                                                <i>30 Days Ago</i>
                                                <span><a href="#" title="">Posted your status. “Hello guys, how are
                                                        you?”</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-meta">
                                                <i>2 Years Ago</i>
                                                <span><a href="#" title="">Share a video on her timeline.</a></span>
                                                <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- recent activites -->
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Friend Requests</h4>
                                    <ul class="followers">
                                        <li>
                                            <figure><img src="/images/resources/users/81.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="/images/resources/users/13.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="/images/resources/users/40.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="/images/resources/users/11.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="/images/resources/users/71.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Allen</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- Friend Requests -->
                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="central-meta new-pst">
                                <div class="new-postbox">
                                    <figure>
                                        <img src="{{Auth::user()->family_user['profile_picture']}}" alt="" style="width:60px; height:52px; object-fit:cover">
                                    </figure>
                                    <div class="newpst-input">
                                        <form method="post" action="{{ route('createpost',['circle_id'=>$circle_id]) }}" enctype="multipart/form-data">
                                            @csrf
                                            <textarea rows="2" placeholder="write something... " name="content"></textarea>
                                            <div class="attachments">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-music"></i>
                                                        <label class="fileContainer">
                                                            <input type="file" name="audio" accept="audio/*">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-image"></i>
                                                        <label class="fileContainer">
                                                            <input type="file" name="image" accept="image/*">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-video-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file" name="video"  accept="video/*">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file" name="cam"  accept="image/*" >
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
                            </div>
                            <!-- add post new box -->
                            <div class="loadMore">
                                @if (count($posts)==0)
                        <div><p>No Posts Found</p></div>
                    @else
                        @foreach ($posts as $post)
                        <div class="central-meta item">
                            <div class="user-post">
                                <div class="friend-info">
                                    <figure>
                                        <a href="{{ route('viewprofilefamily',['id'=>$post->user->user_id,'circle_id'=>$circle_id]) }}"><img src="{{$post->user->family_user->profile_picture}}" alt=""></a>
                                    </figure>
                                    <div class="friend-name">
                                        <ins><a href="{{ route('viewprofilefamily',['id'=>$post->user->user_id,'circle_id'=>$circle_id]) }}" title="">{{$post->user->family_user->name}}</a></ins>
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
                                            <ul>

                                                <li>
                                                    <span class="views" data-toggle="tooltip" title="views">
                                                        <i class="fa fa-eye"></i>
                                                        <ins>1.2k</ins>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                        <i class="fa fa-comments-o"></i>
                                                        <ins>52</ins>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="like" id="likebutton" data-toggle="tooltip" title="like">
                                                        <i class="ti-heart"></i>
                                                        <ins id ="test">2.2k</ins>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                        <i class="ti-heart-broken"></i>
                                                        <ins>200</ins>
                                                    </span>
                                                </li>
                                                <li class="social-media">
                                                    <div class="menu">
                                                        <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                        <div class="rotater">
                                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                                        class="fa fa-html5"></i></a></div>
                                                        </div>
                                                        <div class="rotater">
                                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                                        class="fa fa-facebook"></i></a></div>
                                                        </div>
                                                        <div class="rotater">
                                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                                        class="fa fa-google-plus"></i></a></div>
                                                        </div>
                                                        <div class="rotater">
                                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                                        class="fa fa-twitter"></i></a></div>
                                                        </div>
                                                        <div class="rotater">
                                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                                        class="fa fa-css3"></i></a></div>
                                                        </div>
                                                        <div class="rotater">
                                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                                        class="fa fa-instagram"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="rotater">
                                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                                        class="fa fa-dribbble"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="rotater">
                                                            <div class="btn btn-icon"><a href="#" title=""><i
                                                                        class="fa fa-pinterest"></i></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                {{-- <div class="coment-area">
                                    <ul class="we-comet">
                                        <li>
                                            <div class="comet-avatar">
                                                <img src="/images/resources/comet-1.jpg" alt="">
                                            </div>
                                            <div class="we-comment">
                                                <div class="coment-head">
                                                    <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                    <span>1 year ago</span>
                                                    <a class="we-reply" href="#" title="Reply"><i
                                                            class="fa fa-reply"></i></a>
                                                </div>
                                                <p>we are working for the dance and sing songs. this car is very awesome for
                                                    the youngster. please vote this car and like our post</p>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="/images/resources/comet-2.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
                                                            <span>1 month ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>yes, really very awesome car i see the features of this car in
                                                            the official website of <a href="#" title="">#Mercedes-Benz</a>
                                                            and really impressed :-)</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="/images/resources/comet-3.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.html" title="">Olivia</a></h5>
                                                            <span>16 days ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>i like lexus cars, lexus cars are most beautiful with the awesome
                                                            features, but this car is really outstanding than lexus</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comet-avatar">
                                                <img src="/images/resources/comet-4.jpg" alt="">
                                            </div>
                                            <div class="we-comment">
                                                <div class="coment-head">
                                                    <h5><a href="time-line.html" title="">Donald Trump</a></h5>
                                                    <span>1 week ago</span>
                                                    <a class="we-reply" href="#" title="Reply"><i
                                                            class="fa fa-reply"></i></a>
                                                </div>
                                                <p>we are working for the dance and sing songs. this video is very awesome
                                                    for the youngster. please vote this video and like our channel
                                                    <i class="em em-smiley"></i>
                                                </p>
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
                                                        <span class="em em-expressionless" title="add icon"></span>
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
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                        @endforeach
                    @endif
                                {{-- <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img src="/images/resources/users/11.jpg" alt="">
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="time-line.html" title="">Sara Grey</a></ins>
                                                <span>published: june,2 2018 19:PM</span>
                                            </div>
                                            <div class="post-meta">

                                                <iframe src="https://player.vimeo.com/video/277739637" width=""
                                                    height="315" frameborder="0" allow="autoplay; fullscreen"
                                                    allowfullscreen></iframe>
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip"
                                                                title="Comments">
                                                                <i class="fa fa-comments"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                        </li>
                                                        <li class="social-media">
                                                            <div class="menu">
                                                                <div class="btn trigger"><i class="fa fa-share-alt"></i>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-html5"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-facebook"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-google-plus"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-twitter"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-css3"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-instagram"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-dribbble"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="description">

                                                    <p>
                                                        Lonely Cat Enjoying in Summer Curabitur <a href="#"
                                                            title="">#mypage</a>
                                                        ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                        Maecenas tempus,
                                                        tellus eget condimentum rhoncus, sem quam semper libero, sit
                                                        amet adipiscing
                                                        sem neque sed ipsum. Nam quam nunc,
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="coment-area">
                                            <ul class="we-comet">
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="/images/resources/users/75.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                            <span>1 year ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome
                                                            for the youngster. please vote this video and like our
                                                            channel</p>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="/images/resources/users/26.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                            <span>1 week ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome
                                                            for the youngster.
                                                            <i class="em em-smiley"></i>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="showmore underline">more comments</a>
                                                </li>
                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="/{{Auth::user()->profile_picture}}" alt="">
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form method="post">
                                                            <textarea placeholder="Post your comment"></textarea>
                                                            <div class="add-smiles">
                                                                <span class="em em-expressionless"
                                                                    title="add icon"></span>
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
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img src="/images/resources/users/26.jpg" alt="">
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="time-line.html" title="">Sophia</a></ins>
                                                <span>published: january,5 2018 19:PM</span>
                                            </div>
                                            <div class="post-meta">
                                                <div class="post-map">
                                                    <div class="nearby-map">
                                                        <div id="map-canvas"></div>
                                                    </div>
                                                </div><!-- near by map -->
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip"
                                                                title="Comments">
                                                                <i class="fa fa-comments"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                        </li>
                                                        <li class="social-media">
                                                            <div class="menu">
                                                                <div class="btn trigger"><i class="fa fa-share-alt"></i>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-html5"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-facebook"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-google-plus"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-twitter"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-css3"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-instagram"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-dribbble"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="description">

                                                    <p>
                                                        Curabitur Lonely Cat Enjoying in Summer <a href="#"
                                                            title="">#mypage</a>
                                                        ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                        Maecenas tempus,
                                                        tellus eget condimentum rhoncus, sem quam semper libero, sit
                                                        amet adipiscing
                                                        sem neque sed ipsum. Nam quam nunc,
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="coment-area">
                                            <ul class="we-comet">
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="/images/resources/users/75.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                            <span>1 year ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome
                                                            for the youngster. please vote this video and like our
                                                            channel</p>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="/images/resources/users/26.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                            <span>1 week ago</span>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
                                                        </div>
                                                        <p>we are working for the dance and sing songs. this video is
                                                            very awesome
                                                            for the youngster.
                                                            <i class="em em-smiley"></i>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="showmore underline">more comments</a>
                                                </li>
                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="/{{Auth::user()->profile_picture}}" alt="">
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form method="post">
                                                            <textarea placeholder="Post your comment"></textarea>
                                                            <div class="add-smiles">
                                                                <span class="em em-expressionless"
                                                                    title="add icon"></span>
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
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img alt="" src="/images/resources/users/67.jpg">
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a title="" href="time-line.html">Janice Griffith</a></ins>
                                                <span>published: june,2 2018 19:PM</span>
                                            </div>
                                            <div class="description">

                                                <p>
                                                </p>
                                            </div>
                                            <div class="post-meta">
                                                <div class="linked-image align-left">
                                                    <a title="" href="#"><img alt=""
                                                            src="/images/resources/post2.jpg"></a>
                                                </div>
                                                <div class="detail">
                                                    <span>Love Maid - ChillGroves</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do
                                                        eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua... </p>
                                                    <a title="" href="#">www.sample.com</a>
                                                </div>
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip"
                                                                title="Comments">
                                                                <i class="fa fa-comments"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                        </li>
                                                        <li class="social-media">
                                                            <div class="menu">
                                                                <div class="btn trigger"><i class="fa fa-share-alt"></i>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-html5"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-facebook"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-google-plus"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-twitter"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-css3"></i></a></div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-instagram"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-dribbble"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="rotater">
                                                                    <div class="btn btn-icon"><a href="#" title=""><i
                                                                                class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                {{-- <div class="widget">
                                    <div class="banner medium-opacity bluesh">
                                        <div class="bg-image"
                                            style="background-image: url(images/resources/baner-widgetbg.jpg)">
                                        </div>
                                        <div class="baner-top">
                                            <span><img alt="" src="images/book-icon.png"></span>
                                            <i class="fa fa-ellipsis-h"></i>
                                        </div>
                                        <div class="banermeta">
                                            <p>
                                                create your own favourit page.
                                            </p>
                                            <span>like them all</span>
                                            <a data-ripple="" title="" href="#">start now!</a>
                                        </div>
                                    </div>
                                </div> --}}
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
                                                    <div class="chat-thumb"><img src="/images/resources/chatlist1.jpg"
                                                            alt=""></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m
                                                            gonna be
                                                            handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time
                                                                datetime="2004-07-24T18:18"
                                                                class="entry-date updated">Yesterday at
                                                                8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="you">
                                                    <div class="chat-thumb"><img src="/images/resources/chatlist2.jpg"
                                                            alt=""></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m
                                                            gonna be
                                                            handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time
                                                                datetime="2004-07-24T18:18"
                                                                class="entry-date updated">Yesterday at
                                                                8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="/images/resources/chatlist1.jpg"
                                                            alt=""></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m
                                                            gonna be
                                                            handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time
                                                                datetime="2004-07-24T18:18"
                                                                class="entry-date updated">Yesterday at
                                                                8:10pm</time></span>
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
                                {{-- <div class="widget">
                                    <h4 class="widget-title">Your page</h4>
                                    <div class="your-page">
                                        <figure>
                                            <a href="#" title=""><img src="images/resources/friend-avatar9.jpg"
                                                    alt=""></a>
                                        </figure>
                                        <div class="page-meta">
                                            <a href="#" title="" class="underline">My page</a>
                                            <span><i class="ti-comment"></i><a href="insight.html" title="">Messages
                                                    <em>9</em></a></span>
                                            <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications
                                                    <em>2</em></a></span>
                                        </div>
                                        <div class="page-likes">
                                            <ul class="nav nav-tabs likes-btn">
                                                <li class="nav-item"><a class="active" href="#link1"
                                                        data-toggle="tab">likes</a>
                                                </li>
                                                <li class="nav-item"><a class="" href="#link2"
                                                        data-toggle="tab">views</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active fade show " id="link1">
                                                    <span><i class="ti-heart"></i>884</span>
                                                    <a href="#" title="weekly-likes">35 new likes this week</a>
                                                    <div class="users-thumb-list">
                                                        <a href="#" title="Anderw" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-1.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="frank" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-2.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sara" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-3.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Amy" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-4.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Ema" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-5.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sophie" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-6.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Maria" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="link2">
                                                    <span><i class="ti-eye"></i>440</span>
                                                    <a href="#" title="weekly-likes">440 new views this week</a>
                                                    <div class="users-thumb-list">
                                                        <a href="#" title="Anderw" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-1.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="frank" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-2.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sara" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-3.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Amy" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-4.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Ema" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-5.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sophie" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-6.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Maria" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- page like widget --> --}}
                            </aside>
                        </div><!-- sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
