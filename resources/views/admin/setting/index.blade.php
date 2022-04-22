@extends('admin.backEndLayout.layout')
@section('content')

<div class="container-fluid">
    <div class="row py-4">
        <div class="col-sm-6">
            <h1 class="m-0">Setting</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('setting.edit')}}" role="button"
                        class="btn btn-primary p-3">Edit</a></li>
                <li class="breadcrumb-item active">Setting</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="card">

        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">

                <tbody>
                    <tr>
                        <th style="width: 250px">Site Name </th>
                        <td>{{$setting->name}}</td>
                    </tr>
                    <tr>
                        <th style="width: 250px">Your E-mail</th>
                        <td>{{$setting->email}}</td>
                    </tr>
                    <tr>
                        <th style="width: 250px">Site Name </th>
                        <td>
                            @if({{$setting->facebook}})<a class="p-3" href="{{$setting->facebook}}"><i class="fab fa-facebook-square"></i></a>@endif
                            @if({{$setting->twitter}})<a class="p-3" href="{{$setting->twitter}}"><i class="fab fa-twitter-square"></i></a>@endif
                            @if({{$setting->linkedin}})<a class="p-3" href="{{$setting->linkedin}}"><i class="fab fa-linkedin"></i></a>@endif
                            @if({{$setting->instagram}})<a class="p-3" href="{{$setting->instagram}}"><i class="fab fa-instagram-square"></i></a>@endif
                            @if({{$setting->telegram}})<a class="p-3" href="{{$setting->telegram}}"><i class="fab fa-telegram"></i></a>@endif
                            @if({{$setting->whatsapp}})<a class="p-3" href="{{$setting->whatsapp}}"><i class="fab fa-whatsapp-square"></i></a>@endif
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 250px">About</th>
                        <td>@if({{$setting->description}}){{$setting->description}}@endif</td>
                    </tr>
                    <tr>
                        <th style="width: 250px">Copyright</th>
                        <td>@if({{$setting->copyright}}){{$setting->copyright}}@endif</td>
                    </tr>
                    <tr>
                        <td class="text-center p-3">
                            No settings list found.
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