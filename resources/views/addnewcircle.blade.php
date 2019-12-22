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
                                <div class="editing-info">
                                    <h5 class="f-title"><i class="ti-info-alt"></i>Add New Circle</h5>

                                    <form method="post" action="{{ route('user.create.circle') }}" >
                                        @csrf
                                            <div class="dob">
                                                    <div class="form-group">
                                                        <select  required name="circle_type">
                                                            <option value="" disabled selected>Choose Circle Type</option>
                                                            @if (Auth::user()->family_user_id==null)
                                                                <option value = "Family">Family</option>
                                                            @endif
                                                            @if (Auth::user()->business_user_id==null)
                                                                <option value = "Business">Business</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                        <div class="form-group half">
                                        <input type="text" id="input" required="required" name="name" value= "{{Auth::user()->name}}" />
                                            <label class="control-label" for="input">Full Name</label><i
                                                class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" required="required" name="email" value= "{{Auth::user()->email}}" />
                                            <label class="control-label" for="input">Email@</label><i
                                                class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="required" name="phone" value= "{{Auth::user()->phone}}"/>
                                            <label class="control-label" for="input">Phone No.</label><i
                                                class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="4" id="textarea" required="required" name="about_me" >{{Auth::user()->about_me}}</textarea>
                                            <label class="control-label" for="textarea">About Me</label><i
                                                class="mtrl-select"></i>
                                        </div>
                                        <div class="submit-btns">
                                            <button type="button" class="mtr-btn" ><span>Cancel</span></button>
                                            <button type="submit" class="mtr-btn"><span>Create Circle</span></button>
                                        </div>
                                    </form>
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
