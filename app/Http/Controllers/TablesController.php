<?php

namespace App\Http\Controllers;

use App\Model\Table;

class TablesController extends Controller
{

    public function index()
    {
        return Table::all();
    }



    public function store(Table $model)
    {
        $model->create(['name' => '1', 'n_sits' => 10]);

        return "tomates";
    }
}
