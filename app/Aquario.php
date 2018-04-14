<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aquario extends Model
{
    protected $fillable = [
        'data_montagem', 'largura', 'altura', 'comprimento', 'descricao','valor', 'data_desmontagem'
    ];
}
