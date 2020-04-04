<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\BooleanOption;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Models\PostCategory;
use Modules\Blog\Http\Requests\PostCategories\StoreRequest;
use Modules\Blog\Http\Requests\PostCategories\UpdateRequest;

class PostCategoriesController extends Controller
{

    public function index()
    {
        return view('blog::post_categories.index', ['postCategories' => PostCategory::with('visible')->paginate(15)]);
    }

    public function create()
    {
        return view('blog::post_categories.create', [
            'boolean_options' => BooleanOption::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(StoreRequest $request, PostCategory $model)
    {
        $model->create($request->all());

        return redirect()->route('blog.post_category.index')->withStatus(__('blog::lang.post_category_create_message'));
    }

    public function edit(PostCategory $postCategory)
    {
        $postCategory->with('visible');

        return view('blog::post_categories.edit', [
            'postCategory' => $postCategory,
            'booleanOptions' => BooleanOption::orderBy('id', 'desc')->get(),
        ]);
    }

    public function update(UpdateRequest $request, PostCategory $postCategory)
    {
        $postCategory->update($request->all());

        return redirect()->route('blog.post_category.index')->withStatus(__('blog::lang.post_category_updated_message'));
    }

    public function destroy(PostCategory $model)
    {
        try {
            $model->delete();
        } catch (\Exception $e) {
            return redirect()->route('blog.post_category.index')->withErrors(__('blog::lang.post_category_fail_to_delete_message'));
        }

        return redirect()->route('blog.post_category.index')->withStatus(__('blog::lang.post_category_delete_message'));
    }
}
