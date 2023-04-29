@extends('layouts.front')
@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            @if ($cart->isnotempty())
                <form class="row" action="{{ route('front.cart.update') }}" method="post">
                                    @method('patch')
                                    @csrf
                                    <table class="table shopping-summery text-center clean">
                                        <thead>
                                            <tr class="main-heading">
                                                <th scope="col">Image</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Subtotal</th>
                                                <th scope="col">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($cart as $sh)
                                                <tr>
                                                    <td class="image product-thumbnail"><img
                                                            src="{{ url("public/images/{$sh['product']->thumbnail}") }}"
                                                            alt="#"></td>
                                                    <td class="product-des product-name">
                                                        <h5 class="product-name"><a
                                                                href="shop-product-right.html">{{ $sh['product']->name }}</a>
                                                        </h5>

                                                    </td>
                                                    <td class="price" data-title="Price"><span>Rs.
                                                            {{ number_format($sh['price']) }} </span></td>
                                                    <td class="text-center" data-title="Stock">
                                                        <div class="detail-qty border radius  m-auto">
                                                            <a href="#" class="qty-down"><i
                                                                    class="fi-rs-angle-small-down"></i></a>
                                                            <span class="qty-val"
                                                                name="qty[{{ $sh['product']->id }}]">{{ $sh['qty'] }}</span>
                                                            <a href="#" class="qty-up"><i
                                                                    class="fi-rs-angle-small-up"></i></a>
                                                        </div>
                                                    </td>
                                                    <td class="text-right" data-title="Cart">
                                                        <span>{{ number_format($sh['total']) }} </span>
                                                    </td>
                                                    <td class="action" data-title="Remove"><a
                                                            href="{{ route('front.cart.destroy', [$sh['product']->id]) }}"
                                                            class="text-muted"><i class="fi-rs-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            <tr>
                                                <td colspan="6" class="text-end">
                                                    <a href="#" class="text-muted"> <i class="fi-rs-cross-small"></i>
                                                        Clear Cart</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    

                            </table>

                            {{-- <h4 class="fst-italic text-muted text-center.">The shopping cart is empty.</h4> --}}

                        </div>
                        <div class="cart-action text-end">
                            <button type= "submit" class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Update Cart</button>
                            <button class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</button>
                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50">
                            <div class="col-lg-6 col-md-12">
                                <div class="heading_s1 mb-3">
                                    <h4>Calculate Shipping</h4>
                                </div>


                    </form>
                                <div class="mb-30 mt-50">


                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Cart Totals</h4>
                                    </div>
                                    <div class="table-responsive">
                                        @foreach ($cart as $item)
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="cart_total_label">Cart Subtotal</td>
                                                        <td class="cart_total_amount"><span
                                                                class="font-lg fw-900 text-brand">{{ number_format($item['total']) }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Shipping</td>
                                                        <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free
                                                            Shipping</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Total</td>
                                                        <td class="cart_total_amount"><strong><span
                                                                    class="font-xl fw-900 text-brand">{{ number_format($cart->sum('total')) }}</span></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        @endforeach

                                    </div>
                                    <a href="{{ route('front.checkout') }}" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To
                                        CheckOut</a>
                                </div>

                                @else
                                <h4 class="text-muted text-center">The cart is empty</h4>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
