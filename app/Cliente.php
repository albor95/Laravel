<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'codcli';
    protected $nomcli = 'nomcli';
    protected $cpfcli = 'cpfcli';
    protected $endcli = 'endcli';
    protected $numcli = 'numcli';
    protected $baicli = 'baicli';
    protected $cidcli = 'cidcli';
    protected $ufcli = 'ufcli';
    protected $telcli = 'telcli';
         
  
    
}
