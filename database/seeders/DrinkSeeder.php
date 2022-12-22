<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('drinks')->insert([
            'name' => "Маргарита",
            'quanity' => 2000,
            'price' => 700,
            'drink_cat_id' => 1,
        ]);
    }
}
