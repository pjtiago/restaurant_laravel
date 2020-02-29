<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\Restaurant\Http\Models\Product;
use Modules\Restaurant\Http\Requests\Products\StoreRequest;

class ProductsController extends Controller
{
    public function index()
    {
        return view('restaurant::products.index', ['products' => Product::with('visible', 'highlight', 'category')->paginate(15)]);
    }

    public function create()
    {
        return view('restaurant::products.create');
    }

    public function store(StoreRequest $request, Product $model): RedirectResponse
    {
        $model->create($request->all());

        return redirect()->route('restaurant.product.index')->withStatus(__('Product successfully created.'));
    }
}
