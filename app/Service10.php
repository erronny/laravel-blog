<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service10 extends Model
{
    use SoftDeletes;

    protected $table = "services10";
    protected $guarded = [];
    
}
