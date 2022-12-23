<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('equipments')->insert([
            'name' => "Yamaha H801",
            'status' => "Свободен",
            'equipment_cat_id' => 1,
        ]);
    }
}
