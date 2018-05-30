@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
          <div class="card">
            <div class="card-header">Menu</div>
            <div class="card-body">
              <ul>
                @role('user')
                <li><a href="{{route('cari-buku')}}">Cari Buku</a></li>
                <li><b><a href="{{route('history-peminjaman')}}">History Peminjaman</b></a></li>
                @endrole

                @role('librarian')
                <li><a href="{{route('permintaan-peminjaman')}}">Cek Permintaan Peminjaman</a></li>
                <li><b><a href="{{route('daftar-peminjaman')}}">Daftar Peminjaman</a></b></li>
                @endrole

                @role('supplier')
                <li><a href="{{route('stok-buku')}}">Stok Buku</a></li>
                <li><a href="{{route('cek-permintaan-buku')}}">Cek Permintaan Buku</a></li>
                @endrole

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Daftar Peminjaman</div>

                <div class="card-body">

                  <div class="input-group justify-content-end">
                    <input type="text" class="form-control" placeholder="Cari Berdasarkan Judul Buku">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button">Cari</button>
                    </div>
                  </div>

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Pinjam</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">Tgl Kembali</th>
                        <th scope="col">Lama Peminjaman</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jumlah Denda</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="">1</a></th>
                        <td>PJ0001</td>
                        <td>Ayat-Ayat Cinta</td>
                        <td>Fajar Maulana Firdaus</td>
                        <td>19-02-2018</td>
                        <td>23 -02-2018</td>                        
                        <td><span style="color: red">4 hari</span></td>
                        <td><span style="color: red">Denda</span></td>
                        <td>Rp. 1.000</td>
                        <td><button class="btn btn-raised btn-primary" onclick="kembalikan()">Kembalikan</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="">2</a></th>
                        <td>PJ0002</td>
                        <td>Organisasi Komputer</td>
                        <td>Fajar Maulana Firdaus</td>
                        <td>19-05-2018</td>
                        <td>-</td>
                        <td><span style="color: black">-</span></td>
                        <td><span style="color: black">-</span></td>
                        <td>Rp. 0</td>
                        <td><button class="btn btn-raised btn-primary" onclick="terima()">Terima</button><button class="btn btn-raised btn-danger" onclick="tolak()">Tolak</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="">3</a></th>
                        <td>PJ0003</td>
                        <td>Sang Pemimpi</td>
                        <td>Fajar Maulana Firdaus</td>
                        <td>19-05-2018</td>
                        <td>22-05-2018</td>
                        <td><span style="color: black">3 hari</span></td>
                        <td><span style="color: green">Dipinjam</span></td>
                        <td>Rp. 0</td>
                        <td><button class="btn btn-raised btn-primary" onclick="kembalikan()">Kembalikan</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="">4</a></th>
                        <td>PJ0004</td>
                        <td>Theory of Everything</td>
                        <td>Fajar Maulana Firdaus</td>
                        <td>01-05-2018</td>
                        <td>03-05-2018</td>
                        <td><span style="color: black">2 hari</span></td>
                        <td><span style="color: blue">Diperpanjang</span></td>
                        <td>Rp. 0</td>
                        <td><button class="btn btn-raised btn-primary" onclick="terima()">Terima</button></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row justify-content-center">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                    </ul>
                  </nav>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
function terima(){
  bootbox.alert("Permintaan diterima!", function(){
    location.href = "/home";
  });
}
function tolak(){
  bootbox.alert("Berhasil ditolak!", function(){
    location.href = "/home";
  });
}
function kembalikan(){
  bootbox.alert("Berhasil dikembalikan!", function(){
    location.href = "/home";
  });
}
@endsection
