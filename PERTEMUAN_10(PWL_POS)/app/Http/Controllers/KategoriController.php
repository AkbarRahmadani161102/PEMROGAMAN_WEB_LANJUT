<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use illuminate\View\View;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');

    }
    public function create():View
    {
        return view('kategori.create');
    }
//     public function create(){
//         return view('kategori.create');
//     }
    public function store(Request $request):RedirectResponse
    {
        $validated = $request->validate([
            'kategori_kode' => 'required',
            'kategori_nama' => 'required',
        ]);
        return redirect('/kategori');
    }
//     public function edit($id) {
//         $data = KategoriModel::find($id);
//         return view('kategori.update', ['data' => $data]);
//     }

    public function update(Request $request, $id) {
        $data = [
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ];
        KategoriModel::where('kategori_id', $id)->update($data);
        return redirect('/kategori');
    }

    public function delete($id) {
        KategoriModel::destroy($id);
        return redirect('/kategori');
}

}
