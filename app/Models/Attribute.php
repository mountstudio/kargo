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

    public function boxes()
    {
        return $this->morphedByMany(Box::class, 'attributable')->withTimestamps();
    }

    public function cities()
    {
        return $this->morphedByMany(City::class, 'attributable')->withTimestamps();
    }

    public function clients()
    {
        return $this->morphedByMany(Client::class, 'attributable')->withTimestamps();
    }

    public function packages()
    {
        return $this->morphedByMany(Package::class, 'attributable')->withTimestamps();
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'attributable')->withTimestamps();
    }

    public function users()
    {
        return $this->morphedByMany(User::class, 'attributable')->withTimestamps();
    }
}
