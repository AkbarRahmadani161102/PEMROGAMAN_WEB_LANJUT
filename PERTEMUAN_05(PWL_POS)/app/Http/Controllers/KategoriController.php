<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now(),
        // ];

        // DB::table('m_kategori')->insert($data);

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(
        //     [
        //         'kategori_nama' => 'Camilan'
        //     ]
        //     );

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();

        // return 'Delete data berhasil. Jumlah data yand dihapus: '.$row.' baris';

        // $data = DB::table('m_kategori')->get();
        
        // return view('kategori', ['data' => $data]);
        // dd(KategoriModel::all());

        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        return redirect('/kategori');
    }

    public function editCategory($id)
    {
        $category = KategoriModel::find($id);

        return view('kategori.edit', [
            'category' => $category,
        ]);
    }

    public function storeCategory($id, Request $request)
    {
        $validated = $request->validate([
            'kategori_kode' => 'required|string',
            'kategori_nama' => 'required|string',
        ]);

        $category = KategoriModel::find($id);
        $category->update($validated);

        return redirect('/kategori')->with('success', 'Berhasil Menghapus kategori');

    }

    public function deleteCategory($id){
        $category = KategoriModel::find($id);
        $category->delete($category);

        return redirect('/kategori')->with('success', 'Berhasil Menghapus kategori');
    }
}
