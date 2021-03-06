<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable = [
        'bill_id', 'product_id', 'quantity',
    ];

    public function bill () {
        return $this->belongsTo('App\Bill');
    }

    public function product () {
        return $this->belongsTo('App\Product');
    }
}
