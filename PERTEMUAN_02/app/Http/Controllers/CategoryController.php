<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $arr = [
            'Gado-Gado',
            'Sate',
            'Nasi Goreng',
        ];
        return view('category.food-beverage', ["foodBeverage" => $arr]);
    }

    public function beautyHealth()
    {
        $arr = [
            'Skin Care',
            'Face Treatment',
            'Beauty Massage',
        ];

        return view('category.beauty-health', ['beautyHealth' => $arr]);
    }

    public function homeCare()
    {
        $arr = [
            'Home Cleaning',
            'Home Care',
        ];

        return view('category.home-care', ['homeCare' => $arr]);
    }

    public function babyKid()
    {
        $arr = [
            'Baby Care',
            'Baby Massage',
        ];

        return view('category.baby-kid', ['babyKid' => $arr]);
    }
}
