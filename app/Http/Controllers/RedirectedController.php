<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class RedirectedController extends Controller
{
    // membuat route ke external link
    public function contactus()
    {
        return Redirect::to('https://www.linkedin.com/in/rifqi-fauzi-/');
    }
}
