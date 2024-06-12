<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tabelas(){
        return view('site.dashboard.tabelas');

    }
    public function perfil(){
        return view('site.dashboard.perfil');

    }
}
