<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dialogs extends Controller
{
    public function favarateSite()
    {
        return view('dialogs.favarateSite');
    }

    public function donate()
    {
        return view('dialogs.donate');
    }
}
