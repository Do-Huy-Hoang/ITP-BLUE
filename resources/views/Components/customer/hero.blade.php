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
                        @foreach ($categories->where('cate_parent_id',0) as $parent)
                            <li><a href="javascript:void(0)" class="show-overlay cate-li"
                                    data-target="overlay{{ $parent->cate_id}}">{{ $parent->cate_name }}</a></li>
                        @endforeach
                    </ul>
                    @foreach ($categories->where('cate_parent_id',0) as $parent)
                        <div id="overlay{{ $parent->cate_id}}" class="overlay">
                            <h2>{{ $parent->cate_name }}</h2>
                            <div class="row">
                                @foreach ($categories->where('cate_parent_id', $parent->cate_id) as $category)
                                    <div class="col-md-4">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <figure style="text-align: center;">
                                                        <img src="data:image/jpeg;base64,{{ base64_encode($category->image) }}"
                                                            style=" display: block; margin: auto;" height="120px" width="150px">
                                                        <figcaption style="text-align: center;">
                                                            {{ $category->cate_name }}</figcaption>
                                                    </figure>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?" style="width: 70%;">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg">
                    <img src="img/hero/Online-electronic-store.jpg" alt="Online electronic store" style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>
