<?php
namespace Modules\Restaurant\Services\Product;

use App\Helpers\UploadFile;
use Modules\Restaurant\Http\Models\Product;

class Update
{
    public function save(Product $product, array $data)
    {
        $product->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'fk_category_id' => $data['fk_category_id'],
            'fk_visible' => $data['fk_visible'],
            'fk_highlight' => $data['fk_highlight'],
            'photo' => isset($data['photo']) ? UploadFile::upload($data['photo'], 'products') : null,
        ]);
    }
}
