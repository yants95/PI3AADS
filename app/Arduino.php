<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aquario;

class Arduino extends Model
{
    protected $fillable = ['ip', 'mac_address'];

    public function aquario() {
        return $this->belongsTo(Aquario::class);
    }
}
