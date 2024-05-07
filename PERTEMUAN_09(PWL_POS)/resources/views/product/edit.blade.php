@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
            <form method="POST" action="{{ url('product/'. $product->barang_id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="barang_kode">Kode Barang</label>
                    <input type="text" class="form-control" id="barang_kode" name="barang_kode" value="{{ $product->barang_kode }}" required>
                </div>
                <div class="form-group">
                    <label for="barang_nama">Nama Barang</label>
                    <input type="text" class="form-control" id="barang_nama" name="barang_nama" value="{{ $product->barang_nama }}" required>
                </div>
                <div class="form-group">
                    <label for="kategori_id">Kategori</label>
                    <select class="form-control" id="kategori_id" name="kategori_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->kategori_id }}" {{ $product->kategori_id == $category->kategori_id? 'selected' : '' }}>{{ $category->kategori_nama }}</option>
                        @endforeach
                    </select>
</div>
                <div class="form-group">
                    <label for="harga_beli">Harga Beli</label>
                    <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="{{ $product->harga_beli }}" required>
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="{{ $product->harga_jual }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('product') }}" class="btn btn-default">Batal</a>
            </form>
        </div>
    </div>
@endsection