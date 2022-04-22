@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@example.com" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                        </div>
                        {{-- <div class="form-group row"> 
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                            <div class="input-group col-md-8"> 
                                <input id="phone" type="text" 
                                    class="form-control @error('phone') is-invalid @enderror" name="phone" 
                                    value="{{ old('phone') }}" required autocomplete="phone" autofocus 
                                    placeholder="Phone Number"> 
                                @error('phone') 
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong> 
                                    </span> 
                                @enderror 
                            </div>
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                        </div>
                        <div class="form-group row"> 
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                            <div class="input-group col-md-8"> 

                                <div class="form-check"> 
                                    <input type="radio" autofocus class="form-check-input @error('gender') is-invalid @enderror" name="gender" value="Female"> 
                                    <label class="form-check-label">Female</label> 
                                </div> 
                                <div class="form-check ml-3"> 
                                    <input type="radio" autofocus class="form-check-input @error('gender') is-invalid @enderror" name="gender" value="Male"> 
                                    <label class="form-check-label"> Male</label> 
                                </div> 
                                @error('gender') 
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong> 
                                    </span> 
                                @enderror 
                            </div> 
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                        </div> 
                        <div class="form-group row"> 
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="input-group col-md-8">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" id="datepicker" data-provide="datepicker" name="dob"  class="form-control  @error('dob') is-invalid @enderror" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" placeholder="MM/DD/YY" data-mask="">
                            </div>
                            <!-- /.input group -->
                            @error('dob')
                                <span class="invalid-feedback" role="alert"> 
                                    <strong>{{ $message }}</strong> 
                                </span> 
                            @enderror 
                        
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                        </div>  --}}

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="New-Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm-Password" required autocomplete="new-password">
                            </div>
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('cssSec')
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    
@endsection

@section('jsSec')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
        $('#datepicker').datepicker(); 
    });
</script>
@endsection

