<?php

namespace App\Http\Controllers;

use App\Helpers\Trans\Trans;
use App\Models\Translate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $index_data = Translate::all();
        return view('index', ['index_data' => $index_data]);
    }

    public function changeLang(Request $request)
    {
        session(['language' => $request->data]);
        return redirect()->back();
    }
}
