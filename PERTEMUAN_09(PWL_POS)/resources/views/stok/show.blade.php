@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Detail Stok</div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Barang</th>
                                <td>{{ $stok->product->barang_nama }}</td>
                            </tr>
                            <tr>
                                <th>User</th>
                                <td>{{ $stok->user->username }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{ $stok->stok_tanggal }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah</th>
                                <td>{{ $stok->stok_jumlah }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection