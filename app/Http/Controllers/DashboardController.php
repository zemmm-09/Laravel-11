<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\User;
use App\Models\Produk;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    $totalProduk = Produk::count();
    $totalPelanggan = Pelanggan::count();

    $historiPenjualan = Penjualan::orderBy('created_at', 'desc')->take(5)->get(); 

    return view('home.dashboard',
        compact(
        'totalProduk', 
        'totalPelanggan',
        'historiPenjualan'));
    }
}
