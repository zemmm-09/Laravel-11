@extends('layouts.main')
@section('title', 'user')
@section('content')

<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data User</h3>
                            <a class="btn btn-warning" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                    <form action="/user/{{$user->id}}/update" method="post">
                        @csrf
                        <label for="" class="form-label">Nama User</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                value="{{ $user->name }}"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                            
                        <label for="" class="form-label">Email</label>
                        <div class="input-group input-group-outline mb-3">
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                value="{{ $user->email }}"
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