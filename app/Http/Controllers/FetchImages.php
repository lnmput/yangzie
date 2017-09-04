<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class FetchImages extends Controller
{
    public function index()
    {
        return view('fetchimages.index');
    }

    public function fetch(Request $request)
    {
        $url = $request['fetchimageurl'];
        $path = storage_path('temp');
        $fileParh = $path.'/'.time().'.jpg';
        file_put_contents($fileParh, file_get_contents($url));
        return response()->download($fileParh);
    }
}
