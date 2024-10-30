<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('home.produk.index', compact('produk'));
    }

    public function create()
    {
        $produk = Produk::all();
        return view('home.produk.tambah', compact('produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "Gambar" => 'required',
            "NamaProduk" => 'required',
            "Harga" => 'required|numeric',
            "Stok" => 'required|numeric'
        ]);
        
        $image = $request->file('Gambar');
        $image->storeAs('/products', $image->hashName(), 'public');

        Produk::create([
            "Gambar" => $image->hashName(),
            "NamaProduk" => $request->NamaProduk,
            "Harga" => $request->Harga,
            "Stok" => $request->Stok
        ]);
        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('home.produk.edit', compact('produk'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            "Gambar" => 'required',
            "NamaProduk" => 'required|numeric',
            "Harga" => 'required|numeric',
            "Stok" => 'required|numeric',
        ]);
        $produk = Produk::find($id);

        if ($request->hasFile('Gambar')) {

            $image = $request->file('Gambar');
            $image->storeAs('/products', $image->hashName(), 'public');
    

            Storage::delete('public/products/' . $produk->Gambar);

            $produk->update([
                "Gambar" => $image->hashName(),
                "NamaProduk" => $request->NamaProduk,
                "Harga" => $request->Harga,
                "Stok" => $request->Stok
            ]);
    } else {
        $produk->update([
            "NamaProduk" => $request->NamaProduk,
            "Harga" => $request->Harga,
            "Stok" => $request->Stok
        ]);
    }

        return redirect('/produk')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }
}


