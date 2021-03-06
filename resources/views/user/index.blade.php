@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-md-10 col-md-offset-1">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">Hello, {{Auth::user()->name}}.</div>
    <div class="panel-body">
      <ul class="nav nav-tabs">
        <li class="active"><a href="/user/">Home</a></li>
        <li ><a href="/user/groups">My Group Activities</a></li>
        <li ><a href="/user/details">My Details</a></li>
        <li><a href="/user/notifications">My Notifications</a></li>
        <li><a href="/user/people">People</a></li>
        @if(Auth::user()->account_type == 1)
          <li><a href="/user/admin/">Admin Panel</a></li>
        @endif
      </ul>

      <div class="row "><br/>
                                            
                                            @if(!empty(Auth::user()->photo))
                                                <div class="col-md-3">
                                                    <img src="{{asset('images')}}/{{Auth::user()->photo}}" width="100%" height="195px" alt="profile" class="img-circle">
                                                </div>

                                            @elseif(!(Auth::user()->photo))

                                                @if(Auth::user()->gender == 'Female')
                                                <div class="col-md-3">
                                                    <img src="{{asset('images/female_avatar.png')}}" width="100%" height="195px" alt="profile" class="img-circle">
                                                </div>
                                                @else
                                                    <div class="col-md-3">
                                                    <img src="{{asset('images/male_avatar.png')}}" width="100%" height="195px" alt="profile" class="img-circle">
                                                </div>
                                                @endif

                                            @endif
                                            <div class="col-md-9">
                                              <div class="text-center">
                                                <h1>{{ Auth::user()->name }}</h1>
                                                <h4>Department: Not Assigned yet</h4>
                                                <h4>Group: Not Assigned yet</h4>
                                                <h4>Account status: Not approved yet.</h4>
                                              </div>
                                            </div>
                                        </div>
      
    </div>
    <div class="panel-footer"></div>
  </div>
</div>
</div>
@endsection