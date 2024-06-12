<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tblMatriculasController extends Controller
{
    public function tblmatricula (){
        return view('site.dashboard.tabelas.tblMatricula');
    
        }
}
