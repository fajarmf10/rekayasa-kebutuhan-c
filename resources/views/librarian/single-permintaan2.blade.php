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
                <div class="card-header">Perpanjangan Buku Theory of Everything</div>

                <div class="card-body">
                    <!-- <img src="{{asset('images/aac.jpg')}}" alt="Ayat-Ayat Cinta" class="img-fluid"> -->
                    <img src="{{asset('images/toe.jpg')}}" class="rounded mx-auto d-block" alt="toe" width=50%>
                    <hr>
                    <strong>Peminjam :</strong><p>Fajar Maulana Firdaus</p>
                    <strong>Durasi Perpanjangan :</strong><p>2 hari</p>
                    <strong>ID Buku :</strong><p>B00100</p>
                    <strong>Judul Buku :</strong><p>Theory of Everything</p>
                    <strong>Pengarang :</strong><p>Stephen Hawking</p>
                    <strong>Penerbit :</strong><p>Mizan</p>
                    <strong>Deskripsi :</strong><p>Buku ini menceritakan tentang bagaimana sebuah teori ditemukan. Stephen Hawking merupakan ilmuwan yang sangat berbakat dalam menemukan teori.</p>
                    <br><br>
                    <div class="row justify-content-center">
                      <button class="btn btn-primary" onclick="forward()">Teruskan ke Ruang Baca Tujuan</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
function forward(){
  bootbox.alert("Sukses diteruskan ke Ruang Baca yang dituju!", function(){
    location.href = "/home";
  });
}
@endsection
