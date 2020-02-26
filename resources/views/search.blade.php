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
                                                                <a href="" title=""><img
                                                                src="{{$searchuser->profile_picture}}"
                                                                        alt=""></a>
                                                            </figure>

                                                            <div class="pepl-info">
                                                                <h4><a href="" title="">{{$searchuser->name}}</a>
                                                                </h4>
                                                                <span>{{$searchuser->country}}</span>
                                                                <a href="{{ route('viewprofile',['id'=>$searchuser->user_id,'circle_id'=>1]) }}" title="" class="add-butn more-action" data-ripple="">Friend</a>

                                                                @if ($searchuser->family_user != null)
                                                                <a href="{{ route('viewprofilefamily',['id'=>$searchuser->user_id,'circle_id'=>2]) }}" title="" class="add-butn more-action" style = "background-color: red" data-ripple="">Family</a>
                                                                @endif

                                                                @if ($searchuser->business_user != null)
                                                                <a href="{{ route('viewprofilebusiness',['id'=>$searchuser->user_id,'circle_id'=>3]) }}" title="" class="add-butn" data-ripple="">Business</a>
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
