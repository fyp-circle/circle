@extends('layouts.profile_lay_fam')

@section('profilecontent')
@if ($c==1 || $c == 2)
<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
            <div class="col-lg-3">
                <aside class="sidebar static">
                    {{-- <div class="widget">
                        <h4 class="widget-title">Activity Log</h4>
                        <ul class="activitiez">
                            <li>
                                <div class="activity-meta">
                                    <i>10 hours Ago</i>
                                    <span><a href="#" title="">Commented on Video posted </a></span>
                                    <h6>by <a href="newsfeed.html">black demon.</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="activity-meta">
                                    <i>30 Days Ago</i>
                                    <span><a href="newsfeed.html" title="">Posted your status. “Hello guys, how are
                                            you?”</a></span>
                                </div>
                            </li>
                            <li>
                                <div class="activity-meta">
                                    <i>2 Years Ago</i>
                                    <span><a href="#" title="">Share a video on her timeline.</a></span>
                                    <h6>"<a href="newsfeed.html">you are so funny mr.been.</a>"</h6>
                                </div>
                            </li>
                        </ul>
                    </div><!-- recent activites --> --}}
                    <div class="widget stick-widget">
                        <h4 class="widget-title">Who's follownig</h4>
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
                </aside>
            </div><!-- sidebar -->
            <div class="col-lg-6">
                <div class="loadMore">
                    @if ($c==2)
                    <div class="central-meta new-pst item">
                        <div class="new-postbox">
                            <figure>
                                <img src="{{$user->family_user->profile_picture}}" alt="">
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
                        <div class="central-meta item">
                            <div class="user-post">
                                <div class="friend-info">
                                    <figure>
                                        <img src="{{$post->user->family_user->profile_picture}}" alt="">
                                    </figure>
                                    <div class="friend-name">
                                        <ins><a href="time-line.html" title="">{{$post->user->family_user->name}}</a></ins>
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
                                    <img src="/images/resources/friend-avatar10.jpg" alt="">
                                </figure>
                                <div class="friend-name">
                                    <ins><a href="time-line.html" title="">{{$user->name}}</a></ins>
                                    <span>published: june,2 2018 19:PM</span>
                                </div>
                                <div class="post-meta">
                                    <iframe width="" height="285" src="https://www.youtube.com/embed/_-StQsHSTz0"
                                        frameborder="0" allowfullscreen></iframe>
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
                                    <div class="description">

                                        <p>
                                            Lonely Cat Enjoying in Summer Curabitur <a href="#" title="">#mypage</a>
                                            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                            tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                            sem neque sed ipsum. Nam quam nunc,
                                        </p>
                                    </div>
                                </div>
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
                                                <a class="we-reply" href="#" title="Reply"><i
                                                        class="fa fa-reply"></i></a>
                                            </div>
                                            <p>we are working for the dance and sing songs. this video is very awesome
                                                for the youngster. please vote this video and like our channel</p>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="comet-avatar">
                                            <img src="/images/resources/comet-2.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                <span>1 week ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i
                                                        class="fa fa-reply"></i></a>
                                            </div>
                                            <p>we are working for the dance and sing songs. this video is very awesome
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
                                            <img src="/images/resources/comet-2.jpg" alt="">
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
                            </div>
                        </div>
                    </div> --}}
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
