<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    use SoftDeletes;

    protected $table = "tbl_stock";
    protected $fillable = [
        'product_id','stock','remark','status','IsActive','createdby'
    ];

    // public function image(){
    //     return $this->hasMany('App\ProductDetail','product_id');
    // }

    // public function defaultImage(){
    //     return $this->belongsTo('App\ProductDetail','id','product_id');
    // }

    
}
