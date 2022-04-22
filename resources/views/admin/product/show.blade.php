@extends('admin.backEndLayout.layout')
@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"> View Page</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">View Page</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  <div class="my-2 mr-4" style="overflow: hidden" > <a class="btn btn-primary p-3" style="float: right" href=" {{ route('product.index') }} ">Back</a> </div>
    <div class="card card-body mx-4">
      <table class="table table-bordered">
        <tbody>
         <tr>
          <th style="width: 250px">Product Title</th>
          <td>{{$product->name}}</td>
         </tr>
         <tr>
          <th style="width: 250px">Product Slug</th>
          <td>{{$product->slug}}</td>
         </tr>
         <tr>
          <th style="width: 250px">Product Category</th>
          <td> @foreach ($product->categories as $catagory)
            <span class="badge badge-primary">{{$catagory->name ?? 'None'}}</span>
        @endforeach
          </td>
         </tr>
         <tr>
          <th style="width: 250px">Product Tags</th>
          <td> @foreach ($product->tags as $tag)
            <span class="badge badge-dark">{{$tag->name ?? 'None'}}</span>
        @endforeach
          </td>
         </tr>
         <tr>
          <th style="width: 250px">Author Name</th>
          {{-- <td>{{$product->user_id}}</td> --}}
         </tr>
         <tr>
          <th style="width: 250px">Product Image</th>
          <td>
            <div style="max-width: 300px;max-height: 300px;overflow: hidden">
              <img style="max-width: 300px;max-height: 300px;" src="{{asset('post/'.
          $product->image)}}" alt="images">
            </div>  
          </td>  
         </tr>
         <tr>
          <th style="width: 250px">Product Description</th>
          <td>{!! $product->description !!}</td>
         </tr>
        </tbody>
        
      </table>
    </div>
@endsection