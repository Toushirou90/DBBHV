<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefon extends Model
{
    public function nutzer()
    {
        return $this->belongsTo('App\Nutzer', 'u_id');
    }
}
