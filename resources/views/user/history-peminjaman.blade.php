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
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">History Peminjaman</div>

                <div class="card-body">

                  <!-- <div class="input-group justify-content-center">
                    <input type="text" class="form-control" placeholder="Cari Buku">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button">Cari</button>
                    </div>
                  </div> -->

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">RB</th>
                        <th scope="col">Tgl Peminjaman</th>
                        <th scope="col">Lama Peminjaman</th>
                        <th scope="col">Denda</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tindak Lanjut</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><a href="{{route('pinjam-buku')}}">Ayat-Ayat Cinta</a></td>
                        <td>RB Mesin</td>
                        <td>29 Mei 2018</td>
                        <td>3 hari</td>
                        <td>-</td>
                        <td><span style="color:green">Sedang Dipinjam</span></td>
                        <td><button class="btn btn-raised btn-info" onclick="perpanjang()">Perpanjang</button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td><a href="{{route('pinjam-buku')}}">Ayat-Ayat Cinta</a></td>
                        <td>RBTC</td>
                        <td>29 Mei 2018</td>
                        <td>3 hari</td>
                        <td>-</td>
                        <td><span style="color:orange">Tunggu konfirmasi perpanjangan</span></td>
                        <td><fieldset disabled><button type="button" class="btn btn-raised btn-info">Perpanjang</button></fieldset></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td><a href="{{route('pinjam-buku')}}">Ayat-Ayat Cinta</a></td>
                        <td>RBTC</td>
                        <td>3 Mei 2018</td>
                        <td style="color:red">4 hari</td>
                        <td>Rp. 1000</td>
                        <td><span style="color:grey">Sudah Dikembalikan</span></td>
                        <td><fieldset disabled><button type="button" class="btn btn-raised btn-info">Perpanjang</button></fieldset></td>
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
    message: "Kirim permintaan perpanjangan ke RB terkait?",
    buttons: {
        confirm: {
            label: 'Ya',
            className: 'btn-success'
        },
        cancel: {
            label: 'Tidak',
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
