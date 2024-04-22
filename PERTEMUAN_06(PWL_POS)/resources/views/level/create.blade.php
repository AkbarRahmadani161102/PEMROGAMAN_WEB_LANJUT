@extends('layout.app')

@section('subtitle', 'Level')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Tambah Level')

@section('content')
<div class="container-fluid">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Buat Level baru</h3>
    </div>

    <form action="../kategori" method="post">
      <div class="card-body">
        <div class="form-group">
          <label for="kodeKategori">Kode Level</label>
          <input type="text" name="kode_level" id="kode_level" placeholder="Masukkan Kode Level, ex: ADM"
            class="form-control">
        </div>
        <div class="form-group">
          <label for="kodeKategori">Nama Level</label>
          <input type="text" name="level_nama" id="level_nama" placeholder="Masukkan nama level" class="form-control">
        </div>

        <div class=" card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection