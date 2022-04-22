<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap') }}/css/bootstrap.min.css" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    @section('style')

    @show
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/all.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/frontEnd.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.css">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @section('navbar')

    @show

    <!-- Page Content -->
    @section('content')

    @show

    <footer style="background-color: #232323;">
        <div class="container">
            <div class="inner-content" style="color: white">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="mb-3" style="text-align: center;">About</h2>
                        @if($setting->description) <p> {{$setting->description}} </p> @endif
                    </div>
                    <div class="col-md-2 mb-4">
                        <ul class="list-group mt-4">
                            <li class="p-3 footer-item"><a style="color: #cacaca" class="p-3 link" target="_blank"
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="p-3 footer-item"><a style="color: #cacaca" class="p-3" target="_blank"
                                    href="{{ route('products') }}">Products</a></li>
                            <li class="p-3 footer-item"><a style="color: #cacaca" class="p-3" target="_blank"
                                    href="{{ route('about') }}">About Us</a></li>
                            <li class="p-3 footer-item"><a style="color: #cacaca" class="p-3" target="_blank"
                                    href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-group mt-4">
                            @foreach ($categories as $item)
                            <li class="p-3 footer-item">
                                <a style="color: #cacaca" href="{{ route('productCategory', $item->slug) }}"
                                    target="_blank">
                                    {{ $item->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-2" style="text-align: center;">Contact Us</h2>
                        <div class="mt-2">
                            @if($setting->facebook)<a class="p-1" href="{{$setting->facebook}}" target="_blank"
                                role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook"><i
                                    class="fab fa-facebook-square"></i></a>@endif
                            @if($setting->twitter)<a class="p-1" href="{{$setting->twitter}}" target="_blank"
                                role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter"><i
                                    class="fa fa-twitter-square"></i></a>@endif
                            @if($setting->linkedin)<a class="p-1" href="{{$setting->linkedin}}" target="_blank"
                                role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="LinkedIn"><i
                                    class="fa fa-linkedin"></i></a>@endif
                            @if($setting->instagram)<a class="p-1" href="{{$setting->instagram}}" target="_blank"
                                role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"><i
                                    class="fa fa-instagram-square"></i></a>@endif
                            @if($setting->telegram)<a class="p-1" href="{{$setting->telegram}}" target="_blank"
                                role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Telegram"><i
                                    class="fab fa-telegram"></i></a>@endif
                            @if($setting->whatsapp)<a class="p-1" href="{{$setting->whatsapp}}" target="_blank"
                                role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="What's App"><i
                                    class="fab fa-whatsapp-square"></i></a>@endif
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <p>&copy;&nbsp;copyright&nbsp; @if($setting->copyright) <a style="color: #eb4d4b"
                            rel="nofollow noopener" href="{{ $setting->copyright }}"
                            target="_blank">{{ $setting->name }}</a>@endif
                        All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery') }}/jquery.min.js"></script>
    <script src="{{ asset('bootstrap') }}/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    @section('js')

    @show
    <script src="{{ asset('frontEnd') }}/js/custom.js"></script>
    <script src="{{ asset('frontEnd') }}/js/owl.js"></script>
    <script src="{{ asset('frontEnd') }}/js/slick.js"></script>
    <script src="{{ asset('frontEnd') }}/js/isotope.js"></script>
    <script src="{{ asset('frontEnd') }}/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>