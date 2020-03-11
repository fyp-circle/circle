@extends('layouts.main_lay')

@section('content')
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="central-meta">
                                <div class="editing-interest">
                                    <h5 class="f-title"><i class="ti-bell"></i>All Notifications </h5>
                                    <div class="notification-box">
                                        <ul>
                                            @foreach ($notifications as $i)
                                            <li>
                                                @switch($i->circle_id)
                                                    @case(1)
                                                    <a href="{{ route('viewprofile',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                                        @break
                                                    @case(2)
                                                    <a href="{{ route('viewprofilefamily',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                                        @break
                                                    @case(3)
                                                    <a href="{{ route('viewprofilebusines',['id'=>$i->sender,'circle_id'=>$i->circle_id]) }}" title="">
                                                        @break
                                                    @default
                                                    <a href="#" title="">
                                                @endswitch
                                                <figure><img src="/{{$i->sender['profile_picture']}}" alt=""></figure>
                                                <div class="notifi-meta">
                                                    <p>{{$i->content}}</p>
                                                    <span>{{$i->created_at}}</span>
                                                    @if ($i->circle_id==1)
                                                        <span class="tag blue" style="background-color:black;-webkit-text-fill-color: white">Friend</span>
                                                    @else
                                                        @if ($i->circle_id==3)
                                                        <span class="tag blue" style="background-color:cornflowerblue;-webkit-text-fill-color: white">Business</span>

                                                        @else
                                                        <span class="tag blue" style="background-color:red;-webkit-text-fill-color: white">Family</span>
                                                        @endif
                                                    @endif

                                                </div>
                                            </a>
                                                <i class="del fa fa-close"></i>

                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- centerl meta -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
