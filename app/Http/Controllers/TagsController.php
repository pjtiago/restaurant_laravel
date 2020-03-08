<?php
namespace App\Http\Controllers;

class TagsController extends Controller
{

    public function index()
    {
        return view('tags.index');
    }
}
