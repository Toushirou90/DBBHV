<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutzer extends Model
{
           // Table Name
           protected $table = 'nutzers';
           // Primary Key
           public $primaryKey = 'u_id';
           // Timestamps
           public $timestamps = true;

    public function room()
    {
        return $this->belongsTo('App\Room', 'ro_id');
    }

    public function telefon()
    {
        return $this->hasOne('App\Telefon', 'te_id');
    }
}
