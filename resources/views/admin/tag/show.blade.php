@extends('admin.backEndLayout.layout')
@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"> View Tag Page</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">View Tag Page</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  <div class="my-2 mr-4" style="overflow: hidden" > <a class="btn btn-primary p-3" style="float: right" href=" {{ route('tag.index') }} ">Back</a> </div>
    <div class="card card-body mx-4">
      <table class="table table-bordered">
        <tbody>
         <tr>
          <th style="width: 250px">Tag Title</th>
          <td>{{$tag->name}}</td>
         </tr>
         <tr>
          <th style="width: 250px">Tag Slug</th>
          <td>{{$tag->slug}}</td>
         </tr>
         <tr>
          <th style="width: 250px">Author Name</th>
          {{-- <td>{{$tag->user_id}}</td> --}}
         </tr>
         <tr>
          <th style="width: 250px">Tag Description</th>
          <td>{!! $tag->description !!}</td>
         </tr>
        </tbody>
        
      </table>
    </div>
@endsection