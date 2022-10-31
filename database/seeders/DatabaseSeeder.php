<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      /* $this->call([
           ServiceCategorySeeder::class
       ]); */

       $this->call([
        ProductSeeder::class
    ]);
      // \App\Models\Service::factory(20)->create();
     // \App\Models\Product::factory(10)->create();
    }
}
