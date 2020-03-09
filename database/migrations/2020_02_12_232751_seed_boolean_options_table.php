<?php

use App\MigratorSeeder\CustomMigration;
use Illuminate\Support\Facades\DB;

class SeedBooleanOptionsTable extends CustomMigration
{
    public function up()
    {
        $data = [
            [
                'id' => 0,
                'name' => 'No',
                'translation' => 'no',
            ],
            [
                'id' => 1,
                'name' => 'Yes',
                'translation' => 'yes',
            ],
        ];

        $this->insert($data, 'boolean_options');
    }

    public function down()
    {
        DB::table('boolean_options')->delete();
    }
}
