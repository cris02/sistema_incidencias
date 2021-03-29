<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //retorna la vista home
    public function __invoke()
    {
        return view('home');
    }
}
