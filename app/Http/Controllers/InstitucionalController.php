<?php


namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class InstitucionalController extends Controller{
    public function Institucional(){
        $titulo="Institucional";
        $rodape=date('Y'). 'Todos os direitos reservados';
        $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $ip = $_SERVER['REMOTE_ADDR'];
       $pagina = "institucional";
       $data = $log->registrar($pagina,$ip );
        return view('site.Institucional', compact('titulo','rodape'));
    }
}
