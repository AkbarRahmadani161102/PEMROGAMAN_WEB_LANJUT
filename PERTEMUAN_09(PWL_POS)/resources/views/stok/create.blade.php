@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Stok</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('stok') }}">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <div class="form-group row">
                                <label for="barang_id" class="col-md-4 col-form-label text-md-right">Barang</label>

                                <div class="col-md-6">
                                    <select id="barang_id" class="form-control" name="barang_id" required>
                                        <option value="">Pilih Barang</option>
                                        @foreach ($products as $b)
                                            <option value="{{ $b->barang_id }}">{{ $b->barang_nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">User</label>

                                <div class="col-md-6">
                                    <select id="user_id" class="form-control" name="user_id" required>
                                        <option value="">Pilih User</option>
                                        @foreach ($users as $u)
                                            <option value="{{ $u->user_id }}">{{ $u->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stok_tanggal" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                                <div class="col-md-6">
                                    <input id="stok_tanggal" type="date" class="form-control" name="stok_tanggal" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stok_jumlah" class="col-md-4 col-form-label text-md-right">Jumlah</label>

                                <div class="col-md-6">
                                    <input id="stok_jumlah" type="number" class="form-control" name="stok_jumlah" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection