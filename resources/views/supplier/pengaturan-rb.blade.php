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
                <li><a href="{{route('stok-buku')}}">Stok Buku</a></li>
                <li><a href="{{route('cek-permintaan-buku')}}">Cek Permintaan Buku</a></li>
                <li><b><a href="{{route('pengaturan-rb')}}">Pengaturan RB</a></b></li>
                @endrole

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pengaturan RB</div>

                <div class="card-body">
                  <form role="form" action="daftar-buku.php?notif=tambah" method="post">
                    <div class="box-body">
                    <div class="form-group has-feedback">

                      <div class="form-group has-feedback">
                        <label>Kategori</label>
                        <select class="form-control">
                          <option>Tugas Akhir</option>
                          <option>Kategori 2</option>
                          <option>Kategori 3</option>
                          <option>Kategori 4</option>
                          <option>Kategori 5</option>
                        </select>
                      </div>

                      <div class="form-group has-feedback">
                        <label>Lama Peminjaman (hari)</label>
                        <input type="text" class="form-control" name="tanggal_kursus" value="">
                      </div>

                      <div class="form-group has-feedback">
                        <label>Denda Harian (rupiah)</label>
                        <input type="text" class="form-control" name="tanggal_kursus" value="">
                      </div>

                      <div class="box-footer">
                        <button type="button" class="btn btn-raised btn-success" onclick="atur()">Atur</button><br><br><b><a href="{{route('stok-buku')}}" onclick="return confirm('Apakah anda yakin ingin batal tambah buku?')">Batal</a><b>
                      </div>
                            
                    <!-- /.box-body -->

                  </form>
                  
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

function atur(){
  bootbox.confirm({
    message: "Apakah kamu yakin ingin mengupdate pengaturan RB?",
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
          location.href= "/pengaturan-rb";
        }
    }
  });
}
@endsection
