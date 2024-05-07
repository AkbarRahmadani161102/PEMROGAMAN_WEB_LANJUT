@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
          <a class="btn btn-sm btn-primary mt-1" href="{{ url('penjualan/create') }}">Tambah</a>
      </div>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>Penjualan ID</th>
                    <th>User ID</th>
                    <th>Pembeli</th>
                    <th>Kode Penjualan</th>
                    <th>Tanggal Penjualan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as $penjualan)
                    <tr>
                        <td>{{ $penjualan->penjualan_id }}</td>
                        <td>{{ $penjualan->user_id }}</td>
                        <td>{{ $penjualan->pembeli }}</td>
                        <td>{{ $penjualan->penjualan_kode }}</td>
                        <td>{{ $penjualan->penjualan_tanggal }}</td>
                        <td>
                            <a href="{{ url('penjualan', $penjualan->penjualan_id) }}" class="btn btn-info btn-sm ">Details</a>
                            <a href="{{ url('penjualan', $penjualan->penjualan_id. '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                            <form method="POST" action="{{ url('penjualan', $penjualan->penjualan_id) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?')">
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
