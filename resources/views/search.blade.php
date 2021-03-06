@extends('layouts.main_lay')

@section('content')
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="container">
                            <div class="col-lg-12">
                                <div class="central-meta">
                                    <div class="frnds">
                                        @if(isset($details))
                                        <h4>The Search results for your query <b> {{ $query }} </b> are:</h4>
                                        <div class="tab-content">
                                            <div class="tab-pane active fade show " id="frends">
                                                <ul class="nearby-contct">
                                                    @foreach($details as $searchuser)
                                                    <li>
                                                        <div class="nearly-pepls">
                                                            <figure>
                                                                <a href="{{ route('viewprofile',['id'=>$searchuser->user_id,'circle_id'=>1]) }}" title=""><img
                                                                src="{{$searchuser->profile_picture}}"
                                                                        alt=""></a>
                                                            </figure>

                                                            <div class="pepl-info">
                                                                <h4><a href="{{ route('viewprofile',['id'=>$searchuser->user_id,'circle_id'=>1]) }}" title="">{{$searchuser->name}}</a>
                                                                </h4>
                                                                <span>{{$searchuser->country}}</span>

                                                                @if ($searchuser->family_user != null)
                                                                    @if (Auth::user()->family_user == null)
                                                                    <a href="{{ route('viewprofilefamily',['id'=>$searchuser->user_id,'circle_id'=>2]) }}" style="pointer-events: none; cursor: default; background-color: red;" title="" class="add-butn more-action" data-ripple="">Family</a>
                                                                    @else
                                                                    <a href="{{ route('viewprofilefamily',['id'=>$searchuser->user_id,'circle_id'=>2]) }}" title="" class="add-butn more-action" style = "background-color: red" data-ripple="">Family</a>
                                                                    @endif
                                                                @endif

                                                                @if ($searchuser->business_user != null)
                                                                    @if (Auth::user()->business_user == null)
                                                                    <a href="{{ route('viewprofilebusiness',['id'=>$searchuser->user_id,'circle_id'=>3]) }}" style="pointer-events: none; cursor: default;"  title="" class="add-butn" data-ripple="">Business</a>
                                                                    @else
                                                                    <a href="{{ route('viewprofilebusiness',['id'=>$searchuser->user_id,'circle_id'=>3]) }}" title="" class="add-butn" data-ripple="">Business</a>
                                                                    @endif

                                                                @endif

                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @endif

                                        <!-- Tab panes -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
