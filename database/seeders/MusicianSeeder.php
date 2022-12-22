<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MusicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('musicians')->insert([
            'name' => "Майкл",
            'surname' => "Джозеф",
            'patronymic' => "Джейсон",
            'nickname' => "Prince",
            'phone_number' => "89777777777",
        ]);
    }
}
