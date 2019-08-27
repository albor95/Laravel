<?php

namespace App\Util;

class LogConsulta {

    public $caminho;

    
    
    public function _construct($caminho) {
        $this->caminho = $caminho;
    }

    
    
    public function registrar($formato = 'n') {

        if ($formato == 'n') {
            $data = date('d/m/Y H:i');
        } else if ($formato == 't') {
            $data = time();
        } else {
            $data = 'deu merda';
        }
        
        if(file_exists('storage/app/log_geral.txt')){
            $dadosAtuais=$this->capturar();
            $dadosAtuais.="\n".$data;
            $this->gravarArquivo($dadosAtuais);
        }else{
            $this->gravarArquivo($data);
        }
        
        return $data;
    }
    
    
    
    private function gravarArquivo($data){
         file_put_contents('storage/app/log_geral.txt', $data);
    }
    
    
        public function capturar(){
         $dados= file_get_contents('storage/app/log_geral.txt');
         return $dados;
    }
}
