<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanModel;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PenjualanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Manajemen Penjualan',
            'list' => ['Home', 'Penjualan']
        ];

        $page = (object) [
            'title' => 'Daftar penjualan yang terdaftar dalam sistem',
        ];

        $activeMenu = 'penjualan';

        $penjualan = PenjualanModel::all();

        return view('penjualan.index', compact('breadcrumb', 'page', 'penjualan', 'activeMenu'));
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Penjualan',
            'list' => ['Home', 'Penjualan', 'Tambah'],
        ];

        $page = (object) [
            'title' => 'Tambah penjualan baru'
        ];

        $activeMenu = 'penjualan';

        return view('penjualan.create', compact('breadcrumb', 'page', 'activeMenu'));
    }

    public function list(Request $request)
    {
        $penjualan = PenjualanModel::all();

        return DataTables::of($penjualan)
            ->addColumn('aksi', function ($penjualan) {
                $btn = '<a href="' . url('/penjualan/' . $penjualan->penjualan_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/penjualan/' . $penjualan->penjualan_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/penjualan/' . $penjualan->penjualan_id) . '">' . csrf_field() . method_field('DELETE') . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'pembeli' => 'required|string',
            'penjualan_kode' => 'required|string|unique:t_penjualan',
            'penjualan_tanggal' => 'required|date',
        ]);

        PenjualanModel::create($request->all());

        return redirect('/penjualan')->with('success', 'Data Penjualan berhasil disimpan');
    }

    public function show(string $id)
    {
        $penjualan = PenjualanModel::find($id);

        if (!$penjualan) {
            return redirect('/penjualan')->with('error', 'Data Penjualan tidak ditemukan');
        }

        $breadcrumb = (object) [
            'title' => 'Detail Penjualan',
            'list' => ['Home', 'Penjualan', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Penjualan'
        ];

        $activeMenu = 'penjualan';

        return view('penjualan.show', compact('breadcrumb', 'page', 'penjualan', 'activeMenu'));
    }

    public function edit(string $id)
    {
        $penjualan = PenjualanModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Edit Penjualan',
            'list' => ['Home', 'Penjualan', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit Penjualan',
        ];

        $activeMenu = 'penjualan';

        return view('penjualan.edit', compact('breadcrumb', 'page', 'penjualan', 'activeMenu'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'pembeli' => 'required|string',
            'penjualan_kode' => 'required|string',
            'penjualan_tanggal' => 'required|date',
        ]);

        PenjualanModel::find($id)->update($request->all());

        return redirect('/penjualan')->with('success', 'Data Penjualan berhasil diubah');
    }

    public function destroy(string $id)
    {
        $penjualan = PenjualanModel::find($id);

        if (!$penjualan) {
            return redirect('/penjualan')->with('error', 'Data Penjualan tidak ditemukan');
        }

        try {
            $penjualan->delete();
            return redirect('/penjualan')->with('success', 'Data Penjualan berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect('/penjualan')->with('error', 'Data Penjualan gagal dihapus');
        }
    }
}
