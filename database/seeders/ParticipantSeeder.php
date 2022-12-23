<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('participants')->insert([
            'name' => "Майкл",
            'surname' => "Джозеф",
            'patronymic' => "Джейсон",
            'phone_number' => "89777777777",
        ]);
    }
}
