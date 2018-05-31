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
                <li><a href="{{route('pengaturan-rb')}}">Pengaturan RB</a></li>
                @endrole

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Permintaan dari Rako Prijanto untuk Buku Ayat-Ayat Cinta</div>

                <div class="card-body">
                    <img src="{{asset('images/aac.jpg')}}" class="rounded mx-auto d-block" alt="aac" width=50%>
                    <hr>
                    <strong>Peminjam :</strong><p>Fajar Maulana Firdaus</p>
                    <strong>Lama Durasi :</strong><p>3 hari</p>
                    <strong>ID Buku :</strong><p>B00123</p>
                    <strong>Judul Buku :</strong><p>Ayat-Ayat Cinta</p>
                    <strong>Pengarang :</strong><p>Habiburrahman El Shirazy</p>
                    <strong>Penerbit :</strong><p>Republika</p>
                    <strong>Deskripsi :</strong><p>Novel karangan Habiburrahman El Shirazy ini, sangat laku di pasaran. Kisah seorang pria yang sedang menempuh studi di Kairo dan harus dihadapkan dengan beberapa persoalan cinta yang pelik, wajib untuk dimiliki remaja.</p>
                    <br><br>
                    <div class="row justify-content-center">
                      <button class="btn btn-raised btn-primary" onclick="approve()">Terima</button><span>&nbsp;&nbsp;</span>
                      <button class="btn btn-raised btn-danger" onclick="decline()">Tolak</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
function approve(){
  bootbox.alert("Sukses menerima permintaan peminjaman!", function(){
    location.href = "/home";
  });
}
function decline(){
  bootbox.alert("Sukses menolak permintaan peminjaman!", function(){
    location.href = "/home";
  });
}
@endsection
