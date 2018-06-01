<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aquario;

class Parametros extends Model
{

	protected $fillable = ['data', 'ph', 'salinidade', 'calcio', 'magnesio', 'reserva_alcalina', 'amonia', 'nitrito','nitrato', 'fosfato', 'silica'];


    public function aquario() {
    	return $this->belongsTo(Aquario::class);
    }
}
