@extends('Components.customer.index')
@section('title')
    <title>Wishlist</title>
@endsection
@section('Css')
    <style>
        .product-link {
            color: "#000ff"; /* Default color */
            text-decoration: none; /* Remove underline by default */
        }

        .product-link:hover {
            color: #ff0000; /* Change color on hover */
            text-decoration: underline; /* Add underline on hover */
        }

        .ad {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .ad .row {
            border-top: 1px solid #ccc;
            margin-top: 10px;
            padding-top: 10px;
        }

        .ad .col-md-3,
        .ad .col-md-7,
        .ad .col-md-2 {
            border-right: 1px solid #ccc;
            padding-right: 15px;
        }
    </style>
@endsection
@section('Js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var containerEl = document.querySelector('.featured__filter');

        var mixer = mixitup(containerEl, {
            selectors: {
                target: '.featured__item'
            },
            animation: {
                duration: 300
            }
        });
    });
</script>
@endsection
@section('load')
<div id="preloder">
    <div class="loader"></div>
</div>
@endsection
@section('content')
    @include('Components.customer.hero', [
    'categories' => $categories,
    'wishlistItems' => $wishlistItems,
    'isBanner' => false,
])
    <section class="categories">
        <div class="container">
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">WishList</li>
                </ol>
            </nav>
            <div class="card-body">
                <h5 class="mb-4">Wishlist (<span>{{ $wishlistItems->count() }}</span> items)</h5>
                @if ($wishlistItems->isNotEmpty())
                    @foreach ($wishlistItems as $wishlistItem)
                        <div class="row mb-3 ad">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="view zoom  mb-3 mb-md-0">
                                            <img class="img-fluid w-100"
                                                src="data:image/jpeg;base64,{{ base64_encode($wishlistItem['pro_img']) }}"
                                                alt="Sample">
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex align-items-center">
                                        <div class="content_spp">
                                            <h5>{{ $wishlistItem['pro_name'] }}</h5>
                                            <p class="mb-2 text-muted text-uppercase">
                                                Price: {{ $wishlistItem['pro_price'] }} $
                                            </p>
                                            <a href="{{ route('product.showproduct', ['id' => $wishlistItem['pro_id']]) }}" class="product-link">Click here to view details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                                        <form action="" method="">
                                            <button type="submit" class="btn btn-outline-success mr-2">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Cart
                                            </button>
                                        </form>
                                        <form action="{{ route('wishlist.remove', ['productId' => $wishlistItem['pro_id']]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-dark text-center" role="alert">
                        No product!
                    </div>
                @endif
                <hr class="mb-4">
                <p class="text-primary mb-0"><i class="fa fa-info-circle mr-1"></i> Adding items to a wishlist does not signify a commitment to purchase; it simply means that the person is interested in those items and may consider buying them at a later time.</p>
            </div>
        </div>
    </section