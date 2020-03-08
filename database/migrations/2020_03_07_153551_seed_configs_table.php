<?php

use App\MigratorSeeder\CustomMigration;
use App\Models\Config;

class SeedConfigsTable extends CustomMigration
{
    public function up()
    {
        $data = [
            [
                'id' => 1,
                'module' => 'core',
                'name' => 'company_name',
                'value' => 'Feliciano',
            ],
            [
                'id' => 2,
                'module' => 'core',
                'name' => 'company_address',
                'value' => 'Example address',
            ],
            [
                'id' => 3,
                'module' => 'core',
                'name' => 'company_country',
                'value' => 'Portugal',
            ],
            [
                'id' => 4,
                'module' => 'core',
                'name' => 'company_phone',
                'value' => '9999-00000',
            ],
            [
                'id' => 5,
                'module' => 'core',
                'name' => 'company_email',
                'value' => 'example@email.com',
            ]
        ];

        $this->insert($data, 'configs');
    }

    public function down()
    {
        DB::table('configs')->delete();
    }
}
