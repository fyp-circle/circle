@extends('layouts.main_lay')

@section('content')
<section>
    <div class="feature-photo">
        <figure><img src={{$user->cover_picture}} alt="User Cover Picture" style = "height: 350px; width: 1366px; object-fit: cover;"> </figure>
        <div class="add-btn">
            {{-- <a href="#" title="" data-ripple="">Add Friend</a> --}}
        </div>
        {{-- <form class="edit-phto" action="{{ route('user.cover.picture.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
                <input type="file" name="image" class="form-control">
            </label>
            <button type="submit" class="btn btn-success">Save Cover Photo</button>
        </form> --}}
        <div class="container-fluid" style="background-color: white">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar" style="width: 170px; height: 170px; margin-top:-6.9rem">
                        <figure>
                            <img src={{$user->profile_picture}} alt="User Profile Image" style ="height:170px; width: 170px;object-fit: cover;">
                            {{-- <form class="edit-phto" action="{{ route('user.profile.picture.upload') }}" method="POST" enctype="multipart/form-data" >
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
                @if ($c==0)
                <button>Add Friend</button>
                @else
                    @if ($c==1)
                    <button>You are already Friends.</button>
                    @else
                        @if ($c==2)
                            <button>abey ye to mein hi hun.</button>
                        @else
                            @if ($c==3)
                                <button>Pending Request.</button>
                            @else

                            @endif
                        @endif
                    @endif
                @endif

                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5 style="-webkit-text-fill-color:black">{{$user->name}}</h5>

                                {{-- <span>Group Admin</span> --}}
                            </li>
                            <li>
                                <a class="" href="{{ url('viewprofile') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">time
                                    line</a>
                                <a class="" href="{{ url('viewphotos') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">Photos</a>
                                <a class="" href="{{ url('viewvideos') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">Videos</a>
                                <a class="" href="{{ url('viewfriends') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">Friends Circle</a>
                                <a class="" href="{{ url('viewabout') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">About</a>
                                <a class="" href="" title="" data-ripple="" style="-webkit-text-fill-color: black">More</a>
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
