<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventMusicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('event_musicians')->insert([
            "event_id" => 1,
            "musician_id" => 1,
        ]);
    }
}
