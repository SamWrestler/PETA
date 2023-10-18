<?php

namespace App\Http\Controllers;

use App\Models\Translate;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $data = Translate::all();
        return view('admin.index', ['data' => $data]);
    }
}
