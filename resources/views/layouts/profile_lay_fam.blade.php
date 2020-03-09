@extends('layouts.main_lay')

@section('content')
<section>
    <div class="feature-photo">
        @if ($c==1 || $c==2 )
            <figure><img src="/{{$user->family_user->cover_picture}}" alt="User Cover Picture" style="height: 350px; width: 1100%; object-fit: cover;"> </figure>
        @else
        <figure><img src="/{{$user->family_user->cover_picture}}" alt="User Cover Picture" style="height: 350px; width: 1100%; object-fit: cover;filter: blur(7px);"> </figure>

        @endif

        @if ($c==0)
            {{-- Add --}}
            <div class="add-btn" style="bottom:25%; right:4%;">
                <a id = "AddConnectionButton" href="#" title="" data-ripple="" style="background-color: black; -webkit-text-fill-color: white;">Add into Family</a>
            </div>
        @else
            @if ($c==1)
                {{-- Connected --}}
                <div class="add-btn" style="bottom:25%; right:4%;">
                    <a href="#" title="" data-ripple="" style="background-color: transparent; -webkit-text-fill-color: white;">Family <i class="ti-user"></i></a>
                </div>
            @else
                @if ($c ==2)
                    {{-- Myself --}}
                @else
                    @if ($c==3)
                        {{-- Accept or Reject --}}

                    @else
                        @if ($c==4)
                            {{-- Request Sent --}}

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
                            @if ($c==1 || $c==2 )
                            <img src="/{{$user->family_user->profile_picture}}" alt="User Profile Image"
                            style="height:170px; width: 170px;object-fit: cover;">
                            @else
                            <img src="/{{$user->family_user->profile_picture}}" alt="User Profile Image"
                            style="height:170px; width: 170px;object-fit: cover;filter: blur(7px);">

                            @endif

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
                                <h5 style="-webkit-text-fill-color:red">{{$user->family_user->name}}</h5>

                                {{-- <span>Group Admin</span> --}}
                            </li>
                            <li>
                                <a class="" href="{{ route('viewprofilefamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">time
                                    line</a>
                                <a class="" href="{{ route('viewphotosfamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Photos</a>
                                <a class="" href="{{ route('viewvideosfamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Videos</a>
                                <a class="" href="{{ route('viewfamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Family Circle</a>
                                <a class="" href="{{ route('viewaboutfamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
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
