<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    
    
    
    public function handle()
    {
        $categoriaBase = new \App\Categoria();
        $dados = array();
        
        $dados = $categoriaBase->pegaCsv("..\pweb\public\dados.csv");
        $i = 0;;
                
        Foreach($dados as $dado){
            $categoria = new \App\Categoria();
            $categoria->catnom = $dados[$i];
            $categoria->save();
            $i++;
        }
    }
    
    
}
