@extends('Components.customer.index')
@section('title')
<title>Shop</title>
@endsection
@section('Css')
@endsection
@section('content')
@include('Components.customer.hero', ['categories' => $categories, 'products' => $products, "isBanner" => false])
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Price</h4>
                        <div class="price-range-wrap">
                            <div id="slider-range">
                                <>
                                    </wire:ignore>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="data:image/jpeg;base64,{{ base64_encode($product->pro_img) }}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li>
                                        <a href="{{ route('cart-add', ['id' => $product->pro_id]) }}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ route('product.show', ['id' => $product->pro_id]) }}">{{ $product->pro_name }}</a></h6>
                                <h5>${{ $product->pro_price}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $products->links('Components.page') }}
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    var slider = document.getElementById('slider-range');
    noUiSilder.create(slider, {
        start: [0, 10000],
        connect: true,
        range: {
            'min': 0,
            'max': 10000
        },
        pips: {
            mode: 'steps',
            stepped: true,
            density: 4
        }
    });
</script>
@endpush