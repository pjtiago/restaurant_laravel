<?php

namespace Modules\Restaurant\Http\Controllers;

use App\Models\Config;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Modules\Restaurant\Services\Restaurant\GetCategories;

class RestaurantController extends Controller
{
    /** @var array */
    private $data;

    public function __construct()
    {
        $configs = Config::query()->where('module', '=', 'core')->get();
        $configs = $configs->toArray();

        foreach ($configs as $config){
            $this->data[$config['name']] = $config['value'];
        }
    }

    public function index()
    {
        return view('restaurant::client_template.index', $this->data);
    }

    public function about()
    {
        return view('restaurant::client_template.about', $this->data);
    }

    public function menu()
    {
        return view('restaurant::client_template.menu',
            array_merge(['categories' => $this->getCategoriesService()->get()], $this->data)
        );
    }

    public function blog()
    {
        return view('restaurant::client_template.blog', $this->data);
    }
    public function blogSingle()
    {
        return view('restaurant::client_template.blog-single', $this->data);
    }
    public function contact()
    {
        return view('restaurant::client_template.contact', $this->data);
    }
    public function reservation()
    {
        return view('restaurant::client_template.reservation', $this->data);
    }

    private function getCategoriesService(): GetCategories
    {
        return App::make('RestaurantGetCategoriesService');
    }
}
