@extends('frontLayout.layout')
@section('content')
    <div class="category" style="background: url('{{ asset($category->image) }}') no-repeat fixed;height:550px;width:100%;background-size:cover">
        <div class="container">
            <div class="row" style="padding-top: 180px">
                <div class="col-md-8">
                    <h3 class="mb-3"> {{$category->name}} </h3>
                    @if ($category->description)
                        {!!$category->description!!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>{{$category->name}}'s Products</h2>
                        <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @if ($categories->count())

                    @foreach ($categories as $category)
                        @foreach ($category->products as $item)
                            
                        <div class="col-md-4">
                            <div class="product-item">
                                <a href=" {{ route('productShow', ['slug' => $item->slug]) }} "><img class="Product-image" style="max-height: 260px" src="{{ asset($item->image) }}" alt=""></a>
                                <div class="down-content">
                                    <a href=" {{ route('productShow', ['slug' => $item->slug]) }} ">
                                        <h4> {{ $item->name }} </h4>
                                    </a>
                                    <h6>${{ $item->price }}</h6>
                                    <p>
                                        {!! str_limit(strip_tags($item->description), 70) !!}
                                        @if (strlen(strip_tags($item->description)) > 70)
                                            ... <br /> <a href=" {{ route('productShow', ['slug' => $item->slug]) }} " id="show"
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

                    @endforeach

                @endif

            </div>
        </div>
    </div>
@endsection

@section('navbar')
@extends('webPage.navbar')
    
@endsection