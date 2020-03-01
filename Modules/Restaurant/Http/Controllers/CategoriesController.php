<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\Restaurant\Http\Models\Category;
use Modules\Restaurant\Http\Requests\Categories\StoreRequest;
use Modules\Restaurant\Http\Requests\Categories\UpdateRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('restaurant::categories.index', ['categories' => Category::with('visible')->paginate(15)]);
    }

    public function create()
    {
        return view('restaurant::categories.create');
    }

    public function store(StoreRequest $request, Category $model): RedirectResponse
    {
        $model->create($request->all());

        return redirect()->route('restaurant.category.index')->withStatus(__('restaurant::lang.category_create_message'));
    }

    public function edit(Category $category)
    {
        return view('restaurant::categories.edit', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->all());

        return redirect()->route('restaurant.category.index')->withStatus(__('restaurant::lang.category_updated_message'));
    }

    public function destroy(Category $model): RedirectResponse
    {
        try {
            $model->delete();
        } catch (\Exception $e) {
            return redirect()->route('restaurant.category.index')->withErrors(__('restaurant::lang.category_fail_to_delete_message'));
        }

        return redirect()->route('restaurant.category.index')->withStatus(__('restaurant::lang.category_delete_message'));
    }
}
