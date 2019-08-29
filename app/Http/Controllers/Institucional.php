<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Institucional extends Controller
{
    public function Institucional(){
        $titulo = 'Institucional';
        $rodape = date('Y').' Todos os direitos reservados';
        
        $ip = \Request::ip();
        $url = \Request::url();
        
       $caminho = '../storage/app';
        $log = new LogConsulta($caminho);
     
     $pagina = "Institucional";
     $log->registrar($ip, $pagina);
        
        return view('site.Institucional', compact('titulo', 'rodape'));
    }
}
