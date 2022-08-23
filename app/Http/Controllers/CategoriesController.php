<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category()
    {
        $result = Categories::all();

        return view('category/categories', compact('result'));

    }

    public function insertdata(Request $request)
    {
        dd($request);
        Categories::create($request->all());
    }
}
