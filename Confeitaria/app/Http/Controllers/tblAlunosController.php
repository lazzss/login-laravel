<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tblAlunosController extends Controller
{
    public function tblalunos (){
    return view('site.dashboard.tabelas.tblAlunos');

    }
}
