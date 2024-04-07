@extends('Components.customer.index')
@section('title')
<title>Details</title>
@endsection
@section('Css')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection
@section('Js')
<script src="{{asset('js/shopping_cart.js')}}"></script>
@endsection
@section('content')
@include('Components.customer.hero', ['categories' => $categories, 'product' => $product, "isBanner" => false])

<section class="categories">
    <div class="container">
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product.show', ['id' => $product->category->cate_id]) }}">{{ $product->category->cate_name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->pro_name}}</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="view zoom  mb-3 mb-md-0">
                        <img class="img-fluid w-100" src="data:image/jpeg;base64,{{base64_encode($product->pro_img)}}" alt="Sample">
                    </div>
                    <div id="myImageModal" class="image-modal">
                        <span class="close">&times;</span>
                        <img class="modal-image" id="img01">
                    </div>
                    <div class="product__details__pic__slider owl-carousel">
                        <div class="view zoom  mb-3 mb-md-0">
                            <img class="img-fluid w-100" src="data:image/jpeg;base64,{{base64_encode($product->pro_img)}}" alt="Sample">
                        </div>
                        @foreach($product->productImages as $image)
                        <div class="view zoom  mb-3 mb-md-0">
                            <img class="img-fluid w-100" src="data:image/jpeg;base64,{{base64_encode($image->proImg_img)}}" alt="Sample">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{ $product->pro_name }}</h3>
                    <div class="product__details__rating">
                        <!-- Rating stars -->
                    </div>
                    <div>Brand: {{ strtoupper($product->pro_brand) }}</div>
                    <div>Quality: {{ $product->pro_quantity }}</div>
                    <div class="product__details__price">${{ $product->pro_price }}</div>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1" id="quantity">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">ADD TO CART</a>
                    <a href="{{ route('wishlist.add', ['productId' => $product->pro_id]) }}" onclick="event.preventDefault(); document.getElementById('add-to-wishlist-form-{{ $product->pro_id }}').submit();" class="heart-icon">
                        <span class="icon_heart_alt"></span>
                    </a>
                    <form id="add-to-wishlist-form-{{ $product->pro_id }}" action="{{ route('wishlist.add', ['productId' => $product->pro_id]) }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <hr>
                    <ul>
                        <li>
                            <h6>Description:</h6>
                            <span>
                                @php
                                echo $product->pro_description;
                                @endphp
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</section>
@endsection