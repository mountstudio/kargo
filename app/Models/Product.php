<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'country',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class)->using(Order::class)->withPivot(['quantity'])->withTimestamps();
    }

    public function boxes()
    {
        return $this->belongsToMany(Box::class);
    }

    public function attributes()
    {
        return $this->morphMany(Attribute::class, 'attributable');
    }
}
