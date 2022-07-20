<?php

namespace App\Http\Controllers;

use App\Models\Atos;


class AtosController extends Controller
{
    public function index()
    {
        $atos = Atos::all();
        

        return view('index', compact('atos'));


    }

    public function show($id)
    {
        $ato = Atos::find($id)->get();

    }


}