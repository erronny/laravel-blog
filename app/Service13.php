<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service13 extends Model
{
    use SoftDeletes;

    protected $table = "services13";
    protected $guarded = [];
    
}
