<?php

namespace App\Http\Controllers;

use Monolog;
use App\Models\CategoryModel;
use App\Models\Category;
use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;


class CategoryController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Manajemen Kategori',
            'list' => ['Home', 'Kategori']
        ];

        $page = (object) [
            'title' => 'Daftar kategori yang terdaftar dalam sistem',
        ];

        $activeMenu = 'categories';

        $categories = CategoryModel::all();
        return view('category.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'categories' => $categories, 'activeMenu' => $activeMenu]);

    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Kategori',
            'list' => ['Home', 'Kategori', 'Tambah'],
        ];

        $page = (object) [
            'title' => 'Tambah kategori baru'
        ];

        $activeMenu = 'categories';

        return view('category.create',['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $categories = CategoryModel::all();

        return DataTables::of($categories)->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
        ->addColumn('aksi', function ($category) { // menambahkan kolom aksi
        $btn = '<a href="'.url('/category/'. $category->kategori_id).'" class="btn btn-info btn-sm">Detail</a> ';
        $btn.= '<a href="'.url('/category/'. $category->kategori_id. '/edit').'" 
        class="btn btn-warning btn-sm">Edit</a> ';
        $btn.= '<form class="d-inline-block" method="POST" action="'. 
        url('/category/'.$category->kategori_id).'">'
       . csrf_field(). method_field('DELETE'). 
        '<button type="submit" class="btn btn-danger btn-sm" 
        onclick="return confirm(\'Apakah Anda yakit menghapus data 
        ini?\');">Hapus</button></form>'; 
        return $btn;
        })
        ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
        ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_kode' => 'required|string|unique:m_kategori',
            'kategori_nama' => 'required|string',
        ]);

        CategoryModel::create($request->all());

        return redirect('/category')->with('success', 'Data Kategori berhasil disimpan');
    }

    public function show(string $id_kategori)
    {
        $category = CategoryModel::find($id_kategori);

        $breadcrumb = (object) [
            'title' => 'Detail Kategori',
            'list' => ['Home', 'Kategori', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Kategori'
        ];

        $activeMenu = 'categories';

        return view('category.show', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page,
            'category' => $category,
            'activeMenu' => $activeMenu
        ]);
    }

    public function edit(string $id)
    {
        $category = CategoryModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Edit Kategori',
            'list' => ['Home', 'Kategori', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit Kategori',
        ];

        $activeMenu = 'categories';

        return view('category.edit', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page,
            'category' => $category,
            'activeMenu' => $activeMenu
        ]);
    }

    public function update(Request $request, string $id)
    {

        $request->validate([
            'kategori_kode' => 'required|string',
            'kategori_nama' => 'required|string',
        ]);

        CategoryModel::find($id)->update($request->all());

        return redirect('/category')->with('success', 'Data kategori berhasil diubah');
    }

    public function destroy(string $id)
    {
        $check = CategoryModel::find($id);

        if (!$check) {
            return redirect('/category')->with('error', 'Data kategori tidak ditemukan');
        }
        
        try {
            CategoryModel::destroy($id);
        
            return redirect('/category')->with('success', 'Data kategori berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect('/category')->with('error', 'Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}