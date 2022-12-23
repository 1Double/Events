<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('events')->insert([
            'name' => "Дискотека 90-х",
            'date' => "2022-12-28",
            'tickets' => 150,
            'performers' => 1,
            'equipments' => 1,
            'staff' => 1,
            'event_cat_id' => 1,
        ]);
    }
}
