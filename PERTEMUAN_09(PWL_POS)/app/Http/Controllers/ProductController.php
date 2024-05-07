<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
{
    $breadcrumb = (object) [
        'title' => 'Manajemen Produk',
        'list' => ['Home', 'Produk']
    ];

    $page = (object) [
        'title' => 'Daftar produk yang terdaftar dalam sistem',
    ];

    $activeMenu = 'product';

    $product = ProductModel::all();
    $categories = CategoryModel::all();

    return view('product.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'product' => $product, 'categories' => $categories, 'activeMenu' => $activeMenu]);
}

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Produk',
            'list' => ['Home', 'Produk', 'Tambah'],
        ];

        $page = (object) [
            'title' => 'Tambah produk baru'
        ];

        $activeMenu = 'product';
        $categories = CategoryModel::all();
        return view('product.create', compact('breadcrumb', 'page', 'categories', 'activeMenu'));
        
        
    }

    public function list(Request $request)
    {
        $product = ProductModel::all();

        return DataTables::of($product)
            ->addColumn('aksi', function ($product) {
                $btn = '<a href="' . url('/product/' . $product->id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/product/' . $product->id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/product/' . $product->id) . '">' . csrf_field() . method_field('DELETE') . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|integer',
            'barang_kode' => 'required|string|min:3|unique:m_barang,barang_kode',
            'barang_nama' => 'required|string|max:100',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
        ]);
        
        ProductModel::create($request->all());
        $product = ProductModel::all();
        $categories = CategoryModel::all();
        return redirect('/product')->with('success', 'Data Produk berhasil disimpan');
    }

    public function show(string $id)
    {
        $product = ProductModel::find($id);

        if (!$product) {
            return redirect('/product')->with('error', 'Data Produk tidak ditemukan');
        }

        $breadcrumb = (object) [
            'title' => 'Detail Produk',
            'list' => ['Home', 'Produk', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Produk'
        ];

        $activeMenu = 'product';
        
        
        return view('product.show', compact('breadcrumb', 'page', 'product', 'activeMenu'));
    }

    public function edit(string $id)
    {
        $product = ProductModel::find($id);
        $categories = CategoryModel::all();

        $breadcrumb = (object) [
            'title' => 'Edit Produk',
            'list' => ['Home', 'Produk', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit Produk',
        ];

        $activeMenu = 'product';

        return view('product.edit', compact('breadcrumb', 'page', 'product', 'categories', 'activeMenu'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori_id' => 'required|integer',
            'barang_kode' => 'required|string|min:3|unique:m_barang,barang_kode,'.$id.',barang_id',
            'barang_nama' => 'required|string|max:100',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
        ]);

        ProductModel::find($id)->update($request->all());

        return redirect('/product')->with('success', 'Data Produk berhasil diubah');
    }

    public function destroy(string $id)
    {
        $product = ProductModel::find($id);

        if (!$product) {
            return redirect('/product')->with('error', 'Data Produk tidak ditemukan');
        }

        try {
            $product->delete();
            return redirect('/product')->with('success', 'Data Produk berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect('/product')->with('error', 'Data Produk gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}
