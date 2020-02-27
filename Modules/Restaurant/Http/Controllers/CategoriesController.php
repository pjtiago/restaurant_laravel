<?php

namespace Modules\Restaurant\Http\Controllers;

use App\Helpers\UploadFile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\Restaurant\Http\Models\Category;
use Modules\Restaurant\Http\Requests\Categories\StoreRequest;

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

    public function store(StoreRequest $request, Category $model): RedirectResponse
    {
        $model->create($request->all());

        return redirect()->route('restaurant.category.index')->withStatus(__('Category successfully created.'));
    }
}
