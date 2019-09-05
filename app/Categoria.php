<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    
    public function pegaCsv($caminho){
        $file = fopen("$caminho",'r');
        
        while (!$file == feof($file)) {
        var_dump($dados = fgetcsv($file));

        return $dados;
        } 
    }
    
}
