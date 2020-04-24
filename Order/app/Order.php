<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'cart_id',
        'user_id',
        'total_id'
    ];

    public function cart(){
        return $this->belongsTo('App\Cart');
    }

    public function total(){
        return $this->belongsTo('App\Total_Order');
    }
}
