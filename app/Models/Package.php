<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function attributes()
    {
        return $this->morphToMany(Attribute::class, 'attributable')->withTimestamps();
    }
}
