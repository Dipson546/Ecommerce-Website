@extends('layouts.front')

@section('content')
<section class="featured section-padding position-relative">
    <div class="container">
    
<section class="product-tabs section-padding position-relative wow fadeIn animated">
    <center>                 
        <h6>search: {{ $term }}</h6>
 </center><br>

        <div class="tab-content wow fadeIn animated" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">

                <div class="row product-grid-4"> 
                    
                    @foreach ($products as $product )

                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">

                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">

                                <div class="product-img product-img-zoom">
                                    <a href="{{route('front.pages.product', [$product->id]) }}"></">
                                        <img class="default-img" src="{{ url('public/front/imgs/shop/product-2-1.jpg') }}" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
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
                                    <a href="shop-grid-right.html"></a>
                                </div>
                                <h2><a href=" {{route('front.pages.product', [$product->id]) }}"></a></h2>
                                <div class="" title="">
                                    {{ $product->name }}
                                    
                                </div>
                                <div class="product-price">
                                    @empty($product->discounted_price)
                                    <span>Rs. {{ $product->price }} </span>
                                    @else
                                    <span>Rs. {{ $product->discounted_price }}</span>
                                    <span class="old-price">Rs. {{ $product->price }}</span>

                                    @endempty

                                    

                                </div>
                                <div class="product-action-1 show">
                                    <button class="action-btn hover-up add-to-cart" aria-label="Add To Cart" type="button" data-id="{{ $product->id }}"><i class="fi-rs-shopping-bag-add"></i>   
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    
                    
                    
                    
                   
                    
                </div>
                
                <!--End product-grid-4-->
            </div>
              <hr>  
            
            <!--En tab one (Featured)-->
@endsection