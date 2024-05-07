@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('category/'. $category->kategori_id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="kategori_kode">Kode Kategori</label>
                    <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" value="{{ $category->kategori_kode }}" required>
                </div>
                <div class="form-group">
                    <label for="kategori_nama">Nama Kategori</label>
                    <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" value="{{ $category->kategori_nama }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('category') }}" class="btn btn-default">Batal</a>
            </form>
        </div>
    </div>
@endsection