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
                    <th>ID</th>
                    <td>{{ $category->kategori_id }}</td>
                </tr>
                <tr>
                    <th>Kode Kategori</th>
                    <td>{{ $category->kategori_kode }}</td>
                </tr>
                <tr>
                    <th>Nama Kategori</th>
                    <td>{{ $category->kategori_nama }}</td>
                </tr>
            </table>
            <a href="{{ url('category') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection