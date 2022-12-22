<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'patronymic' => Str::random(10),
            'phone_number' => Str::random(10),
            'passport' => Str::random(10),
            'job' => 10,
            'salary' => 100000,
        ]);
    }
}