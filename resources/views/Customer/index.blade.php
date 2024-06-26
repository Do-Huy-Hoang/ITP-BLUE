@extends('Components.customer.index')
@section('title')
<title>Home</title>
@endsection
@section('Css')

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
@include('Components.customer.hero', ['categories' => $categories,  "isBanner" => true])
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categoriesslider owl-carousel">
                @foreach ($categories->where('cate_parent_id',0) as $parent)
                <div class="col-lg-3">
                    <div class="categoriesitem">
                        <img src="data:image/jpeg;base64,{{ base64_encode($parent->cate_img) }}" alt="{{ $parent->cate_name }}" style="width: 100%; height: 100%; object-fit: cover;">
                        <h5 style="margin-top: 10px;"><a href="#">{{ $parent->cate_name }}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".ACER">ACER</li>
                        <li data-filter=".ASUS">ASUS</li>
                        <li data-filter=".APPLE">APPLE</li>
                        <li data-filter=".RAZER">RAZER</li>
                        <li data-filter=".Logitech">Logitech</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <!-- Your product items here -->
            @foreach ($featuredProducts as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 featured__item {{ $product->pro_brand }}">
                <div class="featured__item__pic set-bg" data-setbg="data:image/png;base64,{{ base64_encode($product->pro_img) }}">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="#">{{ $product->pro_name }}</a></h6>
                    <h5>{{ number_format($product->price, 0, ',', '.') }}đ</h5>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        @php $chunks = array_chunk($newestProducts->toArray(), 3); @endphp
                        @foreach ($chunks as $chunk)
                        <div class="latest-prdouct__slider__item">
                            @foreach ($chunk as $product)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                <img src="data:image/png;base64,{{ base64_encode($product['pro_img']) }}" >
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $product['pro_name'] }}</h6>
                                    <span>{{ number_format($product['pro_price'], 2) }}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->
@endsection