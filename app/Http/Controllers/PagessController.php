<?php

namespace App\Http\Controllers;

use Models\Airdata;
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
