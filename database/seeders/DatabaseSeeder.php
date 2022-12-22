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
        
            
            
            //Foreign keys
            PaymentStatusSeeder::class,
            TicketSeeder::class,

            JobsSeeder::class,
            EmployeesSeeder::class,

            DrinkCatSeeder::class,
            DrinkSeeder::class,
        ]);
    }
}
