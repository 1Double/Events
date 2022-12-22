<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call([
            EventSeeder::class,
            MusicianSeeder::class,
<<<<<<< HEAD
            UserSeeder::class,
=======
        
            
            
            //Foreign keys
            PaymentStatusSeeder::class,
            TicketSeeder::class,

            JobsSeeder::class,
            EmployeesSeeder::class,

            DrinkCatSeeder::class,
            DrinkSeeder::class,
>>>>>>> be8901c90ec21609f3c9933b6a9bf49e02b7a3c4
        ]);
    }
}
