<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    // CREATE (Tambah Produk)
    public function createProduk()
    {
        $produk = new Produk();
        $produk->nama = 'Mie Sedaap Goreng';
        $produk->id_kategori = 1;
        $produk->qty = 20;
        $produk->harga_beli = 48000;
        $produk->harga_jual = 52000;
        $produk->save();

        return "Produk berhasil ditambahkan!";
    }

    // UPDATE (Ubah Produk)
    public function updateProduk()
    {
        $produk = Produk::find(1); // ubah ID sesuai data kamu
        $produk->harga_jual = 55000;
        $produk->save();

        return "Produk berhasil diupdate!";
    }
}
