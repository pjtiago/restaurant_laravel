<?php

use App\MigratorSeeder\CustomMigration;
use Illuminate\Support\Facades\DB;

class SeedBooleanOptionsTable extends CustomMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Yes',
                'translation' => 'yes',
            ],
            [
                'id' => 2,
                'name' => 'No',
                'translation' => 'no',
            ],
        ];

        $this->insert($data, 'boolean_options');
    }

    public function down()
    {
        DB::table('boolean_options')->delete();
    }
}
