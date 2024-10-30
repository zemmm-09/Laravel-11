@extends('layouts.main')
@section('title', 'produk')
@section('content')

<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Produk</h3>
                            <a class="btn btn-warning" href="/produk">Kembali</a>
                        </div>
                        <div class="card-body">
                    <form action="/produk/{{$produk->id}}/update" method="post">
                        @csrf
                        <label for="" class="form-label">Gambar</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="file"
                                class="form-control"
                                name="Gambar"
                                value="{{ $produk->Gambar }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                            
                        <label for="" class="form-label">Nama Produk</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="NamaProduk"
                                value="{{ $produk->NamaProduk }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>

                        <label for="" class="form-label">Harga</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="Harga"
                                value="{{ $produk->Harga }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>

                        <label for="" class="form-label">Stok</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="Stok"
                                value="{{ $produk->Stok }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection