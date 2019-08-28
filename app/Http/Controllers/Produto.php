<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    public function index(){
        $titulo = 'Institucional';
        $rodape = date('Y').' Todos os direitos reservados';
        
        
        return view('site.Produto', compact('titulo', 'rodape'));
    }
}
