@extends('admin.backEndLayout.layout')
@section('content')

<div class="container-fluid">
    <div class="row py-4">
      <div class="col-sm-6">
        <h1 class="m-0">Category Page</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('category.index')}}">Category list</a></li>
          <li class="breadcrumb-item active">Create Category list</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row justify-content-md-center mt-3">
      <div class="card-header col-12 col-md-8 col-md-offset-2">
        <div class="d-flex justify-content-between">
          <div class="p-3">
            <h3 class="card-title">Create Category list</h3>
          </div>
          <div class="p-3">
            <a href="{{route('category.index')}}" role="button" class="btn btn-primary">Back</a>
          </div>
        </div>
              <!-- /.card-header -->
        <div class="card-body p-0">
          <!-- form start -->
        <form role="form" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            @include('admin.include.error')
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Category Name">
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <div class="input-group">
                  <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                  </div>
              </div>
          </div>
            <div class="form-group">
              <label for="summernote">Description</label>
              <textarea name="description" class="form-control" id="summernote" cols="" rows="4" placeholder="Description"></textarea>
            </div>

          <!-- /.card-body -->
        
          <div class="card-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-lg btn-primary">Add Category</button>
          </div>
        </form>
      
        </div>
        <!-- /.card-body -->

      </div>
    </div>

  
  </div><!-- /.container-fluid -->
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