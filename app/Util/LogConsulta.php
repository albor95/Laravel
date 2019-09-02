<?php

namespace app\Util;

class LogConsulta {

    private $caminho;

    public function __construct($caminho) {
        $this->caminho = $caminho;
    }

    public function registrar($pagina,$ip ) {

        $data = date('d/m/Y H:i');
     
        
        if (file_exists(''.$this->caminho.'/log_geral.txt')){
            $dadosAtuais = $this->capturar();
            $dadosAtuais .= "\n".$data;
            $this->gravarArquivo($dadosAtuais, $ip, $pagina);
            
        } else {
            $this->gravarArquivo($pagina,$ip ,$data );
        }

        return $data;
    }
    
    private function gravarArquivo($pagina, $ip, $data ){
        file_put_contents($this->caminho.'/log_geral.txt',$pagina. " - ". $ip ." - ".$data.";" );
        
    }
    
    public function capturar(){
        
       
        $dados = file_get_contents($this->caminho.'/log_geral.txt');
       return $dados;
       
    }
    
public function capturarUlt(){
        
       
        $dados = file_get_contents($this->caminho.'/log_geral.txt');
        $texto = explode(';', $dados);
        $texto = array_reverse($texto);
   
        return $texto[1];
       
    }
}
