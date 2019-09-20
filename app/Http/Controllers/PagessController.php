<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagessController extends Controller
{
    //
    public function index()
    {
    return view('dataview.show');
    }

    public function phpinfo()
    {
    return view('phpinfo.phpinfo');
    }
}
