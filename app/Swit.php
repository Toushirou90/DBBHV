<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swit extends Model
{
    // Table Name
    protected $table = 'switches';
    // Primary Key
    public $primaryKey = 'sw_id';
    // Timestamps
    public $timestamps = true;
}
