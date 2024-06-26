@extends('Components.customer.index')
@section('title')
<title>Product</title>
@endsection
@section('Css')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection
@section('Js')
<script src="{{asset('js/shopping_cart.js')}}"></script>
@endsection
@section('content')
<section class="delete_cart_url">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 update_cart_url">
                <!-- main -->
                <div class="card wish-list mb-3 ">
                    <div class="card-body">
                        <h5 class="mb-4">Cart (<span>2</span> items)</h5>
                        @if($carts != '')
                        @foreach($carts as $id=> $cartItem)
                        <div class="row mb-3 ad">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="view zoom  mb-3 mb-md-0">
                                    <img class="img-fluid w-100" src="data:image/jpeg;base64,{{base64_encode($cartItem['pro_img'])}}" alt="Sample">
                                </div>
                            </div>
                            <div id="myImageModal" class="image-modal">
                                <span class="close">&times;</span>
                                <img class="modal-image" id="img01">
                            </div>
                            <div class="col-md-8 col-lg-9 col-xl-9">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div class="content_spp">
                                            <h5>{{$cartItem['pro_name']}}</h5>
                                            <p class="mb-3 text-muted text-uppercase small">{{$cartItem['category_id']}}</p>
                                            <p class="mb-2 text-muted text-uppercase small">
                                                Price: {{$cartItem['pro_price']}} $</p>
                                            <p class="mb-3 text-muted text-uppercase small">Sale: </p>
                                        </div>
                                        <div>
                                            <div class="def-number-input number-input safari_only mb-0 w-100">
                                                <div class="input-group mb-3 number-spinner">
                                                    <button class="btn btn-default minus" data-dir="dwn" type="button"><i class="fa fa-minus"></i></button>
                                                    <input type="text" class="form-control text-center qaty" name="qty" value="{{$cartItem['pro_quantity']}}" min="1">
                                                    <button class="btn btn-default plus" data-dir="up" type="button"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                                (Note, 1 piece)
                                            </small>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-danger" data-id="{{$cartItem['pro_id']}}" data-url="{{route('cart-delete')}}" id="delete_Cart">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-success" data-id="{{$cartItem['pro_id']}}" data-url="{{route('cart-update')}}" id="update_Cart">
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <p class="mb-0">
                                            <span><strong>{{$cartItem['pro_price']*$cartItem['pro_quantity']}}</strong></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @if($carts == [])
                        <div class="alert alert-dark text-center" role="alert">
                            No product!
                        </div>
                        @endif
                        <hr class="mb-4">
                        <p class="text-primary mb-0"><i class="fa fa-info-circle mr-1"></i> Do not delay the purchase,
                            adding
                            items to your cart does not mean booking them.</p>
                    </div>
                </div>
                <!-- main -->

                <!-- time -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="mb-4">Expected shipping delivery</h5>
                        <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
                    </div>
                </div>
                <!-- time -->
            </div>

            <div class="col-lg-4">
                <!-- total -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="mb-3">The total amount of</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Temporary amount
                                <span>{{number_format($totalAll)}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>Free Ship</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>The total amount of</strong>
                                    <strong>
                                        <p class="mb-0">(including VAT)</p>
                                    </strong>
                                </div>
                                <span><strong>{{number_format($totalAll)}}</strong></span>
                            </li>
                        </ul>
                        @if($carts != [])
                        <a href="{{route('order')}}" class="btn btn-primary btn-block waves-effect waves-light" role="button">Go to checkout</a>
                        @else
                        <a href="{{product.showAll}" class="btn btn-primary btn-block waves-effect waves-light" role="button">Buy now</a>
                        @endif
                    </div>
                </div>
                <!-- total -->

                <!-- code sale -->
                <div class="card mb-3">
                    <div class="card-body">

                        <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse"
                           href="#collapseExample1"
                           aria-expanded="false" aria-controls="collapseExample1">
                            Add a discount code (optional)
                            <span><i class="fas fa-chevron-down pt-1"></i></span>
                        </a>

                        <div class="collapse" id="collapseExample1">
                            <div class="mt-3">
                                <div class="md-form md-outline mb-0">
                                    <input type="text" id="discount-code1" class="form-control font-weight-light"
                                           placeholder="Enter discount code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- code sale -->
            </div>
            <!--Grid column-->
        </div>
    </div>
</section>
@endsection