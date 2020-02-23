<?php
namespace App\MigratorSeeder;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CustomMigration extends Migration
{
    protected function insert(array $data, string $tableName)
    {
        DB::table($tableName)->insert($data);
    }

    protected function insertWithModel(array $data, string $className)
    {
        foreach ($data as $row) {
            $className::create($row);
        }
    }
}
