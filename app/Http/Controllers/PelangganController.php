<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('home.pelanggan.index', compact('pelanggan'));
    }

    public function create()
    {
        return view('home.pelanggan.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NamaPelanggan' => 'required',
            'NomorTelepon' => 'required',
            'Alamat' => 'required',
        ]);

        Pelanggan::create([
            'NamaPelanggan' =>$request->NamaPelanggan,
            'NomorTelepon' =>$request->NomorTelepon,
            'Alamat' => $request->Alamat,
        ]);
        return redirect('/pelanggan');
    }

    public function show(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('home.pelanggan.edit', compact('pelanggan'));
    }
    
    public function update(Request $request, string $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update([
            'NamaPelanggan' =>$request->NamaPelanggan,
            'NomorTelepon' =>$request->NomorTelepon,
            'Alamat' => $request->Alamat,
        ]);
        return redirect('/pelanggan');
    }

    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/pelanggan');
    }
}
