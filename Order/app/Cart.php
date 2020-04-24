<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'user_id',
        'date',
        'status_id'
    ];

    public function status() {
        return $this->belongsTo('App\Status');
    }
}
