<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'user_id',
        'order_id'
    ];

    public function order() {
        return $this->belongsTo('App\Order');
    }
}
