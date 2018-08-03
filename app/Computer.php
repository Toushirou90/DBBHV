<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
       // Table Name
       protected $table = 'computers';
       // Primary Key
       public $primaryKey = 'pc_id';
       // Timestamps
       public $timestamps = true;
   

}
