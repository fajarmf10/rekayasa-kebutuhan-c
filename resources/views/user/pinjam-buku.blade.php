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
                <div class="card-header">Pinjam Buku</div>

                <div class="card-body">
                  <form role="form" action="daftar-pinjam.php?notif=pinjam" method="post">
                    <div class="box-body">
                    <div class="form-group has-feedback">
                          <label>Judul Buku</label>
                          <input type="text" class="form-control" name="tanggal_kursus" value="Ayat-Ayat Cinta" disabled></div>
                      <div class="form-group">
                          <label>Tempat Pinjam</label>
                          <select class="form-control" name="tempat_pinjam">
                            <option>RBTC</option>
                            <option>RB Mesin</option>
                            <option>RB Sipil</option>
                          </select>
                      </div>  
                      <div class="form-group has-feedback">
                        <label>Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggal_kursus"></div>
                      <div class="form-group has-feedback">
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="button" class="btn btn-raised btn-success" onclick="forward()">Pinjam</button><br><br><b><a href="{{route('cari-buku')}}" onclick="return confirm('Apakah anda yakin ingin batal pinjam buku?')">Batal Pinjam</a><b>
                    </div>
                  </form>
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
    message: "Apakah kamu yakin ingin meminjam buku?",
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
          location.href= "/cari-buku";
        }
    }
  });
}
@endsection
