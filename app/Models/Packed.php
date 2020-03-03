<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packed extends Model
{
    public $incrementing = true;

    protected $fillable = [
        'order_id', 'package_id',
    ];

    protected $table = 'order_package';

    public function children()
    {
        return $this->hasMany(Packed::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Packed::class, 'parent_id');
    }

    public function attributes()
    {
        return $this->morphToMany(Attribute::class, 'attributable')->withTimestamps();
    }
}
