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
            MusicianSeeder::class,
            ParticipantSeeder::class,
            
            //Foreign keys

            EventCatSeeder::class,
            EventSeeder::class,
            
            EquipmentCatSeeder::class,
            EquipmentSeeder::class,

            PaymentStatusSeeder::class,
            TicketSeeder::class,

            JobsSeeder::class,
            EmployeesSeeder::class,

            DrinkCatSeeder::class,
            DrinkSeeder::class,
            EventMusicianSeeder::class,
            EventEquipmentSeeder::class,
            EventEmployeeSeeder::class,
        ]);
    }
}
