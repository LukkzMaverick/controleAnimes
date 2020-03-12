<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimesController extends Controller
{
    public function index(Request $request){
        $animes = [
            'One piece',
            'Boku no Hero',
            'Code Geass'
        ];
        return view('animes/index', compact('animes') );
    }
}
