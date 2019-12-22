@extends('layouts.main_lay')

@section('content')
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">Activity Log</h5>
                                    <div class="scroll-area">
                                        <div class="scrollbar-container">
                                            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in"><p>You commented on XYZ's post</p>
                                                            <p>XYZ shared a post of ABC...</p><span class="vertical-timeline-element-date">10:30 PM</span></div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in"><p>You liked on XYZ's post</p>
                                                            <p>Yet another one, at..</p><span class="vertical-timeline-element-date">12:25 PM</span></div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in"><p>You sent a friend request to CBA</p>
                                                            <p></p><span
                                                                    class="vertical-timeline-element-date">15:00 PM</span></div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in"><p>You commented on XYZ's post</p>
                                                            <p>XYZ shared a post of ABC...</p><span class="vertical-timeline-element-date">10:30 PM</span></div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in"><p>You liked on XYZ's post</p>
                                                            <p>Yet another one, at..</p><span class="vertical-timeline-element-date">12:25 PM</span></div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in"><p>You sent a friend request to CBA</p>
                                                            <p></p><span
                                                                    class="vertical-timeline-element-date">15:00 PM</span></div>
                                                    </div>
                                                </div>
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

@endsection
