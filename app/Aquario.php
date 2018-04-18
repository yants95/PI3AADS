<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Parametros;

class Aquario extends Model
{
    protected $fillable = [
        'data_montagem', 'largura', 'altura', 'comprimento', 'descricao','valor', 'data_desmontagem'
    ];

    public function parametros() {
    	return $this->hasMany(Parametros::class);
    }

}
