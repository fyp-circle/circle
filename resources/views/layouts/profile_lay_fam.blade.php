@extends('layouts.main_lay')

@section('content')
<section>
    <div class="feature-photo">
        <figure><img src={{Auth::user()->cover_picture}} alt="User Cover Picture" style="height: 350px; width: 1366px; object-fit: cover;"> </figure>
        <div class="add-btn">
            {{-- <a href="#" title="" data-ripple="">Add Friend</a> --}}
        </div>
        <div class="container-fluid" style="background-color: white">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar" style="width: 170px; height: 170px; margin-top:-6.9rem">
                        <figure>
                            <img src={{Auth::user()->profile_picture}} alt="User Profile Image"
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
                                <h5 style="-webkit-text-fill-color:red">{{Auth::user()->name}}</h5>

                                {{-- <span>Group Admin</span> --}}
                            </li>
                            <li>
                                <a class="" href="{{ url('viewprofilefamily') }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: red">time
                                    line</a>
                                <a class="" href="{{ url('viewphotosfamily') }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: red">Photos</a>
                                <a class="" href="{{ url('viewvideosfamily') }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: red">Videos</a>
                                <a class="" href="{{ url('viewfamily') }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: red">Family Circle</a>
                                <a class="" href="{{ url('viewaboutfamily') }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: red">About</a>
                                <a class="" href="" title="" data-ripple=""
                                    style="-webkit-text-fill-color: red">More</a>
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
