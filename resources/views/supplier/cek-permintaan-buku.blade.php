@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Menu</div>
            <div class="card-body">
              <ul>
                @role('user')
                <li><a href="{{route('cari-buku')}}">Cari Buku</a></li>
                <li><a href="{{route('history-peminjaman')}}">History Peminjaman</a></li>
                @endrole

                @role('librarian')
                <li><a href="{{route('permintaan-peminjaman')}}">Cek Permintaan Peminjaman</a></li>
                <li><a href="{{route('daftar-peminjaman')}}">Daftar Peminjaman</a></li>
                @endrole

                @role('supplier')
                <li><a href="{{route('stok-buku')}}">Stok Buku</a></li>
                <li><b><a href="{{route('cek-permintaan-buku')}}">Cek Permintaan Buku</a></b></li>
                @endrole

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cek Permintaan Buku</div>

                <div class="card-body">
                  <li><a href="{{route("single-permintaan-buku")}}">Permintaan Buku Ayat-Ayat Cinta</a></li>
                  <li><a href="{{route("single-permintaan-buku")}}">Permintaan Buku Theory of Everything</a></li>
                  <li><a href="{{route("single-permintaan-buku")}}">Perpanjangan Peminjaman Buku Sang Pemimpi</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
