<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service8 extends Model
{
    use SoftDeletes;

    protected $table = "services8";
    protected $guarded = [];
    
}
