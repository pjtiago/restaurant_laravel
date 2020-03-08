<?php
namespace Modules\Restaurant\Repositories\Category;

use App\Models\BooleanOption;
use Illuminate\Database\Eloquent\Collection;
use Modules\Restaurant\Http\Models\Category;
use Modules\Restaurant\Services\Restaurant\DBContract as RestaurantServiceContract;
use Modules\Restaurant\Repositories\Category\Contract as CategoryRepositoryContract;

class Repository implements CategoryRepositoryContract, RestaurantServiceContract
{
    public function getVisibleWithProducts(): Collection
    {
        return Category::with(self::RELATION_VISIBLE)
                ->with([self::RELATION_PRODUCTS => function($query) {
                    $query->where('products.fk_visible', '=', BooleanOption::KEY_YES);
                }
            ])
            ->where(self::FIELD_VISIBLE, '=', BooleanOption::KEY_YES)
            ->get();
    }
}
