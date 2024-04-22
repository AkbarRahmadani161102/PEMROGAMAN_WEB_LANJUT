<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($idUser, $name){
        return view('user.user', ['idUser' => $idUser, 'name' => $name]);
    }
}
