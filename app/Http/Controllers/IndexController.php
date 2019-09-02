<?php

namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $titulo="SENAI";
        $rodape=date('Y'). 'Todos os direitos reservados';
       $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $ip = $_SERVER['REMOTE_ADDR'];
       $pagina = "home";
       $data = $log->registrar($pagina,$ip );
        return view('site.index', compact('titulo','rodape'));
        
        
    }
}
