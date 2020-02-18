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
}
