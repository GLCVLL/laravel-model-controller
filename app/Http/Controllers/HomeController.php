<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // funzione che restituisce i movie
    public function index()
    {
        return view('home');
    }
}
