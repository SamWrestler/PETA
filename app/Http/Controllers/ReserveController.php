<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function reserve(Request $request)
    {
        $validated_data = $this->validate($request, [
           'email' => ['required'],
           'number' => ['required']
        ]);
        Reserve::create([
            'email' => $validated_data['email'],
            'number' => $validated_data['number'],
            'co_name' => $request->co_name
        ]);
        return redirect()->back();
    }

    public function delete_reserve(Reserve $reserve)
    {
        $data = Reserve::where('id', $reserve->id)->first();
        $data->delete();
        return redirect()->back();
    }
}
