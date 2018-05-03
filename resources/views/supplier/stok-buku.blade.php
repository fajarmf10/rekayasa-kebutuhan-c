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
                <li><a href="{{route('daftar-peminjaman')}}">Daftar Peminjaman</a></li>
                @endrole

                @role('supplier')
                <li><b><a href="{{route('stok-buku')}}">Stok Buku</a></b></li>
                <li><a href="{{route('cek-permintaan-buku')}}">Cek Permintaan Buku</a></li>
                @endrole

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stok Buku</div>

                <div class="card-body">
                  <div class="row justify-content-center">
                    <button type="button" class="btn btn-primary" onclick="addbook()">Add New Book</button>
                  </div>
                  <br>
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
                        <th scope="col">Jml Peminjam</th>
                        <th scope="col">Jml Tersedia</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ayat-Ayat Cinta</td>
                        <td>Habiburrahman El-Shirazy</td>
                        <td>21</td>
                        <td>4</td>
                        <td><span class="row justify-content-center"><button class="btn btn-link" onclick="addStock()"><i class="fa fa-plus-circle" aria-hidden="true"></i></span></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Sang Pemimpi</td>
                        <td>Andrea Hirata</td>
                        <td>10</td>
                        <td>0</td>
                        <td><span class="row justify-content-center"><button class="btn btn-link"><i class="fa fa-plus-circle" aria-hidden="true"></i></span></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Theory of Everything</td>
                        <td>Stephen Hawking</td>
                        <td>1</td>
                        <td>9</td>
                        <td><span class="row justify-content-center"><button class="btn btn-link"><i class="fa fa-plus-circle" aria-hidden="true"></i></span></td>
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
function addStock(){
  bootbox.confirm({
    message: "Do you want to add stock of this book?",
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
