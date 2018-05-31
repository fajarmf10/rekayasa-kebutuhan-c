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
                <div class="card-header">Detail Pinjam Buku</div>

                <div class="card-body">
                    <!-- <img src="{{asset('images/aac.jpg')}}" alt="Ayat-Ayat Cinta" class="img-fluid"> -->
                    <img src="{{asset('images/aac.jpg')}}" class="rounded mx-auto d-block" alt="aac" width=50%>
                    <hr>
                    <!-- <strong>Peminjam :</strong><p>Fajar Maulana Firdaus</p> -->
                    <!-- <strong>Lama Durasi :</strong><p>3 hari</p> -->
                    <strong>Dipinjam Oleh :</strong><p>RBTC, RB Mesin, RBSI</p>
                    <strong>ID Buku :</strong><p>B00123</p>
                    <strong>Judul Buku :</strong><p>Ayat-Ayat Cinta</p>
                    <strong>Pengarang :</strong><p>Habiburrahman El Shirazy</p>
                    <strong>Penerbit :</strong><p>Republika</p>
                    <strong>Deskripsi :</strong><p>Novel karangan Habiburrahman El Shirazy ini, sangat laku di pasaran. Kisah seorang pria yang sedang menempuh studi di Kairo dan harus dihadapkan dengan beberapa persoalan cinta yang pelik, wajib untuk dimiliki remaja.</p>
                    <!-- <strong>Tersedia di :</strong><p>RBTC</p> -->
                    <strong>Lama Peminjaman :</strong><p>Maksimal 3 hari</p>
                    <strong>Denda Harian :</strong><p>Rp. 1000</p>
                    <br><br>
                    <div class="row justify-content-center">
                      <a href="{{route('stok-buku')}}"><button class="btn btn-primary" onclick="">Kembali</button></a>
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
    location.href = "/cari-buku";
  });
}
@endsection
