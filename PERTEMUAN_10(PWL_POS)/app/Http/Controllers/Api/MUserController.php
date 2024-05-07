<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;

class MUserController extends Controller
{
    public function index()
    {
        return UserModel::all();
    }

    public function store(Request $request)
    {
        $m_user = UserModel::create($request->all());
        return response()->json($m_user, 201);
    }

    public function show(UserModel $m_user)
    {
        return UserModel::find($m_user);
    }

    public function update(Request $request, UserModel $m_user)
    {
        $m_user->update($request->all());

        return UserModel::find($m_user);
    }

    public function destroy(UserModel $m_user)
    {
        $m_user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}