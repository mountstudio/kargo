<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function attributes()
    {
        return $this->morphToMany(Attribute::class, 'attributable')->withTimestamps();
    }
}
