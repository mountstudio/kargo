<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'country',
    ];

//    public function attributes()
//    {
//        return $this->belongsToMany(Attribute::class);
//    }
}
