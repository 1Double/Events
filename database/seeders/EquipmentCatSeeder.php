<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EquipmentCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('equipment_cats')->insert([
            'name' => "Аудио",
        ]);
        \DB::table('equipment_cats')->insert([
            'name' => "Видео",
        ]);
        \DB::table('equipment_cats')->insert([
            'name' => "Копьютеры",
        ]);
    }
}
