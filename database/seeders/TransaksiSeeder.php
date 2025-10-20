<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // buat user dummy
    DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('password'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // masukkan transaksi
    DB::table('transaksi')->insert([
        [
            'user_id' => 1,
            'produk_id' => 1,
            'jumlah' => 2,
            'total_harga' => 300000,
            'status' => 'selesai',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'user_id' => 1,
            'produk_id' => 2,
            'jumlah' => 1,
            'total_harga' => 150000,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
