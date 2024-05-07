@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <tr>
                    <th>Kode Barang</th>
                    <td>{{ $product->barang_kode }}</td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td>{{ $product->barang_nama }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $product->category->kategori_nama }}</td>
                </tr>
                <tr>
                    <th>Harga Beli</th>
                    <td>{{ $product->harga_beli }}</td>
                </tr>
                <tr>
                    <th>Harga Jual</th>
                    <td>{{ $product->harga_jual }}</td>
                </tr>
            </table>
            <a href="{{ url('product') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection