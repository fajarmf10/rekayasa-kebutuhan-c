@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">Menu</div>
            <div class="card-body">
              <ul>
                @role('user')
                <li><b><a href="{{route('cari-buku')}}">Cari Buku</a></b></li>
                <li><a href="{{route('history-peminjaman')}}">History Peminjaman</a></li>
                @endrole

                @role('librarian')
                <li><a href="{{route('permintaan-peminjaman')}}">Cek Permintaan Peminjaman</a></li>
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
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Cari Buku</div>

                <div class="card-body">

                  <!-- <div class="col-md-9"> -->
                    <div class="input-group">
                      <div class="dropdown">
                        <div class="form-group">
                          <label>Filter:</label>
                          <select class="" name="tempat_pinjam">
                            <option>Kategori Buku</option>
                            <option>Judul</option>
                            <option>Lama Peminjaman</option>
                            <option>Denda Harian</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="input-group justify-content-center">
                      <input type="text" class="form-control" placeholder="Cari Buku">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Cari</button>
                      </div>
                    </div>
                  <!-- </div> -->


                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Tersedia di</th>
                        <th scope="col">Maksimal Peminjaman</th>
                        <th scope="col">Denda Harian</th>
                        <!-- <th scope="col">Denda Harian</th>
                        <th scope="col">Lama Peminjaman</th> -->
                        <th scope="col">Tindak Lanjut</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Agama</td>
                        <td><a href="{{route('pinjam-buku')}}">Ayat-Ayat Cinta</a></td>
                        <td>Habiburrahman El Shirazy</td>
                        <td>RBTC</td>
                        <td>3 hari</td>
                        <td>1000/hari</td>
                        <td><a href="{{route('pinjam-buku')}}"><button class="btn btn-raised btn-success" onclick="">Pinjam</button></a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Agama</td>
                        <td><a href="{{route('pinjam-buku')}}">Ayat-Ayat Cinta</a></td>
                        <td>Habiburrahman El Shirazy</td>
                        <td>RB Mesin</td>
                        <td>4 hari</td>
                        <td>500/hari</td>
                        <td><a href="{{route('pinjam-buku')}}"><button class="btn btn-raised btn-success" onclick="">Pinjam</button></a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Agama</td>
                        <td><a href="{{route('pinjam-buku')}}">Ayat-Ayat Cinta</a></td>
                        <td>Habiburrahman El Shirazy</td>
                        <td>RBTC</td>
                        <td>3 hari</td>
                        <td>1000/hari</td>
                        <td><a href="{{route('pinjam-buku')}}"><button class="btn btn-raised btn-success" onclick="">Pinjam</button></a></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Agama</td>
                        <td><a href="{{route('pinjam-buku')}}">Ayat-Ayat Cinta</a></td>
                        <td>Habiburrahman El Shirazy</td>
                        <td>RB Sipil</td>
                        <td>5 hari</td>
                        <td>2000/hari</td>
                        <td><a href="{{route('pinjam-buku')}}"><button class="btn btn-raised btn-success" onclick="">Pinjam</button></a></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Agama</td>
                        <td><a href="{{route('pinjam-buku')}}">Ayat-Ayat Cinta</a></td>
                        <td>Habiburrahman El Shirazy</td>
                        <td>RB Mesin</td>
                        <td>4 hari</td>
                        <td>500/hari</td>
                        <td><a href="{{route('pinjam-buku')}}"><button class="btn btn-raised btn-success" onclick="">Pinjam</button></a></td>
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
function forward(){
  bootbox.confirm({
    message: "Do you requesting to loan this book?",
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result==true){
          location.href= "/home";
        }
    }
  });
}
@endsection
