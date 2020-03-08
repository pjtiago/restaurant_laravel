<?php

namespace Modules\Restaurant\Http\Controllers;

use App\Models\BooleanOption;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Modules\Restaurant\Services\Product\Create as CreateProductService;
use Modules\Restaurant\Services\Product\Update as UpdateProductService;

use Modules\Restaurant\Http\Models\Category;
use Modules\Restaurant\Http\Models\Product;
use Modules\Restaurant\Http\Requests\Products\StoreRequest;
use Modules\Restaurant\Http\Requests\Products\UpdateRequest;

class ProductsController extends Controller
{
    public function index()
    {
        return view('restaurant::products.index', ['products' => Product::with('visible', 'highlight', 'category')->paginate(15)]);
    }

    public function create()
    {
        return view('restaurant::products.create', [
            'categories' => Category::all(),
            'boolean_options' => BooleanOption::all(),
        ]);
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $this->getCreateProductService()->save($request->all());

        return redirect()->route('restaurant.product.index')->withStatus(__('restaurant::lang.product_create_message'));
    }

    public function edit(Product $product)
    {
        $product->with('visible', 'highlight', 'category');

        return view('restaurant::products.edit', [
            'categories' => Category::all(),
            'product' => $product,
            'boolean_options' => BooleanOption::all(),
        ]);
    }

    public function update(UpdateRequest $request, Product $product): RedirectResponse
    {
        $this->getUpdateProductService()->save($product, $request->all());

        return redirect()->route('restaurant.product.index')->withStatus(__('restaurant::lang.product_updated_message'));
    }

    public function destroy(Product $product): RedirectResponse
    {
        try {
            $product->delete();
        } catch (\Exception $e) {
            return redirect()->route('restaurant.product.index')->withErrors(__('restaurant::lang.product_fail_to_delete_message'));
        }

        return redirect()->route('restaurant.product.index')->withStatus(__('restaurant::lang.product_delete_message'));
    }

    private function getCreateProductService(): CreateProductService
    {
        return App::make('CreateProductService');
    }

    private function getUpdateProductService(): UpdateProductService
    {
        return App::make('UpdateProductService');
    }
}
