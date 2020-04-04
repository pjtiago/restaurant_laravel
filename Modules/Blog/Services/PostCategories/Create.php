<?php
namespace Modules\Blog\Services\PostCategories;

use Modules\Blog\Http\Models\PostCategory;

class Create
{
    public function save(array $data)
    {
        PostCategory::create([
            'name' => $data['name'],
            'fk_visible' => $data['fk_visible'],
        ]);
    }
}
