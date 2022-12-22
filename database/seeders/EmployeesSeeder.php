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
            'name' => "Никита",
            'surname' => "Шабанов",
            'patronymic' => "Сергеевич",
            'phone_number' => "89367772146",
            'passport' => "20 44 162250",
            'job' => 1,
            'salary' => 1000000,
        ]);
    }
}