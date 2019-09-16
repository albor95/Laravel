<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'codpro';
    protected $nompro= 'nompro';
    protected $despro = 'despro';
    protected $vlrpro = 'vlrpro';
    protected $foreignkey = 'codcat';
    
}
