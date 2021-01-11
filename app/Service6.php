<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service6 extends Model
{
    use SoftDeletes;

    protected $table = "services6";
    protected $guarded = [];
    
}
