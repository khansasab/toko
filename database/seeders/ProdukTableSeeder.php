<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
    [
        'nama' => 'Indomie Goreng',
        'id_kategori' => 1,
        'qty' => 12,
        'harga_beli' => 50000,
        'harga_jual' => 54000,
    ],
    [
        'nama' => 'Susu Ultra',
        'id_kategori' => 1,
        'qty' => 20,
        'harga_beli' => 8000,
        'harga_jual' => 10000,
    ],
]);

    }
}
