@extends('admin.backEndLayout.layout')
@section('content')

<div class="container-fluid">
    <div class="row py-4">
      <div class="col-sm-6">
        <h1 class="m-0">user Page</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">user</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="card">
    <div class="d-flex justify-content-between align-items-center mb-2">
      <div class="mt-2 ml-2">
        <h3 class="card-title bg-primary rounded p-3">user list</h3>
      </div>
      <div class="justify-content-end mr-2">
        <a href="{{route('user.create')}}" role="button" class="btn btn-primary p-3">Create user list</a>
      </div>
    </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table table-striped">
          <thead>
            <tr class="bg-primary rounded p-3">
              <th style="width: 10px">No</th>
              <th>user Name</th>
              <th>Image</th>
              <th>Description</th>
              <th>Post Count</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            @if($users->count())
              @foreach ($users as $user)
              <tr>
              <td>{{ $i++ }}</td>
              <td>{{$user->name}}</td>
              <td>
                <div style="max-width: 100px;max-height: 70px;overflow: hidden">
                  <img style="max-width: 100px;max-height: 70px;" src="{{ $user->image }}" alt="images">
                </div>  
              </td>
              <td>{{$user->description}}</td>
              <td>{{$user->id}}</td>
              <td>
                <div class="d-flex">
                  <a href="{{route('user.edit',[$user->id])}}" class="btn btn-primary mr-1" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-edit"></i><a>
                  <a href="{{route('user.show',[$user->id])}}" class="btn btn-success mr-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show"><i class="fas fa-eye"></i><a>
                    <form action="{{route('user.destroy',[$user->id])}}" method="POST">
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
                No users list found.
              </td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    
    </div>
  
  </div><!-- /.container-fluid -->
@endsection