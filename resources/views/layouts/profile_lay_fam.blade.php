@extends('layouts.main_lay')

@section('content')
<section>
    <div class="feature-photo">
        @if ($c==1 || $c==2 )
            <figure><img src="{{$user->family_user->cover_picture}}" alt="User Cover Picture" style="height: 350px; width: 1100%; object-fit: cover;"> </figure>
        @else
        <script language="JavaScript" Type="text/javascript">
            <!--
            function popupMsg(theMsg) {
            alert(theMsg);
            }
            //-->
        </script>
        <figure><img src="{{$user->family_user->cover_picture}}" alt="User Cover Picture" style="height: 350px; width: 1100%; object-fit: cover;filter: blur(7px);"  onMouseDown="popupMsg('You can not Download the Image Sorry.')"> </figure>

        @endif

        @if ($c==0)
            {{-- Add --}}
            <div class="add-btn" style="bottom:25%; right:4%;">
                <a id = "AddFamilyButton" href="#" title="" data-ripple="" style="background-color: black; -webkit-text-fill-color: white;" data-toggle="modal" data-target="#add-family-modal">Add into Family</a>

            </div>
        @else
            @if ($c==1)
                {{-- Connected --}}
                <div class="add-btn" style="bottom:35%; right:7%;">
                    @if ($con[0]->con_ini== Auth::user()->user_id)
                        <a href="" title="" data-ripple="" style="background-color: white; -webkit-text-fill-color: black;pointer-events: none; cursor: default;">You are {{$user->family_user->name}}'s {{$con[0]->relation}}. </a>
                    @else
                        <a href="" title="" data-ripple="" style="background-color: white; -webkit-text-fill-color: black;pointer-events: none; cursor: default;">{{$user->family_user->name}} is your {{$con[0]->relation}}. </a>
                    @endif
                </div>
                <div class="add-btn" style="bottom:25%; right:4%;">
                    <a href="#" title="" data-ripple="" style="background-color: transparent; -webkit-text-fill-color: white;">Family Member <i class="ti-user"></i></a>
                    <a id = "RemoveButton" href="#" title="" data-ripple="" style="background-color: red; -webkit-text-fill-color: white;">Remove from Family. <i class="ti-close"></i></a>
                    <script type="text/javascript">
                        document.getElementById("RemoveButton").onclick = function () {
                            var profile_id = "{{ $profile_id }}";
                            location.href = "/removefromfamily/" + profile_id+"/{{Auth::user()->user_id}}";
                        };

                    </script>
                </div>
            @else
                @if ($c ==2)
                    {{-- Myself --}}
                @else
                    @if ($c==3)
                    <div class="add-btn" style="bottom:35%; right:7%;">
                        <a href="" title="" data-ripple="" style="background-color: white; -webkit-text-fill-color: black;pointer-events: none; cursor: default;">{{$user->family_user->name}} is your {{$con[0]->relation}} ? </a>
                    </div>
                        {{-- Accept or Reject --}}
                        <div class="add-btn" style="bottom:25%; right:4%;">

                            <a id = "acceptfamilybutton" href="#" title="" data-ripple="" style="background-color: white; -webkit-text-fill-color: black;">Accept Request</a>
                            <a id = "cancelfamilybutton" href="#" title="" data-ripple="" style="background-color: red; -webkit-text-fill-color: white;">Cancel Request</a>

                            <script type="text/javascript">
                                document.getElementById("cancelfamilybutton").onclick = function () {
                                    var profile_id = "{{ $profile_id }}";
                                    location.href = "/cancelrequestfamily/" + profile_id+"/{{Auth::user()->user_id}}";
                                };

                            </script>

                            <script type="text/javascript">
                                document.getElementById("acceptfamilybutton").onclick = function () {
                                    var profile_id = "{{ $profile_id }}";
                                    location.href = "/acceptrequestfamily/"+ profile_id+"/{{Auth::user()->user_id}}";
                                };

                            </script>
                        </div>
                    @else
                        @if ($c==4)
                            <div class="add-btn" style="bottom:35%; right:7%;">
                                <a href="" title="" data-ripple="" style="background-color: white; -webkit-text-fill-color: black;pointer-events: none; cursor: default;">You are {{$user->family_user->name}}'s {{$con[0]->relation}}. </a>
                            </div>
                            {{-- Request Sent --}}
                            <div class="add-btn" style="bottom:25%; right:4%;">
                                <a href="#" title="" data-ripple="" style="background-color: transparent; -webkit-text-fill-color: white;">Request Already Sent <i class="ti-timer"></i></a>
                                <a id = "FamilyCancelRequestButton1" href="#" title="" data-ripple="" style="background-color: red; -webkit-text-fill-color: white;">Cancel Request</a>
                                <script type="text/javascript">
                                    document.getElementById("FamilyCancelRequestButton1").onclick = function () {
                                        var profile_id = "{{ $profile_id }}";
                                        location.href = "/cancelrequestfamily/" + profile_id+"/{{Auth::user()->user_id}}";
                                    };

                                </script>
                            </div>
                        @else
                        @endif
                    @endif
                @endif
            @endif
        @endif
        <div class="container-fluid" style="background-color: white">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar" style="width: 170px; height: 170px; margin-top:-6.9rem">
                        <figure>
                            @if ($c==1 || $c==2 )
                            <img src="{{$user->family_user->profile_picture}}" alt="User Profile Image"
                            style="height:170px; width: 170px;object-fit: cover;">
                            @else
                            <img src="{{$user->family_user->profile_picture}}" alt="User Profile Image"
                            style="height:170px; width: 170px;object-fit: cover;filter: blur(7px);" onMouseDown="popupMsg('You can not Download the Image Sorry.')">

                            @endif

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
                                <h5 style="-webkit-text-fill-color:red">{{$user->family_user->name}}</h5>

                                {{-- <span>Group Admin</span> --}}
                            </li>
                            @if ($c==2 || $c==1)
                            <li>
                                <a class="" href="{{ route('viewprofilefamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">time
                                    line</a>
                                <a class="" href="{{ route('viewphotosfamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Photos</a>
                                <a class="" href="{{ route('viewvideosfamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">Videos</a>
                                    @if (Auth::user()->user_id==$profile_id)
                                    <a class="" href="{{ route('viewfamily',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                        style="-webkit-text-fill-color: black">My Family Circle</a>
                                    @endif
                                <a class="" href="{{ route('viewaboutfamily',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">About</a>
                                {{-- <a class="" href="" title="" data-ripple=""
                                    style="-webkit-text-fill-color: black">More</a> --}}
                            </li>
                            @endif
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


