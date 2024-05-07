@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Gambar</div>

                    <div class="card-body">
                        <a href="{{ route('gambar.create') }}" class="btn btn-primary">Tambah Gambar</a>
                        <br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>File</th>
                                <th width="280px">Aksi</th>
                            </tr>
                            @foreach ($gambar as $gambars)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gambars->nama }}</td>
                                    <td>{{ $gambars->deskripsi }}</td>
                                    <td><img src="{{ asset('storage/files/'.$gambars->file) }}" width="100px"></td>
                                    <td>
                                        <form action="{{ route('gambar.destroy',$gambars->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('gambar.edit',$gambars->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection