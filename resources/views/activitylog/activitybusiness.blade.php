@extends('layouts.main_lay')

@section('content')
<div class="fixed-sidebar left">
    <div class="menu-left">
        <ul class="left-menu">
            <li><a href="{{ route('mainscreenbusiness',['circle_id'=>$circle_id]) }}" title="Newsfeed Page"
                    data-toggle="tooltip" data-placement="right"><i class="far fa-newspaper" aria-hidden="true"
                    style="-webkit-text-fill-color:cornflowerblue"></i></a></li>
            <li><a href="{{ route('messagebusiness',['circle_id'=>$circle_id]) }}" title="Inbox" data-toggle="tooltip"
                    data-placement="right"><i class="fas fa-envelope" style="-webkit-text-fill-color:cornflowerblue"></i></a></li>
            <li><a href="{{ route('viewbusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                    title="View Connections" data-toggle="tooltip" data-placement="right"><i class="fas fa-users" style="-webkit-text-fill-color:cornflowerblue"></i></a>
            </li>
            <li><a href="{{ route('viewprofilebusiness',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}"
                title="View Profile" data-toggle="tooltip" data-placement="right"><i class="fas fa-user" style="-webkit-text-fill-color:cornflowerblue"></i></a>
            </li>
            <li><a href="{{ route('nearbyconnections',['circle_id'=>$circle_id]) }}"
                title="Nearby Connections" data-toggle="tooltip" data-placement="right"><i class="fas fa-street-view" style="-webkit-text-fill-color:cornflowerblue"></i></a>
            </li>
            <li><a href="{{ route('activitybusiness',['circle_id'=>$circle_id]) }}" title="Insights" data-toggle="tooltip"
                    data-placement="right"><i class="fas fa-chart-line" style="-webkit-text-fill-color:cornflowerblue"></i></a></li>
            <li><a href="{{ route('editinfobusiness',['circle_id'=>$circle_id]) }}" title="Edit Profile Info"
                    data-toggle="tooltip" data-placement="right"><i class="fas fa-user-edit" style="-webkit-text-fill-color:cornflowerblue"></i></a></li>    
            <li><a href="{{ route('main.settings',['circle_id'=>1]) }}" title="Main Setting" data-toggle="tooltip"
                    data-placement="right"><i class="fas fa-cogs" style="-webkit-text-fill-color:cornflowerblue"></i></a></li>
        </ul>
    </div>
</div><!-- left sidebar menu -->
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">Activity Log Business</h5>
                                    <div class="scroll-area">
                                        <div class="scrollbar-container">
                                            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                @if (count($activities)==0)
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in"><p>You have No Activities.</p></div>
                                                    </div>
                                                </div>
                                                @else

                                                @foreach ($activities as $activity)
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <p style="color:cornflowerblue;">{{$activity->content}}</p>
                                                            {{-- <p>XYZ shared a post of ABC...</p> --}}
                                                        <span class="vertical-timeline-element-date">{{$activity->updated_at}}</span></div>
                                                    </div>
                                                </div>

                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- sidebar -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
                    