<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class MKategoriController extends Controller
{
    public function index()
    {
        return CategoryModel::all();
    }

    public function store(Request $request)
    {
        $m_kategori = CategoryModel::create($request->all());
        return response()->json($m_kategori, 201);
    }

    public function show(CategoryModel $m_kategori)
    {
        return CategoryModel::find($m_kategori);
    }

    public function update(Request $request, CategoryModel $m_kategori)
    {
        $m_kategori->update($request->all());

        return CategoryModel::find($m_kategori);
    }

    public function destroy(CategoryModel $m_kategori)
    {
        $m_kategori->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}