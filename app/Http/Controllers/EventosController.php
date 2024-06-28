<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contato()
    {
        return view('contato');
    }

    public function eventos()
    {
        return view('eventos');
    }
}
