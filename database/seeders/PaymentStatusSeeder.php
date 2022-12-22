<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('payment_statuses')->insert([
            'name' => "Оплачен",
        ]);
        \DB::table('payment_statuses')->insert([
            'name' => "Неоплачен",
        ]);
        \DB::table('payment_statuses')->insert([
            'name' => "Ждет оплаты",
        ]);
    }
}
