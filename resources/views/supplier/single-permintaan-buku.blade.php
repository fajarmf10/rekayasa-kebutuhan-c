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
                <li><a href="{{route('permintaan-peminjaman')}}">Cek Permintaan Buku</a></li>
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
                <div class="card-header">Permintaan dari Rako Prijanto untuk Buku Ayat-Ayat Cinta</div>

                <div class="card-body">
                    <img src="{{asset('images/aac.jpg')}}" alt="Ayat-Ayat Cinta" class="img-fluid">
                    <hr>
                    <strong>Peminjam:</strong><p>Fajar Maulana Firdaus</p>
                    <strong>Tempat Pinjam:</strong><p>Ruang Baca Teknik Computer-Informatika ITS</p>
                    <strong>Lama Durasi:</strong><p>2 bulan</p>
                    <br><br>
                    <div class="row justify-content-center">
                      <button class="btn btn-primary" onclick="approve()">Approve Loan</button><span>&nbsp;&nbsp;</span>
                      <button class="btn btn-danger" onclick="decline()">Decline Loan</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
function approve(){
  bootbox.alert("Successfully approved the loan!", function(){
    location.href = "/home";
  });
}
function decline(){
  bootbox.alert("Successfully declined the loan!", function(){
    location.href = "/home";
  });
}
@endsection
