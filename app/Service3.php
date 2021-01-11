<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service3 extends Model
{
    use SoftDeletes;

    protected $table = "services3";
    protected $guarded = [];
    
}
