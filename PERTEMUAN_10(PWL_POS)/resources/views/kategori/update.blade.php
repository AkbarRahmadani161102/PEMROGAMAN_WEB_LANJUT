@extends('layout.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Create')

@section('content')
<div class="container-fluid">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Update</h3>
    </div>

    <form action="/kategori/update/{{$data->kategori_id}}" method="post">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="kategori_kode">Kode Kategori</label>
          <input type="text" name="kategori_kode" id="kategori_kode" placeholder="Untuk makanan, contoh: MKN"
            class="form-control" value="{{$data->kategori_kode}}">
        </div>
        <div class="form-group">
          <label for="kategori_kode">Nama Kategori</label>
          <input type="text" name="kategori_nama" id="kategori_nama" placeholder="Nama" class="form-control" value="{{$data->kategori_nama}}">
        </div>

        <div class=" card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection