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
        \DB::table('employees')->insert([
            'name' => "Nikita",
            'surname' => "Shabanov",
            'patronymic' => "Sergeevich",
            'phone_number' => "89991231212",
            'passport' => "Russian Federation",
            'job' => 1,
            'salary' => 100000,
        ]);
    }
}