<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tblCursosController extends Controller
{
    public function tblcursos (){
        return view('site.dashboard.tabelas.tblCursos');
    
        }
}
