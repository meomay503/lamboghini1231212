<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'product_id', 'persent',
    ];

    public function product (){
        return $this->belongsTo('App\Product');
    }
}
