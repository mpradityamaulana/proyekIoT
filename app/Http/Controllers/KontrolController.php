<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolController extends Controller
{
    public function index(){
        return view('pages.teskontrol');
    }

    public function update(Request $r){
        $data = $r->validate([
            'x' => 'required|numeric',
            'y' => 'required|numeric',
            'z' => 'required|numeric',
            'rx'=> 'required|numeric',
            'ry'=> 'required|numeric',
            'rz'=> 'required|numeric',
            'zoom'=>'required|numeric',
        ]);
        
        session(['cube_state' => $data]);

        return response()->json(['saved' => true]);
    }
}
