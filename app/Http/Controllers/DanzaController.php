<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanzaController extends Controller
{
    //
    public function index(){
        return view('talleres.danza');
    }
}
