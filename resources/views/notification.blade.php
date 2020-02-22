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
                                                <figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
                                                <div class="notifi-meta">
                                                    <p>{{$i->content}}</p>
                                                    <span>{{$i->created_at}}</span>
                                                    {{-- @if ()

                                                    @endif --}}
                                                    <span class="tag blue" style="background-color:red;-webkit-text-fill-color: white">Family</span>
                                                </div>
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
