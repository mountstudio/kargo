<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $fillable = [
        'width', 'length', 'height', 'city_id', 'weight', 'package_id',
    ];

    public function packages()
    {
        return $this->morphedByMany(Package::class, 'attributable');
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'attributable');
    }
}
