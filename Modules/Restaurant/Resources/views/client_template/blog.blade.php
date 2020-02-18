@extends('restaurant::client_template.layouts.layout')

@section('content')
<div class="py-1 bg-black top">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">youremail@email.com</span>
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
        <a class="navbar-brand" href="index.html">Feliciano</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('restaurant.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('restaurant.about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('restaurant.menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item active"><a href="{{ route('restaurant.blog') }}" class="nav-link">Stories</a></li>
                <li class="nav-item"><a href="{{ route('restaurant.contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="{{ route('restaurant.reservation') }}" class="nav-link">Book a table</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url({{url('/client/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Blog</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ route('restaurant.blog-single') }}" class="block-20" style="background-image: url({{url('/client/images/image_1.jpg')}});">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ route('restaurant.blog-single') }}" class="block-20" style="background-image: url({{url('/client/images/image_2.jpg')}});">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ route('restaurant.blog-single') }}" class="block-20" style="background-image: url({{url('/client/images/image_3.jpg')}});">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ route('restaurant.blog-single') }}" class="block-20" style="background-image: url({{url('/client/images/image_4.jpg')}});">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ route('restaurant.blog-single') }}" class="block-20" style="background-image: url({{url('/client/images/image_5.jpg')}});">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ route('restaurant.blog-single') }}" class="block-20" style="background-image: url({{url('/client/images/image_6.jpg')}});">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters my-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
