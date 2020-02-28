<?php

use App\MigratorSeeder\CustomMigration;
use Modules\Restaurant\Http\Models\Category;

class SeedProductsTable extends CustomMigration
{
    public function up()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'product1',
                'description' => 'product description',
                'price' => 100.0,
                'photo' => 'photo1',
                'fk_category_id' => 1,
                'fk_visible' => 1,
                'fk_highlight' => 2,
            ],
            [
                'id' => 2,
                'name' => 'product2',
                'description' => 'product description',
                'price' => 101.0,
                'photo' => 'photo2',
                'fk_category_id' => 1,
                'fk_visible' => 1,
                'fk_highlight' => 2,
            ]
        ];

        $this->insert($data, 'products');
    }

    public function down()
    {
        DB::table('categories')->delete();
    }
}
