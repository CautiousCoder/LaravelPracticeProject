@extends('admin.backEndLayout.layout')

@section('content')
<div class="container-fluid">
        <div class="row py-4">
            <div class="col-sm-6">
                <h1>Product Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item active">Product Page</li>
                </ol>
            </div>
        </div>
      <div class="card">
        <div class="d-flex justify-content-between">
            <div class="mt-2 ml-2"><h5 class="bg-primary rounded p-3">Product List</h5></div>
            <div class="mt-2 mr-2"> <a class="btn btn-primary p-3" href=" {{ route('product.create') }} ">Create New Product</a> </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped mt-3">
            <thead>
                <tr class="bg-primary text-white">
                <th style="max-width: 10px">No.</th>
                <th>Tittle</th>
                <th>Category</th>
                <th>Tags</th>
                <th>Image</th>
                <th>Description</th>
                <th style="max-width: 80px">Price</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($products->count())
              @foreach ($products as $product)
              <tr>
              <td>{{$i++}}</td>
              <td>{{$product->name}}</td>
              <td> @foreach ($product->categories as $catagory)
                <span class="badge badge-primary">{{$catagory->name ?? 'None'}}</span>
            @endforeach
              </td>
              <td> @foreach ($product->tags as $tag)
                <span class="badge badge-dark">{{$tag->name ?? 'None'}}</span>
            @endforeach
              </td>
              <td>
                <div style="max-width: 100px;max-height: 70px;overflow: hidden">
                  <img style="max-width: 100px;max-height: 70px;" src="{{ asset($product->image) }}" alt="images">
                </div>  
              </td>
              <td>
                <p class="ArticleBody">
                  {{ str_limit(strip_tags($product->description), 50) }}
                  @if (strlen(strip_tags($product->description)) > 50)
                   ... <br /> <a href="{{route('product.show',[$product->id])}}" id="show" class="btn btn-info btn-sm">Read More</a>
                  @endif
              </p>  
              </td>
              <td style="max-width: 50px">{{$product->price}}</td>
              <td>
                    <div class="d-flex">
                      <a href="{{route('product.edit',[$product->id])}}" class="btn btn-primary mr-1" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-edit"></i><a>
                      <a href="{{route('product.show', [$product->id])}}" class="btn btn-success mr-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show"><i class="fas fa-eye"></i><a>
                        <form action="{{route('product.destroy',[$product->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="fas fa-trash"></i></button>
                        </form>
                    <div>
                  </td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="7" class="text-center">
                    No products list found.
                  </td>
                </tr>
                @endif
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
    <!-- /.card-body -->

    


  @endsection