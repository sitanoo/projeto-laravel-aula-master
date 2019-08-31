<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;

class Produto extends Controller
{
    public function Produto(){
        $titulo = 'Institucional';
        $rodape = date('Y').' Todos os direitos reservados';
        
        $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $data = $log->registrar();
        
        return view('site.Produto', compact('titulo', 'rodape'));
    }
}
