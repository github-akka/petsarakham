<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name" => "CAT",
                "slug" => "cat",
                "tagline" => "for cat",
                "service_category_id" => "1",
                "price" => "120",
                "image" => "service_1.jpg",
                "thumbnail" => "service_1.jpg",
                "description" => "ห้องสำหรับฝากแมว",
                

            ],

            [
                "name" => "DOG",
                "slug" => "dog",
                "tagline" => "for dog",
                "service_category_id" => "2",
                "price" => "150",
                "image" => "service_2.jpg",
                "thumbnail" => "service_2.jpg",
                "description" => "ห้องสำหรับฝากสุนัข",
                
                

            ],
            [
                "name" => "BIRD",
                "slug" => "bird",
                "tagline" => "for bird",
                "service_category_id" => "3",
                "price" => "80",
                "image" => "service_3.jpg",
                "thumbnail" => "service_3.jpg",
                "description" => "ห้องสำหรับฝากนก",
                
                

            ],
            [
                "name" => "RAT",
                "slug" => "rat",
                "tagline" => "for rat",
                "service_category_id" => "4",
                "price" => "120",
                "image" => "service_4.jpg",
                "thumbnail" => "service_4.jpg",
                "description" => "ห้องสำหรับฝากแมว",
                
                

            ],
            [
                "name" => "CHAMELEON",
                "slug" => "chameleon",
                "tagline" => "for chameleon",
                "service_category_id" => "5",
                "price" => "120",
                "image" => "service_5.jpg",
                "thumbnail" => "service_5.jpg",
                "description" => "ห้องสำหรับฝากแมว",
                
                

            ],
         
            [
                "name" => "POULTRY",
                "slug" => "poultry",
                "tagline" => "for poultry",
                "service_category_id" => "6",
                "price" => "120",
                "image" => "service_6.jpg",
                "thumbnail" => "service_6.jpg",
                "description" => "ห้องสำหรับฝากแมว",
                
                

            ]

        ]);
    }
}
