<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'status_id'
    ];

    public function cart(){
        return $this->hasMany('App\Cart');
    }
}
