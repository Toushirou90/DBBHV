<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function nutzer()
    {
        return $this->hasMany('App\Nutzer', 'u_id');
    }
}