<div class="modal fade" id="add-family-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
                <strong>Add Relation</strong>
          <a class="close" data-dismiss="modal">×</a>

        </div>
        <form method="POST" action="{{ route('add.into.family',['id'=>$user->user_id,'circle_id'=>$circle_id]) }}" enctype="multipart/form-data" id="addFamilyForm" name="addplan" role="form">
            @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="name">You are {{$user->family_user->name}}'s : (Mention Relation) </label>
              <select name="relation" required>
                <option value="" disabled selected>Select Relation Name</option>
                {{-- <option value={{Auth::user()->day}} selected> {{Auth::user()->day}} </option> --}}
                <option value="Mother">Mother</option>
                <option value="Father">Father</option>
                <option value="Brother">Brother</option>
                <option value="Sister">Sister</option>
                <option value="Son">Son</option>
                <option value="Daughter">Daughter</option>
                <option value="Uncle (Paternal Uncle)">Uncle (Paternal Uncle)</option>
                <option value="Aunt (Paternal Aunt)">Aunt (Paternal Aunt)</option>
                <option value="Uncle (Maternal Uncle)">Uncle (Maternal Uncle)</option>
                <option value="Aunt (Maternal Aunt)">Aunt (Maternal Aunt)</option>
                <option value="Daughter-in-law">Daughter-in-law</option>
                <option value="Son-in-law">Son-in-law</option>
                <option value="Brother-in-law">Brother-in-law</option>
                <option value="Brother-in-law">Brother-in-law</option>
                <option value="Sister-in-law">Sister-in-law</option>
                <option value="Father-in-law">Father-in-law</option>
                <option value="Mother-in-law">Mother-in-law</option>
                <option value="Nephew">	Nephew</option>
                <option value="Niece">Niece</option>
                <option value="Cousin">Cousin</option>
                <option value="Nephew">Nephew</option>
                <option value="Grandfather">Grandfather</option>
                <option value="Grandmother">Grandmother</option>
                <option value="Great Grandmother">Great Grandmother</option>
                <option value="Great Grandfather">Great Grandfather</option>
            </select>
            </div>
            {{-- <div class="form-group">
              <label for="amount">Amount per Month</label>
              <input type="number" required name="amount" class="form-control">
            </div> --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success" id="submit">Sent Request</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- {{ route('admin.createPlan') }} --}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection
