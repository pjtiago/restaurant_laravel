<?php

namespace Modules\Restaurant\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RestaurantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();

        // $this->call("OthersTableSeeder");
        $i= 0;
        do{
            DB::table('tables')->insert([
                'name' => "mesa $i",
                'n_sits' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }while($i < 20);
    }
}
