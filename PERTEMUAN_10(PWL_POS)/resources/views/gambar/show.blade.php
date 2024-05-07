@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <divclass="card">
                    <div class="card-header">Gambar</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $gambar->nama }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{ $gambar->deskripsi }}</td>
                            </tr>
                            <tr>
                                <th>File</th>
                                <td><img src="{{ asset('images/'.$gambar->file) }}" width="100px"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection