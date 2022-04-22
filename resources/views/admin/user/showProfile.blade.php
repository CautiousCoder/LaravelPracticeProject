@extends('admin.backEndLayout.layout')
@section('content')

<div class="container-fluid">
    <div class="row py-4">
      <div class="col-sm-6">
        <h1 class="m-0">User Profile</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('user.index')}}">User List</a></li>
          <li class="breadcrumb-item active">User Profile</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row justify-content-md-center mt-3">
      <div class="card-header col-12">
        <div class="d-flex justify-content-between">
          <div class="p-3">
            <h3 class="card-title">Create user list</h3>
          </div>
          <div class="p-3">
            <a href="{{route('user.index')}}" role="button" class="btn btn-primary">Back</a>
          </div>
        </div>
      </div>
      <div class="card col-12">
        <div class="row">
        <div class="col-12 col-md-9">
          <!-- form start -->
        <form role="form" action="{{route('user.update', [$user->id])}}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          @include('admin.include.error')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">User Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="user Name">
                </div>
                <div class="form-group">
                  <label for="email">User E-mail</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="user@email.com">
                </div>
                <div class="form-group">
                  <label for="pass">Password</label>
                  <input type="password" name="password" class="form-control" id="pass" placeholder="New Password">
                </div>
              </div>
              <div class="col-md-6">
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
                  <label for="description">Description</label>
                  <textarea name="description" class="form-control" id="description" cols="" rows="5" placeholder="Description"></textarea>
                </div>
              </div>
            </div>
          <!-- /.card-body -->
        
            <div class="card-footer d-flex justify-content-center">
              <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
            </div>
        </form>
        </div>
        <div class="col-12 col-md-3 mt-3">
          <div class="my-3 text-center">
            <div style="text-center">
              <img class="rounded-circle image-fluid" style="width: 200px;height: 200px;" src="{{ asset($user->image) }}" alt="images">
            </div> 
          </div>
          <div class="p-2 text-center">
            <h4 style="text-align: center"> {{$user->name}} </h4>
          </div>
        </div>
        </div>
    </div>
  </div>
  <!-- /.container-fluid -->
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