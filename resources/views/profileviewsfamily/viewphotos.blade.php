@extends('layouts.profile_lay_fam')

@section('profilecontent')
@if ($c==1 || $c == 2)
<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
            <div class="col-lg-3">
                <aside class="sidebar static">
                    <div class="widget stick-widget">
                        <h4 class="widget-title">Shortcuts</h4>
                        <ul class="naves">
                            <li>
                                <i class="fas fa-stream"></i>
                                <a href="{{ route('viewprofilefamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">Timeline</a>
                            </li>
                            <li>
                                <i class="far fa-images"></i>
                                <a href="{{ route('viewphotosfamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Photos</a>
                            </li>
                            <li>
                                <i class="fas fa-film"></i>
                                <a href="{{ route('viewvideosfamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Videos</a>
                            </li>
                            @if (Auth::user()->user_id==$profile_id)
                            <li>
                                <i class="fas fa-users"></i>
                                <a href="{{ route('viewfamily',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="">Family Circle</a>
                            </li>
                            @endif
                            <li>
                                <i class="fas fa-info-circle"></i>
                                <a href="{{ route('viewaboutfamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">About</a>
                            </li>
                        </ul>
                    </div><!-- Shortcuts -->

                </aside>
            </div><!-- sidebar -->
            <div class="col-md-9">
                <div class="central-meta">
                    @if (count($posts)==0)
                        No Photos Found.
                    @else
                    <ul class="photos">

                        @foreach ($posts as $post)
                        @if ($post->picture!=null)
                        <li>
                            <a class="strip" href="#" title="" data-strip-group="mygroup"
                                data-strip-group-options="loop: false">
                                <img src="{{$post->picture}}" alt=""></a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                    @endif
                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                </div><!-- photos -->
            </div><!-- centerl meta -->
        </div>
    </div>
</div>

@endif
@endsection
