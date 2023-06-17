<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Customer::create([
        //     'nama' => 'Angga Ganendra',
        //     'email' => 'anggag@gmail.com',
        //     'alamat' => 'Surabaya'
        // ]);

        // Customer::create([
        //     'nama' => 'John Wick',
        //     'email' => 'john@gmail.com',
        //     'alamat' => 'Sidoarjo'
        // ]);

        Customer::factory()->count(10)->create();
    }
}
