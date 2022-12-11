@extends('front.layouts.master')
@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="home-v1-slider home-slider">
                            <div class="slider-1" style="background-image: url({{asset('web/img/home-v1-background.jpg')}});">
                                <img src="{{asset('web/img/home-v1-img-1.png')}}" alt="">
                                <div class="caption">
                                    <div class="title">Turn. Click. Expand. Smart modular design simplifies adding storage for growing media.</div>
                                    <div class="sub-title">Powerful Six Core processor, vibrant 4KUHD display output and fast SSD elegantly cased in a soft alloy design.</div>
                                    <div class="button">Get Yours now
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                    <div class="bottom-caption">Free shipping on US Terority</div>
                                </div>
                            </div>
                            <!-- .slider-1 -->
                            <div class="slider-1 slider-2" style="background-image: url({{asset('web/img/home-v1-background.jpg')}});">
                                <img src="{{asset('web/img/home-v1-img-2.png')}}" alt="">
                                <div class="caption">
                                    <div class="title">The new-tech gift you
                                        <br> are wishing for is
                                        <br> right here</div>
                                    <div class="sub-title">Big screens in incredibly slim designs
                                        <br>that in your hand.</div>
                                    <div class="button">Browse now
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                    <div class="bottom-caption">Free shipping on US Terority </div>
                                </div>
                            </div>
                            <!-- .slider-2 -->
                        </div>
                        <!-- .home-v1-slider -->
                        <div class="features-list">
                            <div class="features">
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">Free Delivery</h5>
                                            <span>from $50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">99% Customer</h5>
                                            <span>Feedbacks</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">365 Days</h5>
                                            <span>for free return</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">Payment</h5>
                                            <span>Secure System</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">Only Best</h5>
                                            <span>Brands</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                            </div>
                            <!-- .features -->
                        </div>
                        <!-- /.features list -->
                        <div class="section-deals-carousel-and-products-carousel-tabs row">
                            <section class="column-1 deals-carousel" id="sale-with-timer-carousel">
                                <div class="deals-carousel-inner-block">
                                    <header class="section-header">
                                        <h2 class="section-title">
                                            <strong>Deals</strong> of the week</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- /.section-header -->
                                    <div class="sale-products-with-timer-carousel deals-carousel-v1">
                                        <div class="products-carousel">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-1">
                                                    <div class="products" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#sale-with-timer-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                                        @foreach($product as $row )
                                                        <div class="sale-product-with-timer product">
                                                            <a class="woocommerce-LoopProduct-link" href="{{route('product.single',['id'=>$row->id])}}">
                                                                <div class="sale-product-with-timer-header">
                                                                    <div class="price-and-title">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$row->price}}</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$row->price}}</span>
                                                                                    </del>
                                                                                </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">{{$row->title}}</h2>
                                                                    </div>
                                                                    <!-- /.price-and-title -->
                                                                    <div class="sale-label-outer">
                                                                        <div class="sale-saved-label">
                                                                            <span class="saved-label-text">Save</span>
                                                                            <span class="saved-label-amount">
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$row->price}}</span>
                                                                                    </span>
                                                                        </div>
                                                                        <!-- /.sale-saved-label -->
                                                                    </div>
                                                                    <!-- /.sale-label-outer -->
                                                                </div>
                                                                <!-- /.sale-product-with-timer-header -->
                                                                <img width="224" height="197" alt="" class="wp-post-image" src="{{asset($row->img2)}}">
                                                                <div class="deal-progress">
                                                                    <div class="deal-stock">
                                                                        <div class="stock-sold">Already Sold:
                                                                            <strong>0</strong>
                                                                        </div>
                                                                        <div class="stock-available">Available:
                                                                            <strong>1000</strong>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.deal-stock -->
                                                                    <div class="progress">
                                                                        <span style="width:0%" class="progress-bar">0</span>
                                                                    </div>
                                                                    <!-- /.progress -->
                                                                </div>
                                                                <!-- /.deal-progress -->
                                                                <div class="deal-countdown-timer">
                                                                    <div class="marketing-text">
                                                                        <span class="line-1">Hurry up!</span>
                                                                        <span class="line-2">Offers ends in:</span>
                                                                    </div>
                                                                    <!-- /.marketing-text -->
                                                                    <span class="deal-time-diff" style="display:none;">28800</span>
                                                                    <div class="deal-countdown countdown"></div>
                                                                </div>
                                                                <!-- /.deal-countdown-timer -->
                                                            </a>
                                                            <!-- /.woocommerce-LoopProduct-link -->
                                                        </div>
                                                            @endforeach
                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.woocommerce -->
                                            </div>
                                            <!-- /.container-fluid -->
                                        </div>
                                        <!-- /.slick-list -->
                                    </div>
                                    <!-- /.sale-products-with-timer-carousel -->
                                    <footer class="section-footer">
                                        <nav class="custom-slick-pagination">
                                            <a class="slider-prev left" href="#" data-target="#sale-with-timer-carousel .products">
                                                <i class="tm tm-arrow-left"></i>Previous deal</a>
                                            <a class="slider-next right" href="#" data-target="#sale-with-timer-carousel .products">Next deal<i class="tm tm-arrow-right"></i></a>
                                        </nav>
                                    </footer>
                                    <!-- /.section-footer -->
                                </div>
                                <!-- /.deals-carousel-inner-block -->
                            </section>
                            <!-- /.deals-carousel -->
                            <section class="column-2 section-products-carousel-tabs tab-carousel-1">
                                <div class="section-products-carousel-tabs-wrap">
                                    <header class="section-header">
                                        <ul role="tablist" class="nav justify-content-end">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#tab-59f89f0881f930" data-toggle="tab">New Arrivals</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#tab-59f89f0881f931" data-toggle="tab">On Sale</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#tab-59f89f0881f932" data-toggle="tab">Best Rated</a>
                                            </li>
                                        </ul>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="tab-content">
                                        <div id="tab-59f89f0881f930" class="tab-pane active" role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @foreach($product as $row)
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset($row->img1)}}" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> ${{$row->price}}</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">{{$row->title}}</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="#" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="#">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0881f931" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @foreach($product as $row)
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="#" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{asset($row->img1)}}" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> ${{$row->price}}</span>
                                                                            </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">{{$row->title}}</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="#" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="#">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0881f932" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @foreach($product as $row)
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="#" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{asset($row->img1)}}" width="224" height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> ${{$row->price}}</span>
                                                                            </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">{{$row->title}}</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="#" rel="nofollow">Add to cart</a>
                                                                        <a class="add-to-compare-link" href="#">Add to compare</a>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0881f933" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/6.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Gear Virtual Reality 3D with Bluetooth Glasses</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/4.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi & GPS</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/8.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Video & Air Quality Monitor</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/16.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 262.81</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                    <img src="assets/images/products/14.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/3.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/10.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/9.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Watch Stainless with Grey Suture Leather Strap</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">XONE Wireless Controller</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/15.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 399.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Band Fitbit Flex</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                    <img src="assets/images/products/2.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/12.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bbd 23-Inch Screen LED-Lit Monitorss Buds</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/11.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Xtreme ultimate splashproof portable speaker</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/13.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Drone WIFI FPV With 4K</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                    <img src="assets/images/products/1.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                </div>
                                                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                    <img src="assets/images/products/7.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">Bluetooth on-ear PureBass Headphones</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-outer -->
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                    </div>
                                    <!-- .tab-content -->
                                </div>
                                <!-- .section-products-carousel-tabs-wrap -->
                            </section>
                            <!-- .section-products-carousel-tabs -->
                        </div>
                        <div class="fullwidth-notice stretch-full-width">
                            <div class="col-full">
                                <p class="message">Download our new app today! Dont miss our mobile-only offers and shop with Android Play.</p>
                            </div>
                            <!-- .col-full -->
                        </div>
                        <!-- .fullwidth-notice -->
                        <section class="section-top-categories section-categories-carousel" id="categories-carousel-1">
                            <header class="section-header">
                                <h4 class="pre-title">Featured</h4>
                                <h2 class="section-title">Top categories
                                    <br>this week</h2>
                                <nav class="custom-slick-nav"></nav>
                                <!-- .custom-slick-nav -->
                                <a class="readmore-link" href="#">Full Catalog</a>
                            </header>
                            <!-- .section-header -->
                            <div class="product-categories-1 product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-1 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @foreach($category as $row)

                                        <div class="product-category product">
                                            <a href="#">
                                                <img width="224" height="197" alt="Audio &amp; Music" src="{{asset($row->img)}}">
                                                <h2 class="woocommerce-loop-category__title">
                                                    {{$row->name}}
                                                </h2>
                                            </a>
                                        </div>
                                            @endforeach



                                        <!-- .product-category -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .product-categories-carousel -->
                        </section>
                        <!-- .brands-carousel -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->

@endsection
