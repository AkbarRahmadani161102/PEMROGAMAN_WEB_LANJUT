@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('penjualan/'. $penjualan->penjualan_id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="user_id">User ID</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $penjualan->user_id }}" required>
                </div>
                <div class="form-group">
                    <label for="pembeli">Pembeli</label>
                    <input type="text" class="form-control" id="pembeli" name="pembeli" value="{{ $penjualan->pembeli }}" required>
                </div>
                <div class="form-group">
                    <label for="penjualan_kode">Kode Penjualan</label>
                    <input type="text" class="form-control" id="penjualan_kode" name="penjualan_kode" value="{{ $penjualan->penjualan_kode }}" required>
                </div>
                <div class="form-group">
                    <label for="penjualan_tanggal">Tanggal Penjualan</label>
                    <input type="date" class="form-control" id="penjualan_tanggal" name="penjualan_tanggal" value="{{ $penjualan->penjualan_tanggal }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('penjualan') }}" class="btn btn-default">Batal</a>
            </form>
        </div>
    </div>
@endsection
