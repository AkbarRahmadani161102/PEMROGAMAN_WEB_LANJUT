<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class MBarangController extends Controller
{
    public function index()
    {
        return ProductModel::all();
    }

    public function store(Request $request)
    {
        $m_barang = ProductModel::create($request->all());
        return response()->json($m_barang, 201);
    }

    public function show(ProductModel $m_barang)
    {
        return ProductModel::find($m_barang);
    }

    public function update(Request $request, ProductModel $m_barang)
    {
        $m_barang->update($request->all());

        return ProductModel::find($m_barang);
    }

    public function destroy(ProductModel $m_barang)
    {
        $m_barang->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}