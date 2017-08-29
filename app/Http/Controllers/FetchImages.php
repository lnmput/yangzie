<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FetchImages extends Controller
{
    public function index()
    {
        return view('fetchimages.index');
    }
}
