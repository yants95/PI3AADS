<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Parametros;
use App\User;
<<<<<<< HEAD
use App\Arduino;
=======
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34

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
<<<<<<< HEAD

    public function arduino() {
        return $this->hasOne(Arduino::class);
    }
=======
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
 }
