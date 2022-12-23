<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('event_employees')->insert([
            "event_id" => 1,
            "employee_id" => 1,
        ]);
    }
}
