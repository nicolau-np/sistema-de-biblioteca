<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $title="Sistema de Biblioteca";
        $type="principal";
        $menu="Principal";

        return view('home', compact('title', 'type', 'menu'));
    }
}
