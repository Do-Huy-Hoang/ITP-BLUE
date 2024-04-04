@extends('Components.customer.index')
@section('title')
<title>Product</title>
@endsection

@section('Css')
<link rel="stylesheet" href="{{asset('css/order.css')}}">
@endsection

@section('Js')
<script src="{{asset('js/shopping_cart.js')}}"></script>
<script src="{{asset('js/google.api.js')}}"></script>
@endsection

@section('content')
<section>
    <div class="container">
        <form method="post" action="{{ route('order-create')}}">
            @csrf
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card wish-list pb-1">
                        <div class="card-body">
                            <h5 class="mb-2">Billing details</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control @error('ord_user_name') is-invalid @enderror" id="ord_user_name" name="ord_user_name" placeholder="Enter name" aria-label="Username" value="@if(Auth::check() && old('ord_user_name') == null){{Auth::user()->us_name}}@else{{old('ord_user_name')}}@endif">
                            </div>
                            @error('ord_user_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control @error('ord_phone_no') is-invalid @enderror" id="ord_phone_no" name="ord_phone_no" placeholder="Enter phone number" aria-label="PhoneNumber"  value="@if(Auth::check()  && old('ord_phone_no') == null){{Auth::user()->us_phone}}@else{{old('ord_phone_no')}}@endif">
                            </div>
                            @error('ord_phone_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address" id="address" name="address" aria-label="Address" autocomplete="off" data-old="{{old('address')}}" value="@if(Auth::check() && old('address') == null){{Auth::user()->us_address}}@else{{old('address')}}@endif">
                            </div>
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label >Note</label>
                                <textarea  class="form-control" rows="6" cols="60" id="ord_note" name="ord_note" placeholder="Enter note"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pay ment</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ord_payment" id="ord_payment" value="Payment in cash" checked>
                                    <label class="form-check-label">
                                        Payment in cash
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ord_payment" id="ord_payment" value="Online payment">
                                    <label class="form-check-label">
                                        Online payment
                                    </label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($carts as $id=> $cartItem)
                                        <tr>
                                            <td>
                                                <img class="order-img" src="data:image/jpeg;base64,{{base64_encode($cartItem['pro_img'])}}" alt="Sample">
                                            </td>
                                            <td>
                                                <div class="order-name">
                                                    {{$cartItem['pro_name']}}
                                                </div>
                                            </td>
                                            <td>{{number_format($cartItem['pro_price'])}} $</td>
                                            <td>{{$cartItem['pro_quantity']}}</td>
                                            <td>
                                                <div class="total">
                                                    {{$cartItem['pro_price']*$cartItem['pro_quantity']}} $
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-3">The total amount of</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Temporary amount
                                    <span>{{$totalAll}}$</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span id="shipp">0$</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>The total amount of</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong id="total" data-total={{$totalAll}}>{{$totalAll}}$</strong></span>
                                </li>
                            </ul>
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Make purchase
                            </button>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Add a discount code (optional)
                                <span><i class="fas fa-chevron-down pt-1"></i></span>
                            </a>

                            <div class="collapse" id="collapseExample">
                                <div class="mt-3">
                                    <div class="md-form md-outline mb-0">
                                        <input type="text" id="discount-code" class="form-control font-weight-light" placeholder="Enter discount code">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection