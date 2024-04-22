@extends('layout.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Create Kategori')

@section('content')
<div class="container-fluid">
  <div class="card card-primary">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="card-header">
      <h3 class="card-title">Buat kategori baru</h3>
    </div>
    <form action="/kategori" method="post">
      <div class="card-body">
        <div class="form-group">
          <label for="kodeKategori">Kode Kategori</label>
          <input type="text" name="kategori_kode" id="kategori_nama" placeholder="Untuk makanan, contoh: MKN"
            class="form-control @error('kategori_kode', 'postErrors') is-invalid @enderror">
          @error('kategori_kode')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="kodeKategori">Nama Kategori</label>
          <input type="text" name="kategori_nama" id="kategori_nama" placeholder="Nama"
            class="form-control @error('kategori_nama') is-invalid @enderror">
          @error('kategori_kode')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class=" card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection