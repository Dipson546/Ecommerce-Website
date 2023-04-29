@extends('layouts.front')

@section('content')
    <main class="main single-page">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> pages
                    <span></span> About us
                </div>
            </div>
        </div>
        <section class="section-padding">
            <div class="container pt-25">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                        <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Company</h6>
                        @foreach ($about as $abouts)
                            
                        
                        <h1 class="font-heading mb-40">
                            {{ $abouts->title }}
                        </h1>
                        @endforeach
                       
                        @foreach ($about as $ab)
                            
                        <p>{{ $ab->content }}</p>
                        @endforeach

                    </div>

                    <div class="col-lg-6">
                        <img src="assets/imgs/page/about-1.png" alt="">
                    </div>
                </div>

            </div>
       

        
    </main>

    <hr>
    @endsection
