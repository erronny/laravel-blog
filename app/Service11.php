<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service11 extends Model
{
    use SoftDeletes;

    protected $table = "services11";
    protected $guarded = [];
    
}
