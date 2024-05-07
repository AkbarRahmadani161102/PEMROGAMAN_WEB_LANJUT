<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StokModel;
use App\Models\ProductModel;
use App\Models\UserModel;
use Yajra\DataTables\Facades\DataTables;
use App\Models\CategoryModel;
use App\Models\LevelModel;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Manajemen Stok',
            'list' => ['Home', 'Stok']
        ];

        $page = (object) [
            'title' => 'Daftar Stok yang terdaftar dalam sistem',
        ];

        $activeMenu = 'stok';
        $stok = StokModel::all();
        $products = ProductModel::all();
        $users = UserModel::all();

        return view('stok.index', compact('breadcrumb', 'page', 'stok', 'products', 'users', 'activeMenu'));
    }

    public function list(Request $request)
    {
        $stok = StokModel::with('product')->with('user');

        if($request->product_id){
            $stok->where('product_id', $request->product_id);
        }

        if($request->user_id){
            $stok->where('user_id', $request->user_id);
        }

        return DataTables::of($stok)
            ->addIndexColumn()
            ->addColumn('aksi', function ($stok) {
                $btn = '<a href="'.url('/stok/'. $stok->stok_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn.= '<a href="'.url('/stok/'. $stok->stok_id. '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn.= '<form class="d-inline-block" method="POST" action="'. url('/stok/'.$stok->stok_id).'">'
                    . csrf_field(). method_field('DELETE')
                    . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>'; 
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function show(string $id)
    {
        $stok = StokModel::with('product')->with('user')->find($id);

        $breadcrumb = (object) [
            'title' => 'Detail Stok',
            'list' => ['Home', 'Stok', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail stok'
        ];

        $activeMenu = 'stok';

        return view('stok.show', compact('breadcrumb', 'page', 'stok', 'activeMenu'));
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Stok',
            'list' => ['Home', 'Stok', 'Tambah'],
        ];

        $page = (object) [
            'title' => 'Tambah stok baru'
        ];

        $products = ProductModel::all();
        $users = UserModel::all();
        $activeMenu = 'stok';

        return view('stok.create', compact('breadcrumb', 'page', 'products', 'users', 'activeMenu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'product_id' => 'required|integer',
            'user_id' => 'required|integer',
            'stok_tanggal' => 'required|date',
            'stok_jumlah' => 'required|integer',
        ]);

        StokModel::create($request->all());
        $activeMenu = 'stok';
        return redirect('/stok')->with('success', 'Data stok berhasil disimpan');
    }

    public function edit(string $id)
    {
        $stok = StokModel::with('product')->with('user')->find($id);
        $products = ProductModel::all();
        $users = UserModel::all();
        $level = LevelModel::all();
        
        $breadcrumb = (object) [
            'title' => 'Edit stok',
            'list' => ['Home', 'stok', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit stok',
        ];

        $activeMenu = 'stok';

        return view('stok.edit', compact('breadcrumb', 'page', 'stok', 'products', 'users', 'activeMenu','level'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'barang_id' => 'nullable|integer',
            'user_id' => 'nullable|integer',
            'stok_tanggal' => 'nullable|date',
            'stok_jumlah' => 'nullable|numeric',
        ]);

        // dd($request->all());

        StokModel::find($id)->update($request->all());

        return redirect('/stok')->with('success', 'Data stok berhasil diubah');
    }

    public function destroy(string $id)
    {
        $check = StokModel::find($id);

        if(!$check){
            return redirect('/stok')->with('error', 'Data stok tidak ditemukan');
        }

        try {
            StokModel::destroy($id);

            return redirect('/stok')->with('success', 'Data stok berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect('/stok')->with('error', 'Data stok gagal dihapus');
        }
    }
}
