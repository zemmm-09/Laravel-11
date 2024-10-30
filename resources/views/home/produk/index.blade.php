@extends('layouts.main')
@section('title', 'produk')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Produk Table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <a href="/produk/tambah" class="btn btn-info mx-3">Tambah Data</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stok</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($produk as $pr)
                      <tr>
                        <td> <h6 class="mb-2 text-sm m-2">{{ $loop->iteration }}</h6> </td>
                        <td class="text-center mb-2 text-sm m-2"><img src="/storage/products/{{ $pr->Gambar }}" width="150"></td>
                        <td> <p class="text-xs text-secondary mb-0">{{ $pr->NamaProduk }}</p></td>
                        <td> <p class="text-xs text-secondary mb-0">Rp. {{ number_format($pr->Harga) }}</p></td>
                        <td> <p class="text-xs text-secondary mb-0">{{ $pr->Stok }}</p></td>
                        <td class="align-middle text-center text-sm">
                          <a href="/produk/{{ $pr->id }}/show" class="badge badge-sm bg-gradient-success">
                            Edit
                          </a>
                          <a href="/produk/{{ $pr->id }}/delete" class="badge badge-sm bg-gradient-danger" onclick="return confirm('Yakin Mau Di Hapus?')">
                            Hapus
                          </a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@if (session('berhasil'))

<script>
  Swal.fire({
  title: "Berhasil!",
  text: "session('berhasil')",
  icon: "success"
});
</script>

@endif

@endsection
