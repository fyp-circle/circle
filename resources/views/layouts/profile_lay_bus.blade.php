@extends('layouts.main_lay')

@section('content')
<section>
    <div class="feature-photo">
        <figure><img src="/{{$user->business_user['cover_picture']}}" alt="User Cover Picture" style="height: 350px; width: 100%; object-fit: cover;"> </figure>
        @if ($c==0)
            {{-- Add --}}
            <div class="add-btn" style="bottom:25%; right:4%;">
                <a id = "AddConnectionButton" href="#" title="" data-ripple="" style="background-color: black; -webkit-text-fill-color: white;">Add Connection</a>
            </div>
            <script type="text/javascript">
                document.getElementById("AddConnectionButton").onclick = function () {
                    var profile_id = "{{ $profile_id}}";
                    location.href = "/requestsentbusiness/" + profile_id;
                };
            </script>
        @else
            @if ($c==1)
                {{-- Connected --}}
                <div class="add-btn" style="bottom:25%; right:4%;">
                    <a href="#" title="" data-ripple="" style="background-color: transparent; -webkit-text-fill-color: white;">Connected <i class="ti-user"></i></a>
                    <a id = "DisconnectButton" href="#" title="" data-ripple="" style="background-color: red; -webkit-text-fill-color: white;">Disconnect <i class="ti-close"></i></a>
                    <script type="text/javascript">
                        document.getElementById("DisconnectButton").onclick = function () {
                            var profile_id = "{{ $profile_id }}";
                            location.href = "/disconnect/" + profile_id+"/{{Auth::user()->user_id}}";
                        };

                    </script>
                </div>
            @else
                @if ($c ==2)
                    {{-- Myself --}}
                @else
                    @if ($c==3)
                        {{-- Accept or Reject --}}
                        <div class="add-btn" style="bottom:25%; right:4%;">
                            <a id = "AcceptRequestButton" href="#" title="" data-ripple="" style="background-color: white; -webkit-text-fill-color: black;">Accept Request</a>
                            <a id = "CancelRequestButton" href="#" title="" data-ripple="" style="background-color: red; -webkit-text-fill-color: white;">Cancel Request</a>
                        </div>
                        <script type="text/javascript">
                            document.getElementById("CancelRequestButton").onclick = function () {
                                var profile_id = "{{ $profile_id }}";
                                location.href = "/cancelrequestbusiness/" + profile_id+"/{{Auth::user()->user_id}}";
                            };

                        </script>
                        <script type="text/javascript">
                            document.getElementById("AcceptRequestButton").onclick = function () {
                                var profile_id = "{{ $profile_id }}";
                                location.href = "/acceptrequestbusiness/"+ profile_id+"/{{Auth::user()->user_id}}";
                            };

                        </script>
                    @else
                        @if ($c==4)
                            <div class="add-btn" style="bottom:25%; right:4%;">
                                <a href="#" title="" data-ripple="" style="background-color: transparent; -webkit-text-fill-color: white;">Request Already Sent <i class="ti-timer"></i></a>
                            </div>
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
                            <img src="/{{$user->business_user['profile_picture']}}" alt="User Profile Image"
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
                                <h5 style="-webkit-text-fill-color:cornflowerblue">{{$user->business_user['name']}}</h5>

                                {{-- <span>Group Admin</span> --}}
                            </li>
                            <li>
                                <a class="" href="{{ route('viewprofilebusiness',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">time
                                    line</a>
                                <a class="" href="{{ route('viewphotosbusiness',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Photos</a>
                                <a class="" href="{{ route('viewvideosbusiness',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Videos</a>
                                <a class="" href="{{ route('viewbusiness',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Business Circle</a>
                                <a class="" href="{{ route('viewaboutbusiness',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
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
