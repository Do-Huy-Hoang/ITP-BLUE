@extends('Components.customer.index')
@section('title')
<title>Profile</title>
@endsection
@section('Css')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection
@section('load')
<div id="preloder">
    <div class="loader"></div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @include('Customer.Profile.information')
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
            </div>
        </div>
    </div>
</div>
@endsection