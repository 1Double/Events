<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('event_cats')->insert([
            'name' => "Концерт",
        ]);
        \DB::table('event_cats')->insert([
            'name' => "Мюзикл",
        ]);
    }
}
