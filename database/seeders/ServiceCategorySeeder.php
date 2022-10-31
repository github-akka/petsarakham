<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name" => "CAT",
                "slug" => "cat",
                "image" => "cat.png"
            ],

            [
                "name" => "DOG",
                "slug" => "dog",
                "image" => "dog.png"
            ],

            [
                "name" => "BIRD",
                "slug" => "bird",
                "image" => "bird.png"
            ],

            [
                "name" => "RAT",
                "slug" => "rat",
                "image" => "rat.png"
            ],

            [
                "name" => "CHAMELEON",
                "slug" => "chameleon",
                "image" => "chameleon.png"
            ],
        ]);
    }
}
