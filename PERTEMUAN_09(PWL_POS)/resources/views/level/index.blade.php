@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
          <a class="btn btn-sm btn-primary mt-1" href="{{ url('level/create') }}">Tambah</a>
      </div>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Level</th>
                    <th>Nama Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($level as $levelItem)
                    <tr>
                        <td>{{ $levelItem->level_id }}</td>
                        <td>{{ $levelItem->level_kode }}</td>
                        <td>{{ $levelItem->level_nama }}</td>
                        <td>
                            <a href="{{ url('level', $levelItem->level_id) }}" class="btn btn-sm btn-default">Details</a>
                            <a href="{{ url('level', $levelItem->level_id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                            <form method="POST" action="{{ url('level', $levelItem->level_id) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?')">
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