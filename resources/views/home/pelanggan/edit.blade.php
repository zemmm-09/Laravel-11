@extends('layouts.main')
@section('title', 'pelanggan')
@section('content')

<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Pelanggan</h3>
                            <a class="btn btn-warning" href="/pelanggan">Kembali</a>
                        </div>
                        <div class="card-body">
                    <form action="/pelanggan/{{$pelanggan->id}}/update" method="post">
                        @csrf
                        <label for="" class="form-label">Nama Pelanggan</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="NamaPelanggan"
                                value="{{ $pelanggan->NamaPelanggan }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                            
                        <label for="" class="form-label">Nomor Telepon</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="number"
                                class="form-control"
                                name="NomorTelepon"
                                value="{{ $pelanggan->NomorTelepon }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>

                        <label for="" class="form-label">Alamat</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="Alamat"
                                value="{{ $pelanggan->Alamat }}"
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