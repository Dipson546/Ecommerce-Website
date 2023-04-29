@extends('layouts.front')
@section('content')
<main class="main">
    <section class="home-slider position-relative pt-50">
        <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
            <div class="single-hero-slider single-animation-wrap">
                <div class="container">
                    <div class="row align-items-center slider-animated-1">
                        <div class="col-lg-5 col-md-6">
                            <div class="hero-slider-content-2">
                                <h4 class="animated">Trade-in offer</h4>
                                <h2 class="animated fw-900">Supper value deals</h2>
                                <h1 class="animated fw-900 text-brand">On all products</h1>
                                <p class="animated">Save more with coupons & up to 70% off</p>
                                <a class="animated btn btn-brush btn-brush-3" href="#"> Shop Now </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="single-slider-img single-slider-img-1">
                                <img class="animated slider-1-1" src="{{ url('public/images/theme/banner5.png') }}" alt="" width="500%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap">
                <div class="container">
                    <div class="row align-items-center slider-animated-1">
                        <div class="col-lg-5 col-md-6">
                            <div class="hero-slider-content-2">
                                <h4 class="animated">Hot promotions</h4>
                                <h2 class="animated fw-900">Fashion Trending</h2>
                                <h1 class="animated fw-900 text-7">Great Collection</h1>
                                <p class="animated">Save more with coupons & up to 20% off</p>
                                <a class="animated btn btn-brush btn-brush-2" href=""> Discover Now </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="single-slider-img single-slider-img-1">
                                <img class="animated slider-1-2" src="{{ url('public/images/banner2.jpg') }}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap">
                <div class="container">
                    <div class="row align-items-center slider-animated-1">
                        <div class="col-lg-5 col-md-6">
                            <div class="hero-slider-content-2">
                                <h4 class="animated">Upcoming Offer</h4>
                                <h2 class="animated fw-900">Big Deals From</h2>
                                <h1 class="animated fw-900 text-8">Manufacturer</h1>
                                <p class="animated">Clothing, Shoes, Bags, Wallets...</p>
                                <a class="animated btn btn-brush btn-brush-1" href=""> Shop Now </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="single-slider-img single-slider-img-1">
                                <img class="animated slider-1-3" src="{{ url('public/images/banner3.jpg') }}" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-arrow hero-slider-1-arrow"></div>
    </section>
    <section class="featured section-padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ url('public/front/imgs/theme/icons/feature-1.png') }}" alt="">
                        <h4 class="bg-1">Free Shipping</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ url('public/front/imgs/theme/icons/feature-2.png') }}" alt="">
                        <h4 class="bg-3">Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ url('public/front/imgs/theme/icons/feature-3.png') }}" alt="">
                        <h4 class="bg-2">Save Money</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ url('public/front/imgs/theme/icons/feature-4.png') }}" alt="">
                        <h4 class="bg-4">Promotions</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ url('public/front/imgs/theme/icons/feature-5.png') }}" alt="">
                        <h4 class="bg-5">Happy Sell</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ url('public/front/imgs/theme/icons/feature-6.png') }}" alt="">
                        <h4 class="bg-6">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-tabs section-padding position-relative wow fadeIn animated">
        <div class="bg-square"></div>
        <div class="container">
            <div class="tab-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                    </li>
                </ul>
                <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content wow fadeIn animated" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
         
                        @foreach($featured as  $product)
                            
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-xs-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{route('front.pages.product', [$product->id]) }}">
                                            <img class="default-img" src="{{ url("public/images/{$product->thumbnail}")}}" alt="">
                                            <img class="hover-img" src="{{ url("public/images/{$product->thumbnail}") }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">{{ $product->category->name }}</a>
                                    </div>
                                    <h2><a href="{{route('front.pages.product', [$product->id]) }}">{{ $product->name }}</a></h2>
                                    <div class="" title="">

                                    </div>
                                    <div class="product-price">
                                        @empty($product->discounted_price)
                                        <span >
                                            Rs. {{ number_format($product->price) }}
                                        </span>
                                        @else
                                        <span>
                                            Rs. {{ number_format($product->discounted_price) }}
                                        </span>
                                            <span class="old-price">
                                                Rs. {{ number_format($product->price) }}
                                        </span>
                                        @endempty                                    
                                    </div>

                                    <div class="product-action-1 show">
                                        <button class="action-btn hover-up add-to-cart" aria-label="Add To Cart" type="button" data-id="{{ $product->id }}"><i class="fi-rs-shopping-bag-add"></i>   
                                         </button>
                                         
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach



                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one (Featured)-->
                <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row product-grid-4">


                        
                        @foreach($latest as  $lat)
                            
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-xs-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{route('front.pages.product', [$product->id]) }}">
                                            <img class="default-img" src="{{ url("public/images/{$lat->thumbnail}")}}" alt="">
                                            <img class="hover-img" src="{{ url("public/images/{$lat->thumbnail}") }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">{{ $lat->name }}</a>
                                    </div>
                                    <h2><a href="{{route('front.pages.product', [$product->id]) }}">{{ $lat->summary }}</a></h2>
                                    <div class="" title="">

                                    </div>
                                    <div class="product-price">
                                        @empty($product->discounted_price)
                                        <span >
                                            Rs. {{ number_format($product->price) }}
                                        </span>
                                        @else
                                        <span>
                                            Rs. {{ number_format($product->discounted_price) }}
                                        </span>
                                            <span class="old-price">
                                                Rs. {{ number_format($product->price) }}
                                        </span>
                                        @endempty                                    </div>
                                    <div class="product-action-1 show">
                                        <button class="action-btn hover-up add-to-cart" aria-label="Add To Cart" type="button" data-id="{{ $lat->id }}"><i class="fi-rs-shopping-bag-add"></i>   
                                        </button>                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab two (Popular)-->
                <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row product-grid-4">

                        @foreach($popular as  $pop)
                            
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-xs-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{route('front.pages.product', [$pop->id]) }}">
                                            <img class="default-img" src="{{ url("public/images/{$pop->thumbnail}")}}" alt="">
                                            <img class="hover-img" src="{{ url("public/images/{$pop->thumbnail}") }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">{{ $pop->name }}</a>
                                    </div>
                                    <h2><a href="{{route('front.pages.product', [$pop->id]) }}">{{ $pop->summary }}</a></h2>
                                    <div class="" title="">

                                    </div>
                                    <div class="product-price">
                                        @empty($product->discounted_price)
                                        <span >
                                            Rs. {{ number_format($product->price) }}
                                        </span>
                                        @else
                                        <span>
                                            Rs. {{ number_format($product->discounted_price) }}
                                        </span>
                                            <span class="old-price">
                                                Rs. {{ number_format($product->price) }}
                                        </span>
                                        @endempty                                    </div>
                                    <div class="product-action-1 show">
                                        <button class="action-btn hover-up add-to-cart" aria-label="Add To Cart" type="button" data-id="{{ $pop->id }}"><i class="fi-rs-shopping-bag-add"></i>   
                                        </button>                                   
                                     </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!--End product-grid-4-->
                </div>
                <!--En tab three (New added)-->
            </div>
            <!--End tab-content-->
        </div>
    </section>



    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">

                    @foreach ($latest as $lat)
                        
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{route('front.pages.product', [$lat->id]) }}">
                                    <img class="default-img" src="{{ url("public/images/{$lat->thumbnail}") }}" alt="">
                                    <img class="hover-img" src="{{ url("public/images/{$lat->thumbnail}") }}" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="{{route('front.pages.product', [$lat->id]) }}">{{ $lat->name }}</a></h2>
                            <div class="" title="">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                @empty($lat->discounted_price)
                                <span >
                                    Rs. {{ number_format($lat->price) }}
                                </span>
                                @else
                                <span>
                                    Rs. {{ number_format($lat->discounted_price) }}
                                </span>
                                    <span class="old-price">
                                        Rs. {{ number_format($lat->price) }}
                                </span>
                                @endempty
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <!--End product-cart-wrap-2-->
                    
                    <!--End product-cart-wrap-2-->

                    <!--End product-cart-wrap-2-->
                    
                    <!--End product-cart-wrap-2-->
                    
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="bg-grey-9 section-padding">
        <div class="container pt-25 pb-25">
            <div class="heading-tab d-flex">
                <div class="heading-tab-left wow fadeIn animated">
                    <h3 class="section-title mb-20"><span>Monthly</span> Best Sell</h3>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-3 d-none d-lg-flex">
                    <div class="banner-img style-2 wow fadeIn animated">
                        <img src="{{ url('public/front/imgs/banner/banner-9.jpg') }}" alt="">
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                    @foreach($top as $item)
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{route('front.pages.product', [$item->id]) }}">
                                                    <img class="default-img" src="{{ url("public/images/{$item->thumbnail}") }}" alt="">
                                                    <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html"> olanep </a>
                                            </div>
                                            <h2><a href="{{route('front.pages.product', [$item->id]) }}">{{ $item->name }}</a></h2>
                                            <div>
                                                
                                            </div>
                                            <div class="product-price">
                                                @empty($item->discounted_price)
                                                <span >
                                                    Rs. {{ number_format($item->price) }}
                                                </span>
                                                @else
                                                <span>
                                                    Rs. {{ number_format($item->discounted_price) }}
                                                </span>
                                                    <span class="old-price">
                                                        Rs. {{ number_format($item->price) }}
                                                </span>
                                                @endempty
                                            </div>
                                            <div class="product-action-1 show">
                                                <button class="action-btn hover-up add-to-cart" aria-label="Add To Cart" type="button" data-id="{{ $item->id }}"><i class="fi-rs-shopping-bag-add"></i>   
                                                </button>                                            
                                              </div>
                                        </div>
                                    </div>
                                    @endforeach
                                        
                                    </div>
                                    
                                    
                                           
                                    
                            </div>
                        </div>
                        <!--End tab-pane-->
                    
            
                    </div>
                    <!--End tab-content-->
                </div>
                <!--End Col-lg-9-->
            </div>
        </div>
    </section>
    
   
    
</main>
    
@endsection
