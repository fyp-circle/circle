@extends('layouts.main_lay')

@section('content')
<div class="fixed-sidebar right">
    <div class="chat-friendz">
        <ul class="chat-users">
            @foreach ($cons as $con)
            <li>
                <div class="author-thmb" style="width: 66%">
                    @if ($con->user1_id!=Auth::user()->user_id)
                    <a href="{{ route('message',['id'=>$con->user1_id,'circle_id'=>$circle_id]) }}" title=""><img
                            src="{{$con->user1->profile_picture}}" alt=""></a>
                    @else
                    <a href="{{ route('message',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}" title=""><img
                            src="{{$con->user2->profile_picture}}" alt=""></a>
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

                </div>
                {{-- @if ($con->user1_id!=Auth::user()->user_id)
                <a href="{{ route('message',['id'=>$con->user1_id,'circle_id'=>$circle_id]) }}"
                title=""><span>{{$con->user1->name}}</span></a>
                @else
                <a href="{{ route('message',['id'=>$con->user2_id,'circle_id'=>$circle_id]) }}"
                    title=""><span>{{$con->user2->name}}</span></a>
                @endif --}}
            </li>
            @endforeach
        </ul>
        {{-- <div class="chat-box">
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
        </div> --}}
    </div>
</div><!-- right sidebar user chat -->

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
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class = "col-lg-3 myownclass">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Shortcuts</h4>
                                        <ul class="naves">
                                            <li>
                                                <i class="far fa-newspaper"></i>
                                                <a href="{{ route('mainscreen',['circle_id'=>$circle_id]) }}" title="">News
                                                    feed</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-users"></i>
                                                <a href="{{ route('viewfriends',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                                                    title="">Friends Circle</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-envelope"></i>
                                                <a href="{{ route('messagefriends',['circle_id'=>$circle_id]) }}"
                                                    title="">Messages</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-bell"></i>
                                                <a href="{{ route('notification',['circle_id'=>$circle_id]) }}" title="">Notifications</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-street-view"></i>
                                                <a href="{{ route('nearbyfriends',['circle_id'=>$circle_id]) }}"
                                                    title="">People Nearby</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-tasks"></i>
                                                <a href="{{ route('activityfriends',['circle_id'=>$circle_id]) }}"
                                                    title="">Activity Log</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-user"></i>
                                                <a href="{{ route('viewprofile',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                                                    title="">View Profile</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-user-edit"></i>
                                                <a href="{{ route('editinfofriends',['circle_id'=>$circle_id]) }}"
                                                    title="">Edit Info</a>
                                            </li>
                                        </ul>
                                    </div><!-- Shortcuts -->
                                    <div class="widget">
                                        <h4 class="widget-title">Recent Activity</h4>
                                        @if (count($recent_activities)==0)
                                        <ul class="activitiez">
                                            <li>
                                                <div class="activity-meta">
                                                    <i></i>
                                                    <span><a href="" title="">No Recent Activity</a></span>
                                                </div>
                                            </li>
                                        </ul>
                                        @else
                                        <ul class="activitiez">
                                            @foreach ($recent_activities as $recent_activity)

                                            <li>
                                                <div class="activity-meta">
                                                    <i>{{$recent_activity->updated_at}}</i>
                                                    <span><a href="#" title="">{{$recent_activity->content}}</a></span>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div><!-- recent activites -->
                                    <div class="widget stick-widget">
                                        <h4 class="widget-title">Friend Requests</h4>
                                        @if (count($reqs)==0)
                                        <ul class="followers">
                                            <li>
                                                <div class="friend-meta">
                                                    <h4><a href="" title="">No Friend Request</a></h4>
                                                </div>
                                            </li>
                                        </ul>
                                        @else
                                        <ul class="followers">
                                            @foreach ($reqs as $req)
                                            <li>
                                                @if ($req->user1_id!=Auth::user()->user_id)
                                                <a href="{{ route('viewprofile',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}"
                                                    title="">
                                                    <figure><img src="{{$req->user1->profile_picture}}" alt=""></figure>
                                                </a>
                                                @else
                                                <a href="{{ route('viewprofile',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}"
                                                    title="">
                                                    <figure><img src="{{$req->user2->profile_picture}}" alt=""></figure>
                                                </a>
                                                @endif
                                                <div class="friend-meta">
                                                    @if ($req->user1_id!=Auth::user()->user_id)
                                                    <h4><a href="{{ route('viewprofile',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}"
                                                            title="">{{$req->user1->name}}</a></h4>
                                                    @else
                                                    <h4><a href="{{ route('viewprofile',['id'=>$req->user2->user_id,'circle_id'=>$circle_id]) }}"
                                                            title="">{{$req->user2->name}}</a></h4>
                                                    @endif

                                                    {{-- <a href="#" title="" class="underline">Add Friend</a> --}}
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div><!-- Friend Requests -->
                                </aside>
                        </div>
                        <div class="col-lg-6">
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
                            <div class="loadMore">
                                @if (count($posts)==0)
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <p>No Posts Found</p>
                                        </div>
                                    </div>
                                </div>
                                @else
                                @foreach ($posts as $post)
                                @if (count($post->reports)==0)
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
                                                            style="color:rgb(206, 177, 12) ">
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
                                                            <a href="{{ route('report',['post_id'=>$post->post_id,'circle_id'=>$circle_id]) }}">
                                                                <span class="like" id="sharebutton" data-toggle="tooltip"
                                                                title="Report" style="color:rgb(107, 0, 0) ">
                                                                <i class="fas fa-exclamation-triangle"></i>
                                                            </span>
                                                            </a>
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
                                @endif
                                @endforeach
                                @endif

                            </div>
                        </div><!-- centerl meta -->
                        <div class = "col-lg-3 myownclass">
                                <aside class="sidebar static">
                                    <div class="widget friend-list stick-widget">
                                        <h4 class="widget-title">Suggestions</h4>
                                        <div id="searchDir"></div>
                                        <ul id="people-list">
                                            @foreach ($suggestions as $i)
                                                <li>
                                                    <figure>
                                                        <img src="{{$i->profile_picture}}" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="{{ route('viewprofile',['id'=>$i->user_id,'circle_id'=>$circle_id]) }}">{{$i->name}}</a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div><!-- Suggestions -->
                                </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
