<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrinkCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('drink_cats')->insert([
            'name' => "Крепкоалкогольное",
        ]);
    }
}
