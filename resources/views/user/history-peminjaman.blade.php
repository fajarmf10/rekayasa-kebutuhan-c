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
                <li>Cek Permintaan Peminjaman</li>
                <li>Daftar Peminjaman</li>
                @endrole

                @role('supplier')
                <li>Stok Buku</li>
                <li>Cek Permintaan Buku</li>
                @endrole

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">History Peminjaman</div>

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
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ayat-Ayat Cinta</td>
                        <td>Habiburrahman El Shirazy</td>
                        <td><span style="color:green">Sedang Dipinjam</span></td>
                        <td><button class="btn btn-raised btn-info" onclick="perpanjang()">Perpanjang</button><button class="btn btn-raised btn-danger" onclick="kembalikan()">Kembalikan</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Sang Pemimpi</td>
                        <td>Andrea Hirata</td>
                        <td><span style="color:orange">Pending</span></td>
                        <td><fieldset disabled><button type="button" class="btn btn-raised btn-info">Perpanjang</button><button class="btn btn-raised btn-danger" onclick="forward()">Kembalikan</button></fieldset></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Supernova 3: Petir</td>
                        <td>Dewi Lestari</td>
                        <td><span style="color:blue">Sudah Dikembalikan</span></td>
                        <td><fieldset disabled><button type="button" class="btn btn-raised btn-info">Perpanjang</button><button class="btn btn-raised btn-danger" onclick="forward()">Kembalikan</button></fieldset></td>
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
function kembalikan(){
  bootbox.confirm({
    message: "Requested to return for this book?",
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
function perpanjang(){
  bootbox.confirm({
    message: "Requested the extension for this book?",
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
