<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service12 extends Model
{
    use SoftDeletes;

    protected $table = "services12";
    protected $guarded = [];
    
}
