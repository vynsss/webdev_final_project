<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total_Order extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'status_id'
    ];

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function order(){
        return $this->hasMany('App\Order');
    }
}
