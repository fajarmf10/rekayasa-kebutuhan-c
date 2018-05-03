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
                <div class="card-header">Ayat-Ayat Cinta</div>

                <div class="card-body">
                    <img src="{{asset('images/aac.jpg')}}" alt="Ayat-Ayat Cinta" class="img-fluid">
                    <hr>
                    <strong>Peminjam:</strong><p>Fajar Maulana Firdaus</p>
                    <strong>Lama Durasi:</strong><p>2 bulan</p>
                    <br><br>
                    <div class="row justify-content-center">
                      <button class="btn btn-primary" onclick="forward()">Forward to Supplier</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
function forward(){
  bootbox.alert("Successfully forwarded to supplier!", function(){
    location.href = "/home";
  });
}
@endsection
