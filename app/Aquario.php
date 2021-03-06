<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Parametros;
use App\User;
use App\Arduino;

class Aquario extends Model
{
    protected $fillable = [
        'data_montagem', 'largura', 'altura', 'comprimento', 'descricao','valor', 'data_desmontagem'
    ];

    public function parametros() {
    	return $this->hasMany(Parametros::class);
    }

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function arduino() {
        return $this->hasOne(Arduino::class);
    }
 }
