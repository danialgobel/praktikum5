<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function user(string $name)
    {
        return view('user', [
            'name' => $name,
        ]);
    }

    public function product(int $id)
    {
        return view('product', [
            'id' => $id,
        ]);
    }

    public function city(string $name)
    {
        return view('city', [
            'name' => ucfirst($name),
        ]);
    }
}
