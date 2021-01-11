<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service9 extends Model
{
    use SoftDeletes;

    protected $table = "services9";
    protected $guarded = [];
    
}
