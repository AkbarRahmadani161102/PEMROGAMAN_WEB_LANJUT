@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('product/create') }}">Tambah</a>
            </div>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $products)
                        <tr>
                            <td>{{ $products->barang_kode }}</td>
                            <td>{{ $products->barang_nama }}</td>
                            <td>{{ $products->category->kategori_nama }}</td>
                            <td>{{ $products->harga_beli }}</td>
                            <td>{{ $products->harga_jual }}</td>
                            <td>
                                <a href="{{ url('product', $products->barang_id) }}" class="btn btn-sm btn-default">Details</a>
                                <a href="{{ url('product', $products->barang_id. '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                                <form method="POST" action="{{ url('product', $products->barang_id) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection