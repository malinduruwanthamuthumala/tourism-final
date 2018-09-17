<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    //
     //table name
     protected $table  = 'transport';
     //primary key
     public $primaryKey= 'transportid';
     //time stamp
     public $timestamps= 'true';
}
