<?php
namespace Modules\Blog\Services\PostCategories;

use Modules\Blog\Http\Models\PostCategory;

class Update
{
    public function save(PostCategory $product, array $data)
    {
        $product->update([
            'name' => $data['name'],
            'fk_visible' => $data['fk_visible'],
        ]);
    }
}
