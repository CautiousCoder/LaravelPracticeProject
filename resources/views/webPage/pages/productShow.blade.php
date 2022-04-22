@extends('frontLayout.layout')
@section('content')

<div class="productbg"
    style="background-image: url( {{ asset($product->image) }} ); background-repeat: no-repeat; background-size: cover; height:600px;">
    <div class="container">
        <div class="" style="position: absolute; top: 250px; left: 10%; right: 10%; text-align: center;">
            <h1 style="color: #e84118; font-weight: bold; font-size: 4rem;"> {{ $product->name}} </h1>
            <div class="mt-3">
                @foreach ($product->categories as $item)
                <a href="#" class="badge badge-primary ml-0 p-3"> {{ $item->name }} </a>
                @endforeach
            </div>
            <div class="mt-2">
                <figure class="mr-3 d-inline">
                    <img class="rounded-circle image-fluid" style="width: 40px; height: 40px;"
                        src="@if($product->user->image){{ asset($product->user->image) }}@else{{ asset('User/unnamed.jpg') }}@endif" alt="">
                </figure>
                <span class="d-inline mt-2">{{$product->user->name}}</span>
                <span class="d-inline">&nbsp;-&nbsp; {{$product->created_at->format('M d, Y')}}</span>
            </div>
        </div>
    </div>
</div>
<div class="main-content" style="padding-top: 20px;padding-bottom:50px">
    <div class="row">
        <div class="col-md-2 d-none d-md-block"></div>
        <div class="col-12 col-md-7">
            <div class="row my-3">
                <div class="col-6 col-md-6">
                    <h2>{{ $product->name}}</h2>
                </div>
                <div class="col-6 col-md-6">
                    <h3 style="float: inline-end">${{ $product->price }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6" style="margin-top: -15px">
                    @foreach ($product->categories as $item)
                    <a href="#" class="badge badge-primary ml-0"> {{ $item->name }} </a>
                    @endforeach
                </div>
                <div class="col-6">
                    <ul class="stars d-flex justify-content-end">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span style="float: right">Reviews (24)</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <p
                        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-size: 17px;font-weight: 400;">
                        {!! $product->description !!}</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-12">
                    <div class="">
                        @foreach ($product->tags as $tag)
                        <a href="#" style="display: inline;float: right;" class="badge badge-dark ml-2 mt-4 p-2">
                            {{ $tag->name }} </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-6 mt-5">
                    <div class="img-fluid rounded-circle"><img
                            style="width: 80px;height: 80px; border-radius: 50%;margin: 0 0px 10px 60px;"
                            src="@if($product->user->image){{ asset($product->user->image) }}@else{{ asset('User/unnamed.jpg') }}@endif" alt="Profile"></div>
                    <h4><a href="#" style="color: #111;"> {{ $product->user->name }} </a></h4>
                    <h6>Post Created &nbsp;-&nbsp; {{ $product->created_at->format('M d, Y') }} </h6>
                </div>
            </div>
            <div class="comment mt-4">
                <div class="card-body my-2">
                    <h5>Display Comments</h5>
                
                    @include('webPage.pages.reply', ['comments' => $product->comments, 'product_id' => $product->id])
                   </div>
    
                   <div class="card-body">
                    <h5>Write a Comment</h5>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment" class="form-control" />
                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />
                        </div>
                    </form>
                   </div>
            </div>
        </div>
        <div class="col-md-3 d-none d-md-block">
            <h2 class="my-3 bg-primary rounded p-3" style="color: #f5f6fa"> Recent Posts </h2>
            <div class="mt-3">
                <ul class="treeview">
                    @foreach ($recentProducts as $item)

                    <li class="item d-block bg-light p-2 mb-1">
                        <a href=" {{ route('productShow', ['slug' => $item->slug]) }} " target="_blank">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="image-fluid rounded" style="width: 60px; height: 50px;"
                                        src=" {{asset( $item->image )}} " alt="">
                                </div>
                                <div class="col-md-9">
                                    <strong> {{ $item->name }} </strong>
                                    <small class="d-block">{{ $item->created_at->format('M d, Y') }} </small>
                                    {{-- <small> {{ date('M d, Y H:i:s', strtotime($item->created_at)); }} </small> --}}
                                </div>
                            </div>
                        </a>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection

@section('navbar')
@extends('webPage.navbar')

@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('.treeview').mdbTreeview();
    });
</script>
@endsection