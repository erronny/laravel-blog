<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service4 extends Model
{
    use SoftDeletes;

    protected $table = "services4";
    protected $guarded = [];
    
}
