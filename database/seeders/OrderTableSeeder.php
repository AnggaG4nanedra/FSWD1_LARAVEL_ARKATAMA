<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'customer_id' => 1,
            'tanggal_order' => '2023=05-05',
            'jumlah_total' => 15
        ]);

        Order::create([
            'customer_id' => 1,
            'tanggal_order' => '2023=05-05',
            'jumlah_total' => 15
        ]);
    }
}
