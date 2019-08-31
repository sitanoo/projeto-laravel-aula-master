<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;


class Institucional extends Controller
{
    public function Institucional(){
        $titulo = 'Institucional';
        $rodape = date('Y').' Todos os direitos reservados';

        
       $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $data = $log->registrar();
     
     
        
        return view('site.Institucional', compact('titulo', 'rodape'));
    }
}
