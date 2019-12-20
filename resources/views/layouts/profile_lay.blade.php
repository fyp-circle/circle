@extends('layouts.main_lay')

@section('content')
<section>
    <div class="feature-photo">
        <figure><img src={{Auth::user()->cover_picture}} alt="User Cover Picture" width="304" height="228"> </figure>
        <div class="add-btn">
            {{-- <a href="#" title="" data-ripple="">Add Friend</a> --}}
        </div>
        <form class="edit-phto" action="{{ route('user.cover.picture.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
                <input type="file" name="image" class="form-control">
            </label>
            <button type="submit" class="btn btn-success">Save Cover Photo</button>
        </form>
        <div class="container-fluid" style="background-color: white">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src={{Auth::user()->profile_picture}} alt="User Profile Image" height="170" width="170">
                            <form class="edit-phto" action="{{ route('user.profile.picture.upload') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input type="file" name="image" class="form-control">
                                </label>

                                    <button type="submit" class="btn btn-success">Save DP</button>

                            </form>

                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5 style="-webkit-text-fill-color:black">{{Auth::user()->name}}</h5>

                                {{-- <span>Group Admin</span> --}}
                            </li>
                            <li>
                                <a class="" href="{{ url('viewprofile') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">time
                                    line</a>
                                <a class="" href="{{ url('viewphotos') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">Photos</a>
                                <a class="" href="{{ url('viewvideos') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">Videos</a>
                                <a class="" href="{{ url('viewfriends') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">Friends Circle</a>
                                <a class="" href="{{ url('viewabout') }}" title="" data-ripple="" style="-webkit-text-fill-color: black">About</a>
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
