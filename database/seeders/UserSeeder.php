<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => "Shnickser",
            'surname' => "Shabanov",
            'email' => "nshbnv@gmail.com",
            'middle_name' => "Sergeevich",
            'phone' => "8929292929",
            'payment' => "11223344",
        ]);
    //     \DB::table('users')->insert([
    //         'name' => "Vnickser",
    //         'surname' => "Nikulin",
    //         'middle_name' => "Sergeevich",
    //         'phone' => "90388288",
    //         'payment' => "11223345",
    //     ]);
    //     \DB::table('users')->insert([
    //         'name' => "Iboum",
            
    //         'surname' => "Ibodulloev",
    //         'middle_name' => "Hurshedovich",
    //         'phone' => "83848392891",
    //         'payment' => "11223346",
    //     ]);

    //     \DB::table('users')->insert([
    //         'name' => "Dark_Livsey",
    //         'surname' => "Fedotov",
    //         'middle_name' => "Alexovich",
    //         'phone' => "89292923322",
    //         'payment' => "1123132",
    // ]);
    }
}
