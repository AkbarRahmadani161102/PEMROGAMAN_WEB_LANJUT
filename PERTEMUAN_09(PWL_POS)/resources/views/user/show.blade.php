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
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Kode Level</th>
                        <th>Picture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->Nama }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->level->level_nama }}</td>
                        <td><img src="{{asset('storage/files/'.$user->profilepicture)}}" style="max-width: 500px" alt="" srcset=""></td>

                    </tr>
                </tbody>
            </table>
            <a href="{{ url('user') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection