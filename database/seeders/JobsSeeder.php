<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('jobs')->insert([
            'name' => "Генеральный Директор",
        ]);
        \DB::table('jobs')->insert([
            'name' => "Бухгалтер",
        ]);
        \DB::table('jobs')->insert([
            'name' => "Программист",
        ]);
    }
}
