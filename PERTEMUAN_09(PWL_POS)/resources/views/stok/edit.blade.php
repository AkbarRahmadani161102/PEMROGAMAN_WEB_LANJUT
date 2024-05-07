@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
<form method="POST" action="{{ url('/stok/'.$stok->stok_id) }}">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="barang_id" class="col-1 control-label col-form-label">Pilih Barang</label>
        <div class="col-3">
            <select name="barang_id" id="barang_id" class="form-control" required>
                <option value="">- Pilih Barang -</option>
                @foreach ($products as $product)
                    <option value="{{ $product->barang_id }}">{{ $product->barang_nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="user_id" class="col-1 control-label col-form-label">Pilih User</label>
        <div class="col-3">
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">- Pilih User -</option>
                @foreach ($users as $user)
                    <option value="{{ $user->user_id }}">{{ $user->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="tanggal" class="col-1 control-label col-form-label">Tanggal</label>
        <div class="col-3">
            <input type="date" class="form-control" id="stok_tanggal" name="stok_tanggal" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok_jumlah" class="col-1 control-label col-form-label">Jumlah Barang</label>
        <div class="col-3">
            <input type="number" class="form-control" id="stok_jumlah" name="stok_jumlah" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-11">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <a class="btn btn-sm btn-default ml-1" href="{{ url('stok') }}">Kembali</a>
        </div>
    </div>
</form>
@endsection