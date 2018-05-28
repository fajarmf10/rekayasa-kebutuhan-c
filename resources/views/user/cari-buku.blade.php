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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cari Buku</div>

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
                        <th scope="col">Author</th>
                        <th scope="col">Available at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ayat-Ayat Cinta</td>
                        <td>Habiburrahman El Shirazy</td>
                        <td>RBTC, RB Mesin, RB Sipil</td>
                        <td><button class="btn btn-raised btn-success" onclick="forward()">Pinjam</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Sang Pemimpi</td>
                        <td>Andrea Hirata</td>
                        <td>RBTC</td>
                        <td><button type="button" class="btn btn-raised btn-success">Pinjam</button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Supernova 3: Petir</td>
                        <td>Dewi Lestari</td>
                        <td>RB Sipil</td>
                        <td><button type="button" class="btn btn-raised btn-success">Pinjam</button></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Chrisye: Sebuah Memoar Musikal</td>
                        <td>Alberthiene Endah</td>
                        <td>RB Lingkungan</td>
                        <td><button type="button" class="btn btn-raised btn-success">Pinjam</button></td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Ranah 3 Warna</td>
                        <td>Ahmad Fuadi</td>
                        <td>RB Kimia</td>
                        <td><button type="button" class="btn btn-raised btn-success">Pinjam</button></td>
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
