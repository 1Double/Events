<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tickets')->insert([
            'place' => "СЦКА",
            'event_date' => "2022-12-25",
            'price' => 7000,
            'event_id' => 1,
            'user_id' => 3,
            'payment_status' => 1,
        ]);
    }
}
