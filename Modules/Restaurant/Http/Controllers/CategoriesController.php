<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Restaurant\Http\Models\Category;
use Modules\Restaurant\Http\Models\Reservation;

class CategoriesController extends Controller
{
    public function index(Category $model)
    {
        return view('restaurant::categories.index', ['categories' => $model->paginate(15)]);
    }

    public function create()
    {
        return view('restaurant::categories.create');
    }
}
