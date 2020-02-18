<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Routing\Controller;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('restaurant::client_template.index');
    }

    public function about()
    {
        return view('restaurant::client_template.about');
    }

    public function menu()
    {
        return view('restaurant::client_template.menu');
    }

    public function blog()
    {
        return view('restaurant::client_template.blog');
    }
    public function blogSingle()
    {
        return view('restaurant::client_template.blog-single');
    }
    public function contact()
    {
        return view('restaurant::client_template.contact');
    }
    public function reservation()
    {
        return view('restaurant::client_template.reservation');
    }
}
