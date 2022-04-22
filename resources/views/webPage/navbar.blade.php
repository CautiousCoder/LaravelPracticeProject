<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href=" {{ route('home') }} "><h2>Sixteen <em>Clothing</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach ($navcategories as $item)
                <li class="nav-item" style="margin: 0px 0px;">
                    <a class="nav-link" href="{{ route('productCategory', $item->slug) }}"> {{ $item->name }}
                    </a>
                </li> 
                @endforeach        
            </ul>
        </div>
        </div>
    </nav>
</header>
    
