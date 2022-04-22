@extends('admin.backEndLayout.layout')

@section('content')
    
    <div class="container-fluid">
        <div class="row py-4">
        <div class="col-sm-6">
            <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
            <li class="breadcrumb-item active">Product Edit</li>
            </ol>
        </div>
        </div>
        <div class="row justify-content-md-center mt-3">
        <div class="card-header col-12">
            <div class="d-flex justify-content-between">
                <div class=""><h5 class="bg-primary rounded p-3">Edit Product</h5></div>
                <div class=""> <a class="btn btn-primary p-3" href=" {{ route('product.index') }} ">Back</a> </div>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('product.update',[$product->id])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
            <div class="card-body">
                @include('admin.include.error')
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="tittle">Tittle</label>
                    <input type="text" name="name" class="form-control" id="tittle" placeholder="Enter Tittle" value="{{ $product->name }}">
                  </div>
                  <div class="form-group">
                    <label for="Price">Price</label>
                    <div class="input-group-prepend" style="margin-bottom: -38px;">
                      <span class="input-group-text">$</span>
                    </div>
                    <input type="text" id="Price" name="price" class="form-control" style="padding-left: 45px;" placeholder="Price" value="{{ $product->price }}">
                    <div class="input-group-append" style="float: inline-end;
                    margin-top: -38px;">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="category">Product Category</label>
                    <select name="category" id="category" class="form-control">
                      <option selected style="display: none;" value="{{ $product->categories }}">Select Category</option>
                      @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="for">Product Tags</label>
                    <div class="row">
                        @foreach ($tags as $tag)
                        <div class="col col-sm-12 col-md-6">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{$tag->id}}" value="{{ $tag->id}}" 
                        @foreach ($product->tags as $test)
                        @if ($tag->id == $test->id)
                          checked
                        @endif
                        @endforeach >
                        <label for="tag{{ $tag->id}}" class="custom-control-label"> {{ $tag->name }}</label>
                        </div>
                     </div>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>

                <div class="form-group">
                    <label for="image" style="margin-left: 10px">Image:</label>
                    <div class="row">
                      <div class="col-12 col-xs-6 col-sm-6 col-md-6">
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">{{ $product->image }}</label>
                            </div>
                        </div>
                    </div>
                      <div class="col-12 col-xs-6 col-sm-6 col-md-6">
                      <img src="{{ $product->image }}" style="max-width: 300px;max-height: 240px;">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="summernote">Description</label>
                    <textarea class="form-control" name="description" id="summernote" cols="30" rows="4" placeholder="Description">{{ $product->description }}</textarea>
                </div>
                
            <!-- /.card-body -->

            <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-primary p-3">Edit Product</button>
            </div>
            </div>
            </form>
        </div>
    </div>
    </div>


@endsection


@section('styleSection')

    <link rel="stylesheet" href="{{ asset('backEnd') }}/css/summernote-bs4.min.css">
    
@endsection

@section('jsSection')
<script src="{{ asset('backEnd') }}/js/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<script>
    $(document).ready(function(){
      $('#summernote').summernote({
        height: 300,                
        minHeight: null,         
        maxHeight: null,            
        focus: true                 
      });
        bsCustomFileInput.init();
    });
  </script>
@endsection