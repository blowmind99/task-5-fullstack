<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __invoke(Request $request)
    {
        $result = Articles::all();

        return view('content.auth.articles', compact('result'));

    }
}
