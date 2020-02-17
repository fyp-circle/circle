@extends('layouts.main_lay')

@section('content')
<section>
    <div class="feature-photo">
        <figure><img src={{Auth::user()->business_user['cover_picture']}} alt="User Cover Picture"
                style="height: 350px; width: 1366px; object-fit: cover;"> </figure>
                @if ($c==0)
                <div class="add-btn">
                    <button id="AddFriendButton">Add Friend</button>
                    <a href="#" title="" data-ripple="">Add Connection</a>
                </div>

                <script type="text/javascript">
                    document.getElementById("AddFriendButton").onclick = function () {
                        var profile_id = "{{ $profile_id}}";
                        location.href = "/requestsent/" + profile_id;
                    };

                </script>
            @else
                @if ($c==1)
                    {{-- <button>You are already Friends.</button> --}}
                    <div class="add-btn">
                        <button>Connected</button>
                        <a href="#" title="" data-ripple="">Connected</a>
                    </div>
                @else
                    @if ($c ==2)
                        <div class="add-btn">
                            <button>Myself</button>
                            <a href="#" title="" data-ripple="">Myself</a>
                        </div>
                        {{-- <button>abey ye to mein hi hun.</button> --}}
                    @else
                        @if ($c==3)
                            <div class="add-btn">
                                <button id="AcceptRequestButton" class="submit-button">Accept Request</button>
                                <button id="CancelRequestButton" class="submit-button">Cancel request</button>
                                <a href="#" title="" data-ripple="">Myself</a>
                            </div>
                            <script type="text/javascript">
                                document.getElementById("CancelRequestButton").onclick = function () {
                                    var profile_id = "{{ $profile_id }}";
                                    location.href = "/cancelrequest/" + profile_id;
                                };

                            </script>
                            <script type="text/javascript">
                                document.getElementById("AcceptRequestButton").onclick = function () {
                                    var profile_id = "{{ $profile_id }}";
                                    location.href = "/acceptrequest/" + profile_id;
                                };

                            </script>
                        @else
                            @if ($c==4)
                                <div class="add-btn">
                                    <button>Request Already Sent</button>
                                    <a href="#" title="" data-ripple="">Sent</a>
                                </div>
                                {{-- <button>Request Already Sent</button> --}}
                            @else
                            @endif
                        @endif
                    @endif
                @endif
            @endif
        <div class="container-fluid" style="background-color: white">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar" style="width: 170px; height: 170px; margin-top:-6.9rem">
                        <figure>
                            <img src={{Auth::user()->business_user['profile_picture']}} alt="User Profile Image"
                                style="height:170px; width: 170px;object-fit: cover;">
                            {{-- <form class="edit-phto" action="{{ route('user.profile.picture.upload') }}"
                            method="POST" enctype="multipart/form-data" >
                            @csrf
                            <i class="fa fa-camera-retro"></i>
                            <label class="fileContainer">
                                Edit Display Photo
                                <input type="file" name="image" class="form-control">
                            </label>

                            <button type="submit" class="btn btn-success">Save DP</button>

                            </form> --}}

                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5 style="-webkit-text-fill-color:cornflowerblue">{{Auth::user()->name}}</h5>

                                {{-- <span>Group Admin</span> --}}
                            </li>
                            <li>
                                <a class="" href="{{ route('viewprofilebusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">time
                                    line</a>
                                <a class="" href="{{ route('viewphotosbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Photos</a>
                                <a class="" href="{{ route('viewvideosbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Videos</a>
                                <a class="" href="{{ route('viewbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Business Circle</a>
                                <a class="" href="{{ route('viewaboutbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">About</a>
                                <a class="" href="" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- top area -->
<section>
    <div class="gap gray-bg">
        <div class="container">

            @yield('profilecontent')
        </div>
    </div>
</section>

@endsection
