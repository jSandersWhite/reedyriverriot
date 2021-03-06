
<!--Main Navigation-->
<header class="black">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/riot.png') }}" class="header-img d-none d-sm-block">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item d-block d-sm-none">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Store</a>
                        <a class="dropdown-item" href="https://www.paypal.me/reedyriverriot" target="_blank">Donate</a>
                    </div>
                </li>
            </ul>
            <a href="{{ route('join') }}" class="text-uppercase btn btn-green black btn-sm">Join the Riot</a><br>
            <div class="d-flex justify-content-center-lg">
                <a href="https://www.facebook.com/reedyriverriot" target="_blank"><i class="fab fa-facebook p-2"></i></a> 
                <a href="https://instagram.com/reedyriverriot" target="_blank"><i class="fab fa-instagram p-2"></i></a> 
                <a href="https://www.twitter.com/GVLRiot" target="_blank"><i class="fab fa-twitter p-2"></i></a> 
            </div>
        </div>
    </div>
    </nav>
</header>
    