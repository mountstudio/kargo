<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'name', 'models',
    ];

    protected $casts = [
        'models' => 'array',
    ];

    public function orders()
    {
        return $this->morphedByMany(Order::class, 'attributable')->withTimestamps();
    }

    public function packeds()
    {
        return $this->morphedByMany(Packed::class, 'attributable')->withTimestamps();
    }
}
