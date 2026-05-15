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
        $city = City::where('name', ucfirst($name))->first();

        if (! $city) {
            abort(404, 'City not found');
        }

        return view('city', [
            'name' => $city->name,
            'description' => $city->description,
        ]);
    }
}
