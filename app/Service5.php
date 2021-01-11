<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service5 extends Model
{
    use SoftDeletes;

    protected $table = "services5";
    protected $guarded = [];
    
}
