<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GambarModel;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class GambarController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Manajemen Gambar',
            'list' => ['Home', 'Gambar'],
        ];

        $page = (object) [
            'title' => 'Daftar gambar yang terdaftar dalam sistem',
        ];

        $activeMenu = 'gambar';

        $gambar = GambarModel::all();

        return view('gambar.index', compact('breadcrumb', 'page', 'gambar', 'activeMenu'));
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Gambar',
            'list' => ['Home', 'Gambar', 'Tambah'],
        ];

        $page = (object) [
            'title' => 'Tambah gambar baru',
        ];

        $activeMenu = 'gambar';

        return view('gambar.create', compact('breadcrumb', 'page', 'activeMenu'));
    }

    public function list(Request $request)
    {
        $gambar = GambarModel::all();

        return DataTables::of($gambar)
            ->addColumn('aksi', function ($gambar) {
                $btn = '<a href="' . url('/gambar/' . $gambar->gambar_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/gambar/' . $gambar->gambar_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/gambar/' . $gambar->gambar_id) . '">' 
                . csrf_field() . method_field('DELETE') . 
                '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\');">Hapus</button></form>' ;
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'file' => 'required',
        ]);

        
        $file= $request->file('file');
        $filename = Str::random(10).$file->getClientOriginalName();
        $file->storeAs('public/files/',$filename);
        $data['file'] = $filename;
        
        GambarModel::create($data);
        return redirect('/gambar')->with('success', 'Data Gambar berhasil disimpan');
    }

    public function show(string $id)
    {
        $gambar = GambarModel::find($id);

        if (!$gambar) {
            return redirect('/gambar')->with('error', 'Data Gambar tidak ditemukan');
        }

        $breadcrumb = (object) [
            'title' => 'Detail Gambar',
            'list' => ['Home', 'Gambar', 'Detail'],
        ];

        $page = (object) [
            'title' => 'Detail Gambar',
        ];

        $activeMenu = 'gambar';

        return view('gambar.show', compact('breadcrumb', 'page', 'gambar', 'activeMenu'));
    }

    public function edit(string $id)
    {
        $gambar = GambarModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Edit Gambar',
            'list' => ['Home', 'Gambar', 'Edit'],
        ];

        $page = (object) [
            'title' => 'Edit Gambar',
        ];

        $activeMenu = 'gambar';

        return view('gambar.edit', compact('breadcrumb', 'page', 'gambar', 'activeMenu'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'file' => 'nullable',
        ]);

        if($request->only('file')){
            $file= $request->file('file');
            $filename = Str::random(10).$file->getClientOriginalName();
            $file->storeAs('public/files/',$filename);
            $data['file'] = $filename;
        }
        GambarModel::find($id)->update($data);

        return redirect('/gambar')->with('success', 'Data Gambar berhasil diubah');
    }

    public function destroy(string $id)
    {
        $gambar = GambarModel::find($id);

        if (!$gambar) {
            return redirect('/gambar')->with('error', 'Data Gambar tidak ditemukan');
        }

        try {
            $gambar->delete();
            return redirect('/gambar')->with('success', 'Data Gambar berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect('/gambar')->with('error', 'Data Gambar gagal dihapus');
        }
    }
}