@extends('Components.customer.index')
@section('title')
<title>Shop</title>
@endsection
@section('Css')
@endsection
@section('content')
@include('Components.customer.hero', ['categories' => $categories,
'wishlistItems' => $wishlistItems,'products' => $products, "isBanner" => false])
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Price Range</h4>
                        @php
                        $route = isset($category) ? route('product.filterByCategoryAndPriceRange', ['id' => $category->cate_id]) : route('products.filterPriceRange');
                        $minPrice = request('min_price', 0);
                        $maxPrice = request('max_price', 1000000);
                        @endphp
                        <form action="{{ $route }}" method="GET">
                            <input type="number" name="min_price" placeholder="Min Price" value="{{ $minPrice }}">
                            <input type="number" name="max_price" placeholder="Max Price" value="{{ $maxPrice }}">
                            <button type="submit" class="apply-button">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="row">
                    <div class="col">Sorted by:</div>
                    <div class="col text-right">
                        @php
                        $routeName = request()->route()->getName();
                        $routeParams = ['min_price' => request('min_price'), 'max_price' => request('max_price')];
                        @endphp
                        @if(isset($category))
                        @php
                        $routeParams['id'] = $category->cate_id;
                        @endphp
                        @if($routeName != 'product.filterByCategoryAndPriceRange' && $routeName != 'product.filterByCategoryAndPriceRangeSort')
                        <a href="{{ route('product.filterCate', array_merge($routeParams, ['order' => 'asc'])) }}" class="btn btn-sm btn-outline-primary">Price Asc</a>
                        <a href="{{ route('product.filterCate', array_merge($routeParams, ['order' => 'desc'])) }}" class="btn btn-sm btn-outline-primary">Price Desc</a>
                        @else
                        <a href="{{ route('product.filterByCategoryAndPriceRangeSort', array_merge($routeParams, ['order' => 'asc'])) }}" class="btn btn-sm btn-outline-primary">Price Asc</a>
                        <a href="{{ route('product.filterByCategoryAndPriceRangeSort', array_merge($routeParams, ['order' => 'desc'])) }}" class="btn btn-sm btn-outline-primary">Price Desc</a>
                        @endif
                        @else
                        @if($routeName != 'products.filterPriceRange' && $routeName != 'products.filterPriceRangeSort')
                        <a href="{{ route('product.filter', array_merge($routeParams, ['order' => 'asc'])) }}" class="btn btn-sm btn-outline-primary">Price Asc</a>
                        <a href="{{ route('product.filter', array_merge($routeParams, ['order' => 'desc'])) }}" class="btn btn-sm btn-outline-primary">Price Desc</a>
                        @else
                        <a href="{{ route('products.filterPriceRangeSort', array_merge($routeParams, ['order' => 'asc'])) }}" class="btn btn-sm btn-outline-primary">Price Asc</a>
                        <a href="{{ route('products.filterPriceRangeSort', array_merge($routeParams, ['order' => 'desc'])) }}" class="btn btn-sm btn-outline-primary">Price Desc</a>
                        @endif
                        @endif
                    </div>
                </div>
                <div class="row">
                    @if($products->isEmpty())
                    <div class="row" id="productList">
                        <div class="col text-center">
                            <p>No Found Products</p>
                        </div>
                    </div>
                    @else
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item" id="test">
                            <div class="product__item__pic set-bg" data-setbg="data:image/jpeg;base64,{{ base64_encode($product->pro_img) }}">
                                @if($product->pro_status)
                                <ul class="product__item__pic__hover">
                                    @guest('web')
                                    @else
                                    <li>
                                        <a href="{{ route('wishlist.add', ['productId' => $product->pro_id]) }}" onclick="event.preventDefault(); document.getElementById('add-to-wishlist-form-{{ $product->pro_id }}').submit();">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                        <form id="add-to-wishlist-form-{{ $product->pro_id }}" action="{{ route('wishlist.add', ['productId' => $product->pro_id]) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                    @endguest
                                    <li>
                                        <a href="{{ route('cart-add', ['id' => $product->pro_id]) }}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                                @endif
                            </div>
                            @if($product->pro_status)
                            <div class="product__item__text">
                                <h6><a href="{{ route('product.showproduct', ['id' => $product->pro_id]) }}">{{ $product->pro_name }}</a></h6>
                                <h5>${{ $product->pro_price}}</h5>
                            </div>
                            @else
                            <div class="product__item__text">
                                <div class="alert alert-danger" role="alert">
                                    Sold Out
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                {{ $products->links('Components.page') }}
            </div>
        </div>
    </div>
</section>
@endsection