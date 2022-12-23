<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('event_equipments')->insert([
            "event_id" => 1,
            "equipment_id" => 1,
        ]);
    }
}
