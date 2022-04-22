@extends('frontLayout.layout')
@section('content')


<!-- Page Content -->
<!-- Banner Starts Here -->
{{-- <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div> --}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('frontEnd') }}/images/slide_01.jpg"" alt=" First slide">
            <div class="carousel-caption d-none d-md-block">
                <div class="row">
                    @foreach ($firstCategory as $first)
                    <div class="col-md-4">
                        <div class="">
                            <a href="#" class="gradient mb-4">
                                <img style="height: 240px;" class="img-fluid" src="{{ $first->image }}" alt=""></a>
                            <div class="mt-3">
                                <a href="#">
                                    <h4> {{ $first->name }} </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($forthCategory as $first1)
                    <div class="col-md-4">
                        <div class="">
                            <a href="#" class="gradient mb-4">
                                <img style="height: 240px;" class="img-fluid" src="{{ $first1->image }}" alt=""></a>
                            <div class="mt-3">
                                <a href="#">
                                    <h4> {{ $first1->name }} </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('frontEnd') }}/images/slide_02.jpg"" alt=" Second slide">
            <div class="carousel-caption d-none d-md-block">
                <div class="row">
                    @foreach ($thirdCategory as $first)
                    <div class="col-md-4">
                        <div class="">
                            <a href="#" class="gradient mb-4">
                                <img style="height: 240px;" class="img-fluid" src="{{ $first->image }}" alt=""></a>
                            <div class="mt-3">
                                <a href="#">
                                    <h4> {{ $first->name }} </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($firstCategory as $first1)
                    <div class="col-md-4">
                        <div class="">
                            <a href="#" class="gradient mb-4">
                                <img style="height: 240px;" class="img-fluid" src="{{ $first1->image }}" alt=""></a>
                            <div class="mt-3">
                                <a href="#">
                                    <h4> {{ $first1->name }} </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($secondCategory as $first2)
                    <div class="col-md-4">
                        <div class="">
                            <a href="#" class="gradient mb-4">
                                <img style="height: 240px;" class="img-fluid" src="{{ $first2->image }}" alt=""></a>
                            <div class="mt-3">
                                <a href="#">
                                    <h4> {{ $first2->name }} </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('frontEnd') }}/images/slide_03.jpg"" alt=" Third slide">
            <div class="carousel-caption d-none d-md-block">
                <div class="row">
                    @foreach ($forthCategory as $first)
                    <div class="col-md-4">
                        <div class="">
                            <a href="#" class="gradient mb-4">
                                <img style="height: 240px" class="img-fluid" src="{{ $first->image }}" alt=""></a>
                            <div class="mt-3">
                                <a href="#">
                                    <h4> {{ $first->name }} </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($secondCategory as $first1)
                    <div class="col-md-4">
                        <div class="">
                            <a href="#" class="gradient mb-4">
                                <img style="height: 240px;" class="img-fluid" src="{{ $first1->image }}" alt=""></a>
                            <div class="mt-3">
                                <a href="#">
                                    <h4> {{ $first1->name }} </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @if ($LatestProducts->count())

            @foreach ($LatestProducts as $product)

            <div class="col-md-4">
                <div class="product-item">
                    <a href=" {{ route('productShow', ['slug' => $product->slug]) }} "><img class="Product-image"
                            style="max-height: 260px" src="{{ asset($product->image) }}" alt=""></a>
                    <div class="down-content">
                        <a href=" {{ route('productShow', ['slug' => $product->slug]) }} ">
                            <h4> {{ $product->name }} </h4>
                        </a>
                        <h6>${{ $product->price }}</h6>
                        <p>
                            {!! str_limit(strip_tags($product->description), 70) !!}
                            @if (strlen(strip_tags($product->description)) > 70)
                            ... <br /> <a href=" {{ route('productShow', ['slug' => $product->slug]) }} " id="show"
                                class="btn btn-info btn-sm">Read More</a>
                            @endif
                        </p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>Reviews (24)</span>
                    </div>
                </div>
            </div>

            @endforeach

            @endif

        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Sixteen Clothing</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Looking for the best products?</h4>
                    <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This
                            template</a> is free to use for your business websites. However, you have no permission to
                        redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow"
                            href="https://templatemo.com/contact">Contact us</a> for more info.</p>
                    <ul class="featured-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur an adipisicing elit</a></li>
                        <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                        <li><a href="#">Corporis, omnis doloremque</a></li>
                        <li><a href="#">Non cum id reprehenderit</a></li>
                    </ul>
                    <a href="about.html" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{ asset('frontEnd') }}/images/feature-image.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite
                                author nulla.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="filled-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('navbar')
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href=" {{ route('home') }} ">
                <h2>Sixteen <em>Clothing</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('products') }} ">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@endsection

@section('jsSection')
<script>
    $('document').ready(function () {
        $('.carousel').carousel()
    });
</script>
@endsection