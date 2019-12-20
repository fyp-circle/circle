@extends('layouts.main_lay')

@section('content')
<section>
    <div class="feature-photo">
        <figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
        <div class="add-btn">
            {{-- <a href="#" title="" data-ripple="">Add Friend</a> --}}
        </div>
        <form class="edit-phto">
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
                <input type="file" />
            </label>
        </form>
        <div class="container-fluid" style="background-color: white">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="images/resources/user-avatar.jpg" alt="">
                            <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input type="file" />
                                </label>
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
