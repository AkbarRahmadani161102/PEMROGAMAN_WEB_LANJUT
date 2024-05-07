@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Level</th>
                        <th>Nama Level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $level->level_id }}</td>
                        <td>{{ $level->level_kode }}</td>
                        <td>{{ $level->level_nama }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ url('level') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection