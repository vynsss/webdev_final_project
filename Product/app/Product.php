<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id',
        'status_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }
}
