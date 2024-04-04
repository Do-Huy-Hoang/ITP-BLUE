@extends('Components.customer.index')
@section('title')
    <title>Profile</title>
@endsection
@section('Css')
    {{-- information css --}}
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    {{-- order css --}}
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">

@endsection


@section('Js')
{{-- Information js --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9pBamucRUF_6MVrnxyeBZiRPmt5G7B0A&libraries=places">
    </script>
    <script>
        function initializeAutocomplete() {
            var input = document.getElementById('us_address');
            var autocomplete = new google.maps.places.Autocomplete(input);
        }
        google.maps.event.addDomListener(window, 'load', initializeAutocomplete);
    </script>
    {{-- order js --}}
    <script>
        $(document).ready(function() {

            $('.toggle-btn').click(function() {
                $(this).toggleClass('active').siblings().removeClass('active');
            });

        });
    </script>
    {{--order detail js --}}
<script>
    $(document).ready(function(){
        $('.launch').click(function(){
            var orderId = $(this).data('orderid');
            $('#exampleModalLong').attr('data-target', '#exampleModalLong_' + orderId);
            $('#exampleModalLong').modal('show'); // Show the modal
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('.launch').click(function(){
            var orderId = $(this).data('orderid'); // Use data-orderid
            $('#exampleModalLong').attr('data-target', '#exampleModalLong_' + orderId);
        });
    });
</script>
    
@endsection
@section('load')
@if ($errors->any() == false && session('error') == false)
<div id="preloder">
    <div class="loader"></div>
</div>
@endif
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Your Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                            aria-controls="messages" aria-selected="false">Voucher</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        @include('Customer.Profile.information')
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @include('Customer.Profile.profile_order')
                    </div>
                    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
                </div>
            </div>
        </div>
    </div>
@endsection