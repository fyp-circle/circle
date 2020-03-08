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
                                                    <div class="vertical-timeline-element-content bounce-in"><p>{{$activity->content}}</p>
                                                            {{-- <p>XYZ shared a post of ABC...</p> --}}
                                                            <span class="vertical-timeline-element-date">{{$activity->updated_at}}</span></div>
                                                    </div>
                                                </div>

                                                @endforeach
                                                @endif
                                                {{-- <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in"><p>You commented on XYZ's post</p>
                                                            <p>XYZ shared a post of ABC...</p><span class="vertical-timeline-element-date">10:30 PM</span></div>
                                                    </div>
                                                </div> --}}
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
