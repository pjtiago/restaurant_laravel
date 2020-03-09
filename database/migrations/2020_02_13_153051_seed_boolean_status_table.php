<?php

use App\MigratorSeeder\CustomMigration;
use Illuminate\Support\Facades\DB;

class SeedBooleanStatusTable extends CustomMigration
{
    public function up()
    {
        $data = [
            [
                'id' => 0,
                'name' => 'Inactive',
                'translation' => 'inactive',
            ],
            [
                'id' => 1,
                'name' => 'Active',
                'translation' => 'active',
            ],
        ];

        $this->insert($data, 'boolean_status');
    }

    public function down()
    {
        DB::table('boolean_status')->delete();
    }
}
