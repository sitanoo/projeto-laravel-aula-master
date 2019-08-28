<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Institucional extends Controller
{
    public function index(){
        $titulo = 'Institucional';
        $rodape = date('Y').' Todos os direitos reservados';
        
        $clientIP = \Request::ip();
        $url = \Request::url();
        
        $caminho = '../storage/app';
        $log = new LogConsulta($caminho);
     
     $pagina = "home";
     $data = $log->registrar($clientIP, $pagina);
        
        return view('site.Institucional', compact('titulo', 'rodape'));
    }
}
