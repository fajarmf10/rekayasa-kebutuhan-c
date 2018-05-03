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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Peminjaman</div>

                <div class="card-body">

                  <div class="input-group justify-content-end">
                    <input type="text" class="form-control" placeholder="Search by Book Name">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                  </div>

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">Tgl Kembali</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="">1</a></th>
                        <td>Ayat-Ayat Cinta</td>
                        <td>Fajar Maulana Firdaus</td>
                        <td>19-02-2018</td>
                        <td>22-02-2018</td>
                        <td><span style="color: red">Denda</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="">2</a></th>
                        <td>Sang Pemimpi</td>
                        <td>Fajar Maulana Firdaus</td>
                        <td>19-04-2018</td>
                        <td>10-05-2018</td>
                        <td><span style="color: green">Dipinjam</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="">3</a></th>
                        <td>Theory of Everything</td>
                        <td>Fajar Maulana Firdaus</td>
                        <td>01-05-2018</td>
                        <td>10-05-2018</td>
                        <td><span style="color: blue">Diperpanjang</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row justify-content-center">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
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
@endsection
