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
                <li><b><a href="{{route('permintaan-peminjaman')}}">Cek Permintaan Peminjaman</a></b></li>
                <li><a href="{{route('daftar-peminjaman')}}">Daftar Peminjaman</a></li>
                @endrole

                @role('supplier')
                <li><a href="{{route('stok-buku')}}">Stok Buku</a></li>
                <li><a href="{{route('cek-permintaan-buku')}}">Cek Permintaan Buku</a></li>
                @endrole

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Permintaan Peminjaman</div>

                <div class="card-body">
                  <li><a href="{{route("single-permintaan")}}">Peminjaman Buku Ayat-Ayat Cinta</a></li>
                  <li><a href="{{route("single-permintaan")}}">Memperpanjang Buku Theory of Everything</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
