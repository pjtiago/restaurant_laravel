<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Models\Post;

class PostsController extends Controller
{

    public function index()
    {
        return view('blog::posts.index', [
            'posts' => Post::with(
                'user',
                'postCategory',
                'visible',
                'highlight'
            )->paginate(15)]
        );
    }

    public function create()
    {
        return view('blog::posts.create', [
            'boolean_options' => BooleanOption::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
