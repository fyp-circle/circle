@extends('layouts.profile_lay_bus')

@section('profilecontent')
@if ($c==1 || $c == 2)
<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
            <div class="col-lg-3">
                <aside class="sidebar static">
                    <div class="widget stick-widget">
                        <h4 class="widget-title">Shortcuts</h4>
                        <ul class="naves">
                            <li>
                                <i class="fas fa-stream"></i>
                                <a href="{{ route('viewprofilebusiness',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">Timeline</a>
                            </li>
                            <li>
                                <i class="far fa-images"></i>
                                <a href="{{ route('viewphotosbusiness',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Photos</a>
                            </li>
                            <li>
                                <i class="fas fa-film"></i>
                                <a href="{{ route('viewvideosbusiness',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Videos</a>
                            </li>
                            @if (Auth::user()->user_id==$profile_id)
                            <li>
                                <i class="fas fa-users"></i>
                                <a href="{{ route('viewbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="">Business Connection</a>
                            </li>
                            @endif
                            <li>
                                <i class="fas fa-info-circle"></i>
                                <a href="{{ route('viewaboutbusiness',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">About</a>
                            </li>
                        </ul>
                    </div><!-- Shortcuts -->
                </aside>
            </div><!-- sidebar -->
            <div class="col-lg-6">
                <div class="loadMore">
                    @if ($c==2)
                    <div class="central-meta new-pst item">
                        <div class="new-postbox">
                            <figure>
                                <img src="{{$user->business_user->profile_picture}}" alt="">
                            </figure>
                            <div class="newpst-input">
                                <form method="post" action="{{ route('createpost',['circle_id'=>$circle_id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    <textarea rows="2" placeholder="write something... " name="content"></textarea>
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
                    </div>
                    @endif
                    <!-- add post new box -->
                    {{-- <div class="central-meta item">
                        <div class="user-post">
                            <div class="friend-info">
                                <figure>
                                    <img src="/images/resources/friend-avatar10.jpg" alt="">
                                </figure>
                                <div class="friend-name">
                                    <ins><a href="time-line.html" title="">{{$user->name}}</a></ins>
                                    <span>published: june,2 2018 19:PM</span>
                                </div>
                                <div class="description">

                                    <p>
                                        World's most beautiful car in Curabitur <a href="#" title="">#test drive booking
                                            !</a> the most beatuiful car available in america and the saudia arabia, you
                                        can book your test drive by our official website
                                    </p>
                                </div>
                                <div class="post-meta">
                                    <div class="linked-image align-left">
                                        <a href="#" title=""><img src="/images/resources/page1.jpg" alt=""></a>
                                    </div>
                                    <div class="detail">
                                        <span>Love Maid - ChillGroves</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua... </p>
                                        <a href="#" title="">www.sample.com</a>
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
                                                <span class="comment" data-toggle="tooltip" title="Comments">
                                                    <i class="fa fa-comments-o"></i>
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
                        </div>
                    </div> <!--posts --> --}}
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
                        <<div class="central-meta item">
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
                                            <ul>
                                                <li>
                                                    <span class="Views" data-toggle="tooltip" title="views"
                                                        style="color:grey ">
                                                        <i class="fas fa-eye"></i>
                                                        <ins>1.2k</ins>
                                                    </span>
                                                </li>
                                                <li>
                                                    {{-- jab comment nhi hoga to i class = far fa-comments --}}
                                                    <span class="comment" data-toggle="tooltip" title="Comments"
                                                        style="color:rgb(206, 177, 12) ">
                                                        <i class="fas fa-comments"></i>
                                                        <ins>12</ins>
                                                    </span>
                                                </li>
                                                <li>
                                                    {{-- jab like nhi hoga to i class = far fa-heart --}}
                                                    <span class="like" id="likebutton" data-toggle="tooltip"
                                                        title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <ins id="test">34</ins>
                                                    </span>
                                                </li>
                                                {{-- <li class="social-media">
                                                    <div class="menu">
                                                        <div class=""><i class="fas fa-share-square"></i>
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
                                                </li> --}}
                                                <li>
                                                    <span class="like" id="sharebutton" data-toggle="tooltip"
                                                        title="Share" style="color:black ">
                                                        <i class="fas fa-share-square"></i>
                                                        <ins>2</ins>
                                                    </span>
                                                </li>
                                                <li style="margin-right:0; margin-left:40%;">
                                                    <span class="like" id="sharebutton" data-toggle="tooltip"
                                                        title="Report" style="color:rgb(107, 0, 0) ">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </span>
                                                </li>
                                            </ul>
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
                        @endforeach
                    @endif
                </div>
            </div><!-- centerl meta -->
            <div class="col-lg-3">
                <aside class="sidebar static">
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
