<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'country',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class)->using(Order::class)->withTimestamps();
    }

//    public function attributes()
//    {
//        return $this->belongsToMany(Attribute::class);
//    }
}
