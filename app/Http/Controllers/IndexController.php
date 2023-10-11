<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function changeLang(Request $request)
    {
        session(['language' => $request->data]);
        return redirect()->back();
    }
}
