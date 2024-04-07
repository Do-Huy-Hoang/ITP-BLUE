<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categories</span>
                    </div>              
                    <ul>
                        @foreach ($categories->where('cate_parent_id', 0) as $parent)
                            <li><a href="javascript:void(0)" class="show-overlay cate-li"
                                    data-target="overlay{{ $parent->cate_id}}">{{ $parent->cate_name }}</a></li>
                        @endforeach
                    </ul>
                    @foreach ($categories->where('cate_parent_id', 0) as $parent)
                    <div id="overlay{{ $parent->cate_id }}" class="overlay">
                        <h2>{{ $parent->cate_name }}</h2>
                        <div class="container">
                            <div class="row">
                                @foreach ($categories->where('cate_parent_id', $parent->cate_id) as $category)
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <a href="{{ route('product.show', ['id' => $category->cate_id]) }}">
                                            <figure style="text-align: center;">
                                                <img src="data:image/jpeg;base64,{{ base64_encode($category->cate_img) }}" style="display: block; margin: auto;" height="120px" width="150px">
                                                <figcaption style="text-align: center;">{{ $category->cate_name }}</figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ route('product.search') }}" method="GET">
                            <input type="text" name="query" placeholder="Search products..." style="width: 70%;">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+84 19008198</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                 @if($isBanner==true)   
                </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/main-pic.png"  style="background-position: center top; margin-top: 20px;">
                </div>
                @endif
            </div>
        </div>
    </div>
</section>