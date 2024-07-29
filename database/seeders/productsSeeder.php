<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\products;
use Faker\Factory as Faker;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<15;$i++){
            products::create([
                'name'=>$faker->word,
                'img' => 'nike'. $i .'.webp',
                'description'=>$faker->sentence,
                'price'=>$faker->randomFloat(2,10,1000),
                'view'=>$faker->numberBetween(1, 100),
                'sold'=>$faker->numberBetween(1,100),
                'category_id'=>$faker->numberBetween(1,2),
                'brand_id'=>$faker->numberBetween(1,2)
            ]);
        }
    }
}
