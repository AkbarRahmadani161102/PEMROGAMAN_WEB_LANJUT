<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];

        // userModel::create($data);


        // $data = [
        //     'nama' => 'Pelanggan Pertama'
        // ];

        // userModel::where('username', 'customer-1')->update($data);

        // $user = userModel::all();
        // $user = userModel::find(1);
        // $user = userModel::where('level_id',1)->first();
        // $user = userModel::firstWhere('level_id',1);

        // $user = userModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // $user = userModel::findOrFail(1);

        // $user = userModel::where('username', 'manager9')->firstOrFail();

        // $user = userModel::where('level_id', 2)->count();

        // dd($user);

        // $user = userModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama'=> 'Manager'
        //     ]
        // );

        // $user = userModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama'=> 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ]
        // );


        // $user = userModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama'=> 'Manager',
        //     ]
        // );


        // $user = userModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama'=> 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );

        // $user->save();

        // $user = userModel::firstOrNew(
        //     [
        //         'username' => 'manager55',
        //         'nama'=> 'Manager55',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );

        // $user->username = 'manager56';

        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama', 'username']);

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama', 'username']);

        // $user->save();

        // $user->isDirty();
        // $user->isClean();
        // dd($user->isDirty());

        // $user = userModel::create(
        //     [
        //         'username' => 'manager11',
        //         'nama'=> 'Manager11',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );

        // $user->username = 'manager12';

        
        
        // $user->save();

        // $user->wasChanged();
        // $user->wasChanged('username');
        // $user->wasChanged(['username', 'level_id']);
        // $user->wasChanged('nama');
        // $user->wasChanged(['nama', 'username']);
        // dd( $user->wasChanged(['nama', 'username']));



        // $user = userModel::all();

        $user = userModel::with('level')->get();

        return view('user', ['data' => $user]);

    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = userModel::find($id);

        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = userModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password);
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');

    }

    public function hapus($id)
    {
        $user = userModel::find($id);
        $user->delete();

        return redirect('/user');

    }


}
