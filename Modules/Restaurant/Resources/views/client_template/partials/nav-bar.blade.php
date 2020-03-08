<div class="py-1 bg-black top">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">{{$company_phone}}</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">{{$company_email}}</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                        <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">{{$company_name}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @yield('indexActivePage')"><a href="{{ route('restaurant.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item @yield('aboutActivePage')"><a href="{{ route('restaurant.about') }}" class="nav-link">About</a></li>
                <li class="nav-item @yield('menuActivePage')"><a href="{{ route('restaurant.menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item @yield('blogActivePage')"><a href="{{ route('restaurant.blog') }}" class="nav-link">Stories</a></li>
                <li class="nav-item @yield('contactActivePage')"><a href="{{ route('restaurant.contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item cta @yield('reservationActivePage')"><a href="{{ route('restaurant.reservation') }}" class="nav-link">Book a table</a></li>
            </ul>
        </div>
    </div>
</nav>
