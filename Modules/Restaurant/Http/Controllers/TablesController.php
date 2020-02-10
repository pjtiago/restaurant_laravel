<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Restaurant\Http\Models\Table;

class TablesController extends Controller
{
    public function index()
    {
        return view('restaurant::index');
    }

    public function store(Table $model)
    {
        $model->create(['name' => '1', 'n_sits' => 10]);

        return "Test";
    }
}
