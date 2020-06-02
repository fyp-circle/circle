@extends('layouts.profile_lay')

@section('profilecontent')
@if ($c == 2)
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
                                <a href="{{ route('viewprofile',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">Timeline</a>
                            </li>
                            <li>
                                <i class="far fa-images"></i>
                                <a href="{{ route('viewphotos',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Photos</a>
                            </li>
                            <li>
                                <i class="fas fa-film"></i>
                                <a href="{{ route('viewvideos',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Videos</a>
                            </li>
                            @if (Auth::user()->user_id==$profile_id)
                            <li>
                                <i class="fas fa-users"></i>
                                <a href="{{ route('viewfriends',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="">Friends Circle</a>
                            </li>
                            @endif
                            <li>
                                <i class="fas fa-info-circle"></i>
                                <a href="{{ route('viewabout',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">About</a>
                            </li>
                        </ul>
                    </div><!-- Shortcuts -->

                </aside>
            </div><!-- sidebar -->
            <div class="col-lg-9">
                <div class="central-meta">
                    <div class="frnds">
                        <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Friends Circle(<span>{{count($cons)}}</span>)</a>
                            </li>

                            <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend
                                    Requests(<span>{{count($reqs)}}</span>)</a></li>

                                    <li class="nav-item"><a class="" href="#sent-req" data-toggle="tab">Sent
                                        Requests(<span>{{count($sreqs)}}</span>)</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active fade show " id="frends">
                                @if (count($cons)==0)
                                    <ul class="nearby-contct">
                                        <li>
                                            <div class="nearly-pepls">
                                                <div class="pepl-info">
                                                   <p>No Friends Yet.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @else
                                <ul class="nearby-contct">
                                    @foreach ($cons as $con)
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>

                                                @if ($con->user1_id!=Auth::user()->user_id)
                                                <a href="{{ route('viewprofile',['id'=>$con->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$con->user1->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofile',['id'=>$con->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$con->user2->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($con->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofile',['id'=>$con->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$con->user1->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofile',['id'=>$con->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$con->user2->name}}</a>
                                                    @endif
                                                </h4>
                                                {{-- <span>ftv model</span> --}}

                                                <a id = "UnfriendButton1" href="#" title="" class="add-butn more-action" data-ripple="" style="right: 0">Unfriend</a>
                                                <script type="text/javascript">
                                                    document.getElementById("UnfriendButton1").onclick = function () {
                                                        var auth_id = "{{ Auth::user()->user_id}}";
                                                        if ($con->user1_id!=auth_id) {
                                                            var profile_id="{{$con->user1->user_id}}";

                                                        } else {
                                                            var profile_id="{{$con->user2->user_id}}";
                                                        }
                                                        location.href = "/unfriend/" + profile_id+"/{{Auth::user()->user_id}}";


                                                    };
                                                </script>

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
                                    <ul class="nearby-contct">
                                        <li>
                                            <div class="nearly-pepls">
                                                <div class="pepl-info">
                                                   <p>No Friends Requests.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @else
                                <ul class="nearby-contct">
                                    @foreach ($reqs as $req)
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                @if ($req->user1_id!=Auth::user()->user_id)
                                                <a href="{{ route('viewprofile',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$req->user1->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofile',['id'=>$req->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$req->user2->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($req->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofile',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$req->user1->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofile',['id'=>$req->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$req->user2->name}}</a>
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
                                    <ul class="nearby-contct">
                                        <li>
                                            <div class="nearly-pepls">
                                                <div class="pepl-info">
                                                   <p>No Sent Requests.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @else
                                <ul class="nearby-contct">
                                    @foreach ($sreqs as $sreq)
                                    <li>
                                        <div class="nearly-pepls">
                                            <figure>
                                                @if ($sreq->user1_id!=Auth::user()->user_id)
                                                <a href="{{ route('viewprofile',['id'=>$sreq->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$sreq->user1->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofile',['id'=>$sreq->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$sreq->user2->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($sreq->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofile',['id'=>$sreq->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$sreq->user1->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofile',['id'=>$sreq->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$sreq->user2->name}}</a>
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
            
        </div>
    </div>
</div>
@endif
@endsection
