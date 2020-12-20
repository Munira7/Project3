<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Control;

class MainController extends Controller
{
    public function index()
    {

        $record = Control::first();
        return view('index', compact('record'));
    }

    public function update(Request $request)
    {
        Control::where('id', $request->id)->update([

            'cont1' => $request->cont1,
            'cont2' => $request->cont2,
            'cont3' => $request->cont3,
            'cont4' => $request->cont4,
            'cont5' => $request->cont5,
            'cont6' => $request->cont6

        ]);
        
        return redirect()->back();
        
    }
}
