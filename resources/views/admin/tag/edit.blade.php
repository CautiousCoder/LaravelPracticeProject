@extends('admin.backEndLayout.layout')
@section('content')

<div class="container-fluid pb-3">
    <div class="row py-4">
      <div class="col-sm-6">
        <h1 class="m-0">Edit Tag</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('tag.index')}}">Tags</a></li>
          <li class="breadcrumb-item active">Edit Tags</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row justify-content-md-center mt-3">
    <div class="card-header col-12 col-md-8 col-md-offset-2">
    <div class="d-flex justify-content-between align-items-center mb-2">
      <div class="p-2">
        <h3 class="card-title bg-primary rounded p-3">Edit tags - {{$tag->name}}</h3>
      </div>
      <div class="justify-content-end">
        <a href="{{route('tag.index')}}" role="button" class="btn btn-primary p-3">Back</a>
      </div>
    </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <!-- form start -->
              <form role="form" action="{{route('tag.update',[$tag->id])}}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body">
                  @include('admin.include.error')
                  <div class="form-group">
                    <label for="name">Tag Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$tag->name}}">
                  </div>
                  <div class="form-group">
                    <label for="Price">slug</label>
                    <input type="text" name="slug" class="form-control" id="Price" value="{{$tag->slug}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="summernote">Description</label>
                    <textarea name="description" class="form-control" id="summernote" cols="" rows="4">{{$tag->description}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->
              
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-lg btn-primary">Update tag list</button>
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