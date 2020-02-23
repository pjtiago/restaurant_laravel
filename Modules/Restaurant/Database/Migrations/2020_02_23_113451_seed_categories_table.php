<?php

use App\MigratorSeeder\CustomMigration;
use Modules\Restaurant\Http\Models\Category;

class SeedCategoriesTable extends CustomMigration
{
    public function up()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Breakfast',
            ]
        ];

        $this->insertWithModel($data, Category::class);
    }

    public function down()
    {
        DB::table('categories')->delete();
    }
}
