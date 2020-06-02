@extends('layouts.profile_lay_fam')

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
                                <a href="{{ route('viewprofilefamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">Timeline</a>
                            </li>
                            <li>
                                <i class="far fa-images"></i>
                                <a href="{{ route('viewphotosfamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Photos</a>
                            </li>
                            <li>
                                <i class="fas fa-film"></i>
                                <a href="{{ route('viewvideosfamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Videos</a>
                            </li>
                            @if (Auth::user()->user_id==$profile_id)
                            <li>
                                <i class="fas fa-users"></i>
                                <a href="{{ route('viewfamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="">Family Circle</a>
                            </li>
                            @endif
                            <li>
                                <i class="fas fa-info-circle"></i>
                                <a href="{{ route('viewaboutfamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">About</a>
                            </li>
                        </ul>
                    </div><!-- Shortcuts -->

                </aside>
            </div><!-- sidebar -->

            <div class="col-lg-9">
                <div class="central-meta">
                    <div class="frnds">
                        <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Family Circle(<span>{{count($cons)}}</span>)</a>
                            </li>

                            <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Family
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
                                                   <p>No Family Members Yet.</p>
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
                                                <a href="{{ route('viewprofilefamily',['id'=>$con->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$con->user1->family_user->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofilefamily',['id'=>$con->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$con->user2->family_user->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($con->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofilefamily',['id'=>$con->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$con->user1->family_user->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofilefamily',['id'=>$con->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$con->user2->family_user->name}}</a>
                                                    @endif
                                                </h4>
                                                @if ($con->con_ini==$user->user_id)
                                            <span>You are {{$con->relation}} of @if ($con->user1_id!=Auth::user()->user_id)
                                                {{$con->user1->family_user->name}}.
                                            @else
                                                {{$con->user2->family_user->name}}.
                                            @endif</span>
                                                @else
                                                <span>@if ($con->user1_id!=Auth::user()->user_id)
                                                    {{$con->user1->family_user->name}} is your {{$con->relation}}.
                                                @else
                                                    {{$con->user2->family_user->name}} is your {{$con->relation}}.
                                                @endif</span>
                                                @endif

                                                <a id = "UnfriendButton1" href="#" title="" class="add-butn more-action" data-ripple="" style="right: 0">Remove From Family</a>


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
                                                   <p>No Family Requests.</p>
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
                                                <a href="{{ route('viewprofilefamily',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$req->user1->family_user->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofilefamily',['id'=>$req->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$req->user2->family_user->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($req->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofilefamily',['id'=>$req->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$req->user1->family_user->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofilefamily',['id'=>$req->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$req->user2->family_user->name}}</a>
                                                    @endif
                                                </h4>
                                                @if ($req->con_ini!=$user->user_id)
                                                <span>As @if ($req->user1_id!=Auth::user()->user_id)
                                                    {{$req->user1->family_user->name}} is your {{$req->relation}}.
                                                @else
                                                    {{$req->user2->family_user->name}} is your {{$req->relation}}.
                                                @endif</span>
                                                    @endif
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
                                                <a href="{{ route('viewprofilefamily',['id'=>$sreq->user1->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$sreq->user1->family_user->profile_picture}}" alt=""></a>
                                                @else
                                                <a href="{{ route('viewprofilefamily',['id'=>$sreq->user2->user_id,'circle_id'=>$circle_id]) }}" title=""><img src="{{$sreq->user2->family_user->profile_picture}}" alt=""></a>
                                                @endif
                                            </figure>
                                            <div class="pepl-info">
                                                <h4>
                                                    @if ($sreq->user1_id!=Auth::user()->user_id)
                                                    <a href="{{ route('viewprofilefamily',['id'=>$sreq->user1->user_id,'circle_id'=>$circle_id]) }}" title="">{{$sreq->user1->family_user->name}}</a>
                                                    @else
                                                    <a href="{{ route('viewprofilefamily',['id'=>$sreq->user2->user_id,'circle_id'=>$circle_id]) }}" title="">{{$sreq->user2->family_user->name}}</a>
                                                    @endif
                                                </h4>
                                                @if ($sreq->con_ini==$user->user_id)
                                            <span>As You are {{$sreq->relation}} of @if ($sreq->user1_id!=Auth::user()->user_id)
                                                {{$sreq->user1->family_user->name}}.
                                            @else
                                                {{$sreq->user2->family_user->name}}.
                                            @endif</span>
                                                @endif
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
