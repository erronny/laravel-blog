<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service7 extends Model
{
    use SoftDeletes;

    protected $table = "services7";
    protected $guarded = [];
    
}
